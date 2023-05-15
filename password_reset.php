<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="https://kit.fontawesome.com/870eb544be.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body id="body">
    <nav>
        <img src="logo.png" alt="DEMO" />
        <div class="navigation">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contact.php">Contant Us</a></li>
            </ul>
        </div>
    </nav>
    <section id="password-container">
        <div class="forget-password">
            <form action="reset_password.php" id="password-form" method="post">
                <h3>Reset Password</h3>
                <div id="sumessage" style="text-align: center;"> <?php
                if (isset($_GET['message'])) {
                echo '<p style="color: #2596be;">' . $_GET['message'] . '</p>';
                }
            ?> </div>
                <div id="sumessage" style="text-align: center;"> <?php
        if (isset($_GET['error_message'])) {
            echo '<p id="error-message" style="color: red;">' . $_GET['error_message'] . '</p>';
        }
    ?> </div>
                <input type="text" placeholder="Enter Username or Email" id="username_or_email"
                    name="username_or_email" /><br /><br /><br /><br />
                <button type="submit" id="reset-btn">Reset Password </button>
            </form>
        </div>
    </section>
    <script>
    // Wait for the page to load
    document.addEventListener('DOMContentLoaded', function() {
        // Find the error message element
        const errorMessage = document.getElementById('error-message');
        // Check if it exists
        if (errorMessage) {
            // Remove the error message after 3 seconds
            setTimeout(function() {
                errorMessage.remove();
            }, 3000);
        }
    });
    </script>
</body>

</html>