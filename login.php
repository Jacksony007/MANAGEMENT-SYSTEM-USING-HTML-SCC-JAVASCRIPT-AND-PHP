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

<body>
    <nav>
        <img src="logo.png" alt="DEMO" />
        <div class="navigation">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="#">Login</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="help.php">Help</a></li>
                <li><a href="contact.php">Contant Us</a></li>
            </ul>
        </div>
    </nav>
    <section id="log">
        <form action="login_user.php" id="main" method="post">
            <h1 class="headlog">LOGIN</h1>
            <div id="Incorrect"> <?php
if (isset($_GET['error'])) {
    echo '<p id="error-message" style="color: red;">' . $_GET['error'] . '</p>';
}
?> </div><br /><br /><input type="text" placeholder="Username" id="Username" name="Username" /><input type="password"
                placeholder="Password" id="Password" name="Password" /><label for="Forget"><a
                    href="password_reset.php">Forget Password?</a></label>
            <br /><br /><br /><br />
            <button id="Submit">Login</button>
        </form>
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
            }, 5000);
        }
    });
    </script>
</body>

</html>