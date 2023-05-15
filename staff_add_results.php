<?php include 'staff_details.php'; ?>
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
        <div class="dashboard">
            <ul>
                <li><a href="staff.php">Dashboard</a></li>
                <li><a href="staff_profile.php">Profile</a></li>
                <li><a href="add_attendance.php">Add Attendance</a></li>
                <li><a class="active" href="#">Add Results</a></li>
                <li><a href="timetable.php">Add Time Table</a></li>
                <li><a href="econtent.php">Add E-Content</a></li>
                <li><a href="staff_leave.php">Apply Leave</a></li>
            </ul>
        </div>
    </section>
    <section id="results-tab">
        <h1>Add Result to Student</h1>
        <form action="staff_upload_results.php" method="POST" enctype="multipart/form-data">
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
            <label for="student-roll">Student Enrollment Number:</label>
            <input type="text" id="student-name" name="student-name" />
            <label for="subject">Courses ID:</label>
            <input type="text" id="subject" name="subject" />
            <label for="marks-obtained">Marks Obtained:</label>
            <input type="number" id="marks-obtained" name="marks-obtained" />
            <label for="total-marks">Total Marks:</label>
            <input type="number" id="total-marks" name="total-marks" />
            <label for="pdf-file">PDF File:</label>
            <input type="file" id="pdf-file" name="pdf-file" />
            <button type="submit">Submit</button>
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
</body>

</html>