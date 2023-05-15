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
$tableName = "password_resets";
$sqlCheckTable = "SHOW TABLES LIKE '$tableName'";
$result = mysqli_query($conn, $sqlCheckTable);

// Step 3: If table does not exist, create it
if (mysqli_num_rows($result) == 0) {
    // Define the SQL query to create a table
    $sql = "CREATE TABLE $tableName (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email_or_username VARCHAR(255) NOT NULL,
    token VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    FOREIGN KEY (username) REFERENCES college_login (username) ON DELETE CASCADE
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

if (isset($_POST['username_or_email'])) {
    $username_or_email = $_POST['username_or_email'];
    
    // Step 2: Generate a password reset token

    // Establish a database connection
    $dsn = "mysql:host=localhost;dbname=school_project";
    $username = "root";
    $password = "1717";
    $pdo = new PDO($dsn, $username, $password);

    // Prepare a SQL statement that selects the user with the email address or username provided in the form
    $stmt = $pdo->prepare("SELECT * FROM college_login WHERE email = ? OR username = ?");
    $stmt->execute([$username_or_email, $username_or_email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // If the email address or username is valid and a user with that email address or username is found in the database
    if ($user) {
        // Generate a unique token
        $token = uniqid();

        // Insert the token, email address or username, and current timestamp into a new row in the "password_resets" table
        $stmt = $pdo->prepare("INSERT INTO password_resets (username, email_or_username, token, created_at) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user['username'], $user['email'], $token, date('Y-m-d H:i:s')]);

        // Send an email to the user's email address with a link that includes the token as a query parameter
        require_once 'vendor/autoload.php'; // Include the PHPMailer library
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'jacksonpetermwaluko.114058@marwadiuniversity.ac.in'; // Replace with your email address
        $mail->Password = '9998832499'; // Replace with your email password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('jacksonpetermwaluko.114058@marwadiuniversity.ac.in', 'Jackson'); // Replace with your email and name
        $mail->addAddress($user['email'], $user['name']);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Please click the following link to reset your password: https://example.com/reset_password.php?token=' . $token;
        if ($mail->send()) {

              $message = "An email has been sent to your email address with instructions on how to reset your password.";
              header('Location: password_reset.php?message=' . urlencode($message));
                      exit;    
        } else {
            
             $error_message = "There was an error sending the email.";
              header('Location: password_reset.php?error_message=' . urlencode($error_message));
                      exit;    
        }
    } else {
        
         $error_message = "No user with that email address or username was found.";
              header('Location: password_reset.php?error_message=' . urlencode($error_message));
                      exit; 
    }
}

?>