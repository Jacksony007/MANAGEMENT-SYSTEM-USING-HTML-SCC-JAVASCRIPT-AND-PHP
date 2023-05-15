<?php
// Create a connection to the MySQL database
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your MySQL username
$password = "1717"; // Update with your MySQL password
$dbname = "school_project"; // Update with your database name

// Check if username is available in the database
$username = $_POST['username'];

// Connect to the database
$db_connection = mysqli_connect('localhost', 'root', '1717', 'school_project');

// Check for database connection errors
if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
    exit;
}

// Perform username validation check
$query = "SELECT * FROM college_login WHERE username = '$username'";
$result = mysqli_query($db_connection, $query);
if (mysqli_num_rows($result) > 0) {
    echo "<script>document.getElementById('usernameError').innerHTML = 'Username already taken.'</script>";
} else {
    // Username is available
    echo '';
}

// Close database connection
mysqli_close($db_connection);
?>