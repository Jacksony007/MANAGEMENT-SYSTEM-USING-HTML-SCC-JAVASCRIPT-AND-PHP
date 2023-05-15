<?php
// Step 1: Establish a database connection
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 2: Define the SQL query to check if the table exists
$tableName = "college_login";
$sqlCheckTable = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sqlCheckTable);

// Step 3: If table does not exist, create it
if (mysqli_num_rows($result) == 0) {
    // Define the SQL query to create a table
    $sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL UNIQUE KEY,
    email VARCHAR(50) NOT NULL,
    usertype VARCHAR(30) NOT NULL,
    password VARCHAR(255) NOT NULL,
    last_login TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    
    // Execute the SQL query
    if (mysqli_query($conn, $sql)) {
        echo "Table created successfully.";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}

// Step 4: Close the database connection
mysqli_close($conn);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Sanitize user input
    $username = mysqli_real_escape_string($conn, $username);

    // Step 5: Retrieve hashed password from database
    $sql = "SELECT * FROM $tableName WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    // Step 6: Verify password
    if (password_verify($password, $row["password"])) {
        // Perform authentication (e.g., query database)
        if ($row["usertype"] == "admin") {
            // Authentication successful, create session and redirect to dashboard or other page
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: admin.php");
            exit;
        } elseif ($row["usertype"] == "staff") {
            // Authentication successful, create session and redirect to dashboard or other page
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: staff.php");
            exit;
        } elseif ($row["usertype"] == "student") {
            // Authentication successful, create session and redirect to dashboard or other page
            session_start();
            $_SESSION["username"] = $row["username"];
            header("Location: student.php");
            exit;
        } else {
            // Failed login, redirect back to login page with error message
            $error_message = "Incorrect username or password.";
            header('Location: login.php?error=' . urlencode($error_message));
            exit;
        }
    } else {
        // Failed login, redirect back to login page with error message
        $error_message = "Incorrect username or password.";
        header('Location: login.php?error=' . urlencode($error_message));
        exit;
    }
}
?>