<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Registration Form</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <body>
        <h1>Student Registration Form</h1>
        <style>
        .form-container {
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 5px;
            max-width: 500px;
            /* Set a max-width to center the form on the page */
            margin: 0 auto;
            /* Center the form horizontally */
        }

        .form-container label {
            grid-column: 1 / 2;
            margin-bottom: 10px;
            text-align: left;
            /* Align labels to the right */
        }

        .form-container input {
            grid-column: 2 / 3;
            margin-bottom: 10px;
            height: 40px;
            width: 100%;
            border-radius: 5px;
            /* Make the inputs fill the entire column width */
            padding: 0px;
            /* Add some padding for visual appeal */
            box-sizing: border-box;
            /* Include padding in the total width of the input */
        }

        .error {
            color: red;
        }
        </style>
        <form id="registrationForm" action="register_student.php" method="post" class="form-container">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <div id="usernameError" class="error"></div>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
            <div id="firstnameError" class="error"></div>
            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" name="middlename" required>
            <div id="middlenameError" class="error"></div>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
            <div id="lastnameError" class="error"></div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <div id="emailError" class="error"></div>
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
            <div id="courseError" class="error"></div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
            <div id="addressError" class="error"></div>
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <div id="phoneError" class="error"></div>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <div id="dobError" class="error"></div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <div id="passwordError" class="error"></div>
            <label for="pass_1">Confirm Password:</label>
            <input type="password" id="pass_1" name="pass_1" required>
            <div id="password_1Error" class="error"></div>
            <label for="picture">Picture:</label>
            <input type="file" id="picture" name="picture" required>
            <div id="pictureError" class="error"></div>
            <input type="submit" value="Register">
        </form>
        <script>
        $(document).ready(function() {
            // Real-time validation for username field
            $('#username').on('input', function() {
                var username = $(this).val();
                $.ajax({
                    url: 'username_check.php',
                    method: 'POST',
                    data: {
                        username: username
                    },
                    success: function(response) {
                        $('#usernameError').text(response);
                    }
                });
            });
            // Real-time validation for email field
            $('#email').on('input', function() {
                var email = $(this).val();
                $.ajax({
                    url: 'email_check.php',
                    method: 'POST',
                    data: {
                        email: email
                    },
                    success: function(response) {
                        $('#emailError').text(response);
                    }
                });
            });
            // Real-time validation for password field
            $('#password').on('input', function() {
                var password = $(this).val();
                // Perform password validation checks and display error message if necessary
                // You can customize the validation logic here based on your requirements
                var passwordError = '';
                if (password.length < 8) {
                    passwordError = 'Password must be at least 8 characters long.';
                }
                $('#passwordError').text(passwordError);
            });
            // Submit form
            $('#registrationForm').on('submit', function(e) {
                // Perform final validation checks before submitting the form
                var username = $('#username').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var hasErrors = false;
                // Perform validation checks and set hasErrors to true if any errors are found
                // You can customize the validation logic here based on your requirements
                if (username.length === 0 || email.length === 0 || password.length === 0) {
                    hasErrors = true;
                }
                if (hasErrors) {
                    e.preventDefault(); // Prevent form submission if there are errors
                }
            });
        });
        </script>
    </body>

    </html>
</body>

</html>