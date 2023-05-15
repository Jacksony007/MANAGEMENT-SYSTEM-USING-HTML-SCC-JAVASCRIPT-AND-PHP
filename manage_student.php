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

// Retrieve user data
$sql = "SELECT * FROM student_details";
$result = $conn->query($sql);

// Generate table rows
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

       $date = $row["date_of_birth"];
       $dob = date('d-m-Y', strtotime($date));

        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["middlename"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["mobilenumber"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $dob . "</td>";
      
        echo "<td>" . $row["course"] . "</td>";
        echo "<td>" . $row["start_year"] . "</td>";
        echo "<td>" . $row["end_year"] . "</td>";
      
        echo "<td>" . $row["last_login"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "<td><img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['profile_pic'])."' style='border-radius: 10px;'></td>";
        echo "<td>";
        echo "<a href='edit.php?id=" . $row["username"] . "' class='btn btn-success'>Edit</a> ";
        echo "<a href='delete_student.php?id=" . $row["username"] . "' class='btn btn-danger'>Delete</a>";
        echo "</td>";

        echo "</tr>";
    }
} else {
    echo "No users found.";
}

$conn->close();
?>