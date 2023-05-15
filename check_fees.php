<?php

if(isset($_POST['checkUser'])){
    // Create a connection to the MySQL database
    $servername = "localhost"; 
    $username = "root";
    $password = "1717"; 
    $dbname = "school_project"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    $courseId = $conn->real_escape_string($_POST['checkUser']);
    // Check username availability in course_details table
    $sql1 = "SELECT course_id FROM course_details WHERE course_id = '$courseId'";
    $result = $conn->query($sql1);

    if($result->num_rows == 0 ){
        echo "$courseId Course Id not Registered.";
      
    }else{
        echo "$courseId ";
    }

    $conn->close();
}

?>