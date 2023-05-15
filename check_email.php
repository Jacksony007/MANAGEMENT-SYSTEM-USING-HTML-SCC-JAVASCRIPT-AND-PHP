<?php

if(isset($_POST['checkUser'])){
    // Create a connection to the MySQL database
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your MySQL username
$password = "1717"; // Update with your MySQL password
$dbname = "school_project"; // Update with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

$email = $conn->real_escape_string($_POST['checkUser']);

$sql = "SELECT email FROM college_login WHERE email = '$email'";
$result = $conn->query($sql);

 if($result->num_rows == 0){
        echo "$email is available.";
 }else{
        echo "$email is NOT Available";
 }

}



?>