<?php
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table already exists
$sql = "SHOW TABLES LIKE 'fees_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
    $sql = "CREATE TABLE fees_details (
        fee_id INT PRIMARY KEY AUTO_INCREMENT,
        course_id INT(11) UNSIGNED,
        fees_amount DECIMAL(10, 2) NOT NULL,
        FOREIGN KEY (course_id) REFERENCES course_details (course_id),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table fees_details created successfully.";
    } else {
        echo "Error creating table: " . $conn->error;
        exit;
    }
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) {
    $CourseId = $_POST['courseId'];
    $FeesAmount = $_POST['fees_amount'];

    $sql = "SELECT course_id FROM course_details WHERE course_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $CourseId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows != 0) {
        $insertSql = "INSERT INTO fees_details (course_id, fees_amount) VALUES (?, ?)";
        $stmt = $conn->prepare($insertSql);
        $stmt->bind_param("id",$CourseId, $FeesAmount);
        if ($stmt->execute()) {
            echo "<script>alert('" . $FeesAmount . " has been successfully added.');</script>";
            echo "<script>window.location.href='admin_add_fees.php';</script>";
            exit;
        } else {
            echo "<script>alert('Error: " . $stmt->error . "');</script>";
            echo "<script>window.location.href='admin_add_fees.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Error: Invalid Course ID.');</script>";
        echo "<script>window.location.href='admin_add_fees.php';</script>";
        exit;
    }
}
?>