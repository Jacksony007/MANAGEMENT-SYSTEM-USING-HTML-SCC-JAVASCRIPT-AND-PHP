<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID of the record to be deleted
$username = $_GET["id"];

// Check if the user has confirmed the delete action
if (isset($_GET["confirm"]) && $_GET["confirm"] == "yes") {

    // Execute the delete query
    
    $sql_login = "DELETE FROM college_login WHERE username = '$username'";
    
    if ($conn->query($sql_login)) {
        echo "<script>alert('Record deleted successfully.');</script>";
        echo "<script>window.location.href='admin_manage_student.php';</script>";
    } else {
        echo "<script>alert('Error deleting record: " . $conn->error . "');</script>";
        echo "<script>window.location.href='admin_manage_student.php';</script>";
    }

} else {

    // Show the confirmation message
    echo "<script>if(window.confirm('Are you sure you want to delete this record?')){";
    echo "window.location.href='delete_student.php?id=$username&confirm=yes';";
    echo "} else {";
    echo "window.location.href='admin_manage_student.php';";
    echo "}</script>";
}

$conn->close();
?>