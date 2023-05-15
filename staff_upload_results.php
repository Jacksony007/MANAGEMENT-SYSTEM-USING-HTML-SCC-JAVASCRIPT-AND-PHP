<!DOCTYPE html>
<html>

<head>
    <title>Upload PDFs to MySQL</title>
</head>

<body> <?php
// Create a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Create a table to store the PDFs if it does not exist already
$sql = "CREATE TABLE IF NOT EXISTS pdfs (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
    course_id INT(11) UNSIGNED,
	filename VARCHAR(30) NOT NULL,
	type VARCHAR(30) NOT NULL,
	data LONGBLOB NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	FOREIGN KEY (username) REFERENCES college_login (username) ON DELETE CASCADE,
    FOREIGN KEY (course_id) REFERENCES course_details (course_id),
)";
if ($conn->query($sql) === FALSE) {
	echo "Error creating table: " . $conn->error;
}

// Check if a file was uploaded
if (isset($_FILES['pdf'])) {
	// Get the file information
	$file_name = $_FILES['pdf']['name'];
	$file_type = $_FILES['pdf']['type'];
	$file_size = $_FILES['pdf']['size'];
	$file_temp = $_FILES['pdf']['tmp_name'];

	// Open the file and read its contents
	$file = fopen($file_temp, 'rb');
	$file_data = fread($file, $file_size);
	fclose($file);

	// Insert the file into the database
	$sql = "INSERT INTO pdfs (username, course_id, filename, type, data) VALUES (?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('sssss', $file_name, $file_type, $file_data);
	if ($stmt->execute() === FALSE) {
		echo "Error inserting PDF: " . $conn->error;
	} else {
		echo "PDF uploaded successfully.";
	}
}

$conn->close();
?> </body>

</html>