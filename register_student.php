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
$sql = "SHOW TABLES LIKE 'student_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
  $sql = "CREATE TABLE student_details (
        student_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        firstname VARCHAR(50),
        middlename VARCHAR(50),
        lastname VARCHAR(50),
        email VARCHAR(50),
        gender ENUM('Male', 'Female', 'Other'),
        date_of_birth DATE,
        course VARCHAR(50),
        address VARCHAR(255),
        mobilenumber VARCHAR(20),
        password VARCHAR(255),
        profile_pic LONGBLOB,
        start_year INT(4),
        end_year INT(4),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        is_active TINYINT(1) DEFAULT 1,
        last_login DATETIME,
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

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $usertype = "student";
    $dob = date("Y-m-d", strtotime($_POST['dob']));

     //Image Upload
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);

    // Check username availability
    $sqlUsername = "SELECT username FROM college_login WHERE username = '$username'";
    $resultUsername = $conn->query($sqlUsername);
    
    // Check email availability
    $sqlEmail = "SELECT email FROM college_login WHERE email = '$email'";
    $resultEmail = $conn->query($sqlEmail);

    if($resultUsername->num_rows == 0 && $resultEmail->num_rows == 0){

         // Insert data into the login_user table
        $sql_login = "INSERT INTO college_login (username, email, usertype, password) VALUES (?, ?, ?, ?)";
        $stmt_login = $conn->prepare($sql_login);
        $stmt_login->bind_param("ssss", $username,$email, $usertype, $password);
        $stmt_login->execute();

        $stmt_login->close();
      
            // Insert data into the student_details table
        $sql_student = "INSERT INTO student_details (username, firstname, middlename, lastname, email, gender, date_of_birth, course, address, mobilenumber, password, profile_pic) 
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_student = $conn->prepare($sql_student);
        $stmt_student->bind_param("ssssssssssss", $username, $firstname, $middlename, $lastname, $email, $gender, $dob, $course, $address, $phone, $password, $img);
        $stmt_student->execute();
        $stmt_student->close();

       
        $message = " ".$username." has been successfully Registered.";
        header('Location: admin_add_student.php?message=' . urlencode($message));
                      exit;

    } 
    else if($resultUsername->num_rows > 0 || $resultEmail->num_rows > 0){

         $error_message = "Error: Username or Email already Registered.";
        header('Location: admin_add_student.php?error_message=' . urlencode($error_message));
                      exit;    
    } 
}

?>