<?php

if(isset($_POST['checkUser'])){
    // Create a connection to the MySQL database
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your MySQL username
$password = "1717"; // Update with your MySQL password
$dbname = "school_project"; // Update with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

$username = $conn->real_escape_string($_POST['checkUser']);

$sql = "SELECT username FROM college_login WHERE username = '$username'";
$result = $conn->query($sql);

 if($result->num_rows == 0){
        echo "$username is available.";
 }else{
        echo "$username is NOT Available";
 }

}



?>