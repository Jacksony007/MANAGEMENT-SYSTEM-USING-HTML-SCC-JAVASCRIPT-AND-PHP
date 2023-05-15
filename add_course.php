<?php
// Create a connection to the MySQL database
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
$sql = "SHOW TABLES LIKE 'course_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
    $sql = "CREATE TABLE course_details (
        course_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        course_name VARCHAR(100) NOT NULL,
        department_name VARCHAR(100) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
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

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $department = $_POST["department"];
    $course = $_POST["course"];

    $sql1 = "SELECT course_name FROM course_details WHERE course_name = '$course'";
    $result1 = $conn->query($sql1);

    // Check username availability in course_details table
    $sql2 = "SELECT department_name FROM course_details WHERE department_name = '$department'";
    $result2 = $conn->query($sql2);

    if($result1->num_rows == 0 && $result2->num_rows != 0){
          
    // Insert data into the student_details table
    $sql = "INSERT INTO course_details ( course_name, department_name) 
                VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$course,  $department);
    $stmt->execute();
   
    $stmt->close();

    echo "<script>alert('" . $course . " has been successfully added.');</script>";
    echo "<script>window.location.href='admin_add_course.php';</script>";
    exit;

      
    }else{
       
        echo "<script>alert('Error: Course already registered in the Department.');</script>";
        echo "<script>window.location.href='admin_add_course.php';</script>";
        exit;

    }

}
    $conn->close();
?>