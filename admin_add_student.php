<?php include 'admin_details.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="{% static 'js/script.js' %}" src="https://kit.fontawesome.com/870eb544be.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    $(document).ready(function(e) {
        $('#username').keyup(function() {
            var username = $(this).val();
            var output = $('#usernameError');
            var phpfile = 'check.php';
            if (username != '') {
                $.post(phpfile, {
                    checkUser: username
                }, function(data) {
                    $('#usernameError').html(data);
                });
            }
        });
        $('#email').keyup(function() {
            var username = $(this).val();
            var output = $('#emailError');
            var phpfile = 'check_email.php';
            if (username != '') {
                $.post(phpfile, {
                    checkUser: username
                }, function(data) {
                    $('#emailError').html(data)
                });
            }
        });
    });
    </script>
</head>

<body>
    <section id="studentnav">
        <div class="upper">
            <div class="left">
                <img class="dashboardlogo" src="logo.png" alt="Logo" />
            </div>
            <div class="right">
                <img src='data:image/jpeg;base64,<?php echo base64_encode($row['profile_pic']); ?>'
                    style='border-radius: 10px;'>
                <div class="name">
                    <h4><?php echo $fname ?></h4>
                    <h4><?php echo $mname ?></h4>
                    <h4><?php echo $lname ?></h4>
                    <button type="submit"><a href="logout.php">Logout</a></button>
                </div>
            </div>
        </div>
        <div class="lower">
            <h2> Do your self-assesment. Gather as many facts and as much information you can to assess your options.
            </h2>
        </div>
        <div class="Admin_dashboard">
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="admin_profile.php">Profile</a></li>
                <li><a href="admin_add_facult.php">Add Staff</a></li>
                <li><a href="admin_manage_staff.php">Manage Staff</a></li>
                <li><a class="active" href="#">Add Student</a></li>
                <li><a href="admin_manage_student.php">Manage Student</a></li>
                <li><a href="admin_add_course.php">Add Courses</a></li>
                <li><a href="admin_manage_course.php">Manage Courses</a></li>
                <li><a href="admin_add_fees.php">Add Fees</a></li>
                <li><a href="admin_manage_fees.php">Manage Fees</a></li>
                <li><a href="admin_add_book.php">Add Books</a></li>
                <li><a href="admin_manage_books.php">Manage Books</a></li>
                <li><a href="admin_manage_staff.php">Staff Leave</a></li>
                <li><a href="admin_student_leave.php">Student Leave</a></li>
            </ul>
        </div>
    </section>
    <section id="add_members">
        <h1>ADD STUDENT</h1>
        <form id="registration_Form" action="register_student.php" method="post" enctype="multipart/form-data"
            class="form-container">
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
            <input type="text" id="username" name="username" required placeholder="Username">
            <div id="usernameError" class="error"></div>
            <input type="text" id="firstname" name="firstname" required placeholder="First Name">
            <div id="firstnameError" class="error"></div>
            <input type="text" id="middlename" name="middlename" required placeholder="Middle Name">
            <div id="middlenameError" class="error"></div>
            <input type="text" id="lastname" name="lastname" required placeholder="Last Name">
            <div id="lastnameError" class="error"></div>
            <input type="email" id="email" name="email" required placeholder="Email">
            <div id="emailError" class="error"></div>
            <div class="form-group">
                <label for="gender" class="form-label">Gender:</label>
                <select name="gender" id="gender" class="form-select gender-select">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <input type="text" id="course" name="course" required placeholder="Course">
            <div id="courseError" class="error"></div>
            <input type="text" id="address" name="address" required placeholder="Address">
            <div id="addressError" class="error"></div>
            <input type="tel" id="phone" name="phone" required placeholder="Phone Number">
            <div id="phoneError" class="error"></div>
            <input type="date" id="dob" name="dob" required placeholder="Date of Birth">
            <div id="dobError" class="error"></div>
            <input type="password" id="password" name="password" required placeholder="Password">
            <div id="passwordError" class="error"></div>
            <input type="password" id="password_confirm" name="password_confirm" required
                placeholder="Confirm Password">
            <div id="passwordError" class="error"></div>
            <div class="form-group-pic">
                <label for="picture" class="col-sm-2 control-label">Profile Picture:</label>
                <div class="col-sm-10">
                    <input type="file" name="image" id="image">
                </div>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
    <footer>
        <div class="footer-col">
            <h3>Our University</h3>
            <li>Courses</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>ICT</li>
        </div>
        <div class="footer-col">
            <h3>Resources</h3>
            <li>Guides</li>
            <li>Research</li>
            <li>Experts</li>
            <li>Marketing Services</li>
        </div>
        <div class="footer-col">
            <h3>Our University</h3>
            <li>Courses</li>
            <li>About Us</li>
            <li>Contact Us</li>
            <li>ICT</li>
        </div>
        <div class="footer-col">
            <h1>New Letter</h1>
            <p>you can Trust us</p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email Address" />
                <a href="#" class="yellow">SUBSCRIBE</a>
            </div>
        </div>
    </footer>
    <script src="{% static 'js/script.js' %}"></script>
</body>

</html>
</body>

</html>