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
$sql = "SHOW TABLES LIKE 'staff_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
$sql = "CREATE TABLE staff_details (
    staff_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    title ENUM('Professor', 'Assistant Professor', 'Dr', 'Mr', 'Mrs', 'Miss'),
    firstname VARCHAR(50),
    middlename VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50),
    gender ENUM('Male', 'Female', 'Other'),
    date_of_birth DATE,
    specialization VARCHAR(255),
    address VARCHAR(255),
    mobile_number VARCHAR(20),
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
    // Include the database connection file

    $username = $_POST["username"];
    $title = $_POST["title"];
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $specialization = $_POST["specialization"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $usertype = "staff";
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
        $sql_staff = "INSERT INTO staff_details (username, title, firstname, middlename, lastname, email, gender, date_of_birth, specialization, address, mobile_number, password, profile_pic) 
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_staff = $conn->prepare($sql_staff);
        $stmt_staff->bind_param("sssssssssssss", $username, $title, $firstname, $middlename, $lastname, $email, $gender, $dob, $specialization, $address, $phone, $password, $img);
        $stmt_staff->execute();


        $stmt_staff->close();

        $message = " ".$username." has been successfully Registered.";
        header('Location: admin_add_facult.php?message=' . urlencode($message));
                      exit;
      

    } 
    else if($resultUsername->num_rows > 0 || $resultEmail->num_rows > 0){
         $message = "Error: Username or Email already Registered.";
        header('Location: admin_add_facult.php?message=' . urlencode($message));
                      exit;
        
    } 
}

?>