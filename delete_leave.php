<?php
    $servername = "localhost";
    $username = "root";
    $password = "1717";
    $dbname = "school_project";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check if a leave application has been deleted
if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM leave_details WHERE id=$id";
  if ($conn->query($sql) === TRUE) {
 echo "<script>window.location.href='admin_staff_leave.php';</script>";
  } else {
    echo $conn->error;
  }
}

// Close database connection
$conn->close();
?>