<?php

if(isset($_POST['checkUser'])){
    // Create a connection to the MySQL database
    $servername = "localhost"; 
    $username = "root";
    $password = "1717"; 
    $dbname = "school_project"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    $course = $conn->real_escape_string($_POST['checkUser']);
    $department = $conn->real_escape_string($_POST['checkUser']);
    // Check username availability in course_details table
    $sql1 = "SELECT course_name FROM course_details WHERE course_name = '$course'";
    $result1 = $conn->query($sql1);

    // Check username availability in course_details table
    $sql2 = "SELECT department_name FROM course_details WHERE department_name = '$department'";
    $result2 = $conn->query($sql2);

    if($result1->num_rows == 0 && $result2->num_rows == 0){
        echo "$course is available.";
      
      
    }else{
        echo "$course is already Registered";
    }

    $conn->close();
}

?>