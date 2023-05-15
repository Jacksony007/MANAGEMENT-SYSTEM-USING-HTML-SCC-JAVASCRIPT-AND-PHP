<?php

// Create a connection to the MySQL database
$servername = "localhost"; // Update with your server name
$username = "root"; // Update with your MySQL username
$password = "1717"; // Update with your MySQL password
$dbname = "validation"; // Update with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table already exists
$sql = "SHOW TABLES LIKE 'student_details'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    // Table does not exist, create table
$sql = "CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}
$conn->close();