<?php
// Step 1: Start a session
session_start();

// Step 2: Establish a database connection
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Retrieve username from URL parameter or session variable
if (isset($_GET["username"])) {
    $username = $_GET["username"];
    $_SESSION["username"] = $username; // Store username in session variable
} elseif (isset($_SESSION["username"])) {
    $username = $_SESSION["username"]; // Retrieve username from session variable
} else {
    header("Location: login.php"); // Redirect to login page if username is not set
    exit;
}

// Step 4: Retrieve user's information from database
$sql = "SELECT * FROM student_details WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Step 5: Store user's information in variables
$student_Id = $row["student_id"];
$username = $row["username"];
$fname = $row["firstname"];
$mname = $row["middlename"];
$lname = $row["lastname"];
$gender = $row["gender"];
$email = $row["email"];
$dob = $row["date_of_birth"];
$mobile_number = $row["mobilenumber"];
$fullname = ucwords($fname . " " . $mname . " " . $lname);


// Step 6: Close the database connection
mysqli_close($conn);
?>