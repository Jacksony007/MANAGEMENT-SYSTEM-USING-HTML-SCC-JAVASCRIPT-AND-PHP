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

// Fetch data from student_details table
$sql = "SELECT * FROM staff_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["staff_id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["firstname"] . "</td>";
        echo "<td>" . $row["middlename"] . "</td>";
        echo "<td>" . $row["lastname"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["mobile_number"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        echo "<td>" . $row["specialization"] . "</td>";   
        echo "<td>" . $row["start_year"] . "</td>";
        echo "<td>" . $row["end_year"] . "</td>";
        echo "<td>" . $row["last_login"] . "</td>";
        echo "<td><img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['profile_pic'])."' style='border-radius: 10px;'></td>";
      
        echo "<td><a href='edit.php?id=" . $row["username"] . "' class='btn btn-success'>Edit</a> ";
        echo "<a href='delete.php?id=" . $row["username"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")' class='btn btn-danger'>Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "No results found.";
}

$conn->close();
?>