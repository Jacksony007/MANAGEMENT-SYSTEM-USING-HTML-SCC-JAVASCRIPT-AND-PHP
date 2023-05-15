<?php include 'admin_details.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="{% static 'js/script.js' %}" src="https://kit.fontawesome.com/870eb544be.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />
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
                <li><a class="active" href="#">Dashboard</a></li>
                <li><a href="admin_profile.php">Profile</a></li>
                <li><a href="admin_add_facult.php">Add Staff</a></li>
                <li><a href="admin_manage_staff.php">Manage Staff</a></li>
                <li><a href="admin_add_student.php">Add Student</a></li>
                <li><a href="admin_manage_student.php">Manage Student</a></li>
                <li><a href="admin_add_course.php">Add Courses</a></li>
                <li><a href="admin_manage_course.php">Manage Courses</a></li>
                <li><a href="admin_add_fees.php">Add Fees</a></li>
                <li><a href="admin_manage_fees.php">Manage Fees</a></li>
                <li><a href="admin_add_book.php">Add Books</a></li>
                <li><a href="admin_manage_books.php">Manage Books</a></li>
                <li><a href="admin_staff_leave.php">Staff Leave</a></li>
                <li><a href="admin_student_leave.php">Student Leave</a></li>
            </ul>
        </div>
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
</body>

</html>
</body>

</html>