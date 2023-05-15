<?php

// Create a connection to the MySQL database
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your MySQL username
$password = "1717"; // Update with your MySQL password
$dbname = "school_project"; // Update with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table already exists
$sql = "SHOW TABLES LIKE 'leave_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
 $sql = "CREATE TABLE leave_details (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    username VARCHAR(30) NOT NULL,
    leave_type VARCHAR(50) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    reason TEXT NOT NULL,
    usertype VARCHAR(50) NOT NULL,
    status VARCHAR(50),
    application_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     FOREIGN KEY (username) REFERENCES college_login (username) ON DELETE CASCADE
)";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $leaveType = mysqli_real_escape_string($conn, $_POST['leave-type']);
    $startDate = mysqli_real_escape_string($conn, $_POST['start-date']);
    $endDate = mysqli_real_escape_string($conn, $_POST['end-date']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);
    $usertype = "staff";

    // Insert data into database
    $sql = "INSERT INTO leave_details (name, username, leave_type, start_date, end_date, reason, usertype) 
            VALUES ('$name', '$username', '$leaveType', '$startDate', '$endDate', '$reason', '$usertype')";

    if (mysqli_query($conn, $sql)) {
       
        $message = "Leave application submitted successfully!.";
        header('Location: staff_leave.php?message=' . urlencode($message));
        exit;

    } else {
         $message = "Error: " . mysqli_error($conn) . "";
         header('Location: staff_leave.php?message=' . urlencode($message));
       
    }

    // Close database connection
    mysqli_close($conn);
}


?>