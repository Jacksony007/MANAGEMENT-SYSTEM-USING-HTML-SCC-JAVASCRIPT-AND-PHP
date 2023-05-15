<?php include 'admin_details.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Add New Admin</title>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <section id="add-admin">
        <div class="admin-heading">
            <h1>Add New Admin</h1>
        </div>
        <form method="post" enctype="multipart/form-data" action="add_admin.php">
            <div id="sumessage" style="text-align: center;"> <?php
                if (isset($_GET['message'])) {
                echo '<p style="color: #2596be;">' . $_GET['message'] . '</p>';
                }
            ?> </div>
            <div id="sumessage" style="text-align: center;"> <?php
                if (isset($_GET['error_message'])) {
                echo '<p style="color: red;">' . $_GET['error_message'] . '</p>';
                }
            ?> </div>
            <label>Username:</label>
            <input type="text" name="username" required /><br /><br />
            <label>Title:</label>
            <select name="title">
                <option value="Professor">Professor</option>
                <option value="Assistant Professor">Assistant Professor</option>
                <option value="Dr">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Miss">Miss</option>
            </select><br /><br />
            <label>First Name:</label>
            <input type="text" name="firstname" required /><br /><br />
            <label>Middle Name:</label>
            <input type="text" name="middlename" required /><br /><br />
            <label>Last Name:</label>
            <input type="text" name="lastname" required /><br /><br />
            <label>Email:</label>
            <input type="email" name="email" /><br /><br />
            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" checked />Male <input type="radio" name="gender"
                value="Female" />Female <input type="radio" name="gender" value="Other" />Other<br /><br />
            <label>Date of Birth:</label>
            <input type="date" name="date_of_birth" /><br /><br />
            <label>Address:</label>
            <textarea name="address"></textarea><br /><br />
            <label>Mobile Number:</label>
            <input type="tel" name="mobilenumber" /><br /><br />
            <label>Password:</label>
            <input type="password" name="password" required /><br /><br />
            <label>Confirm Password:</label>
            <input type="password" name="confirm-password" required /><br /><br />
            <label>Profile Picture:</label>
            <input type="file" name="image" /><br /><br />
            <input type="submit" name="submit" value="Add Admin" />
        </form>
    </section>
</body>

</html>