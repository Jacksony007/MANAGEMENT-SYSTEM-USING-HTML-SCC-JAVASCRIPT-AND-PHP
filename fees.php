<?php include 'student_details.php'; ?>
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
            <h2> Process and interprete properly what has being said, before responding. </h2>
        </div>
        <div class="dashboard">
            <ul>
                <li><a href="student.php">Dashboard</a></li>
                <li><a href="student_profile.php">Profile</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="exam.php">Exam</a></li>
                <li><a href="timetable.php">Time Table</a></li>
                <li><a href="econtent.php">E-Content</a></li>
                <li><a class="active" href="#">Fees</a></li>
                <li><a href="library.php ">Library</a></li>
            </ul>
        </div>
    </section>
    <section id="feescontainer">
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'tab1')" id="defaultOpen"> Pending Fees Payment </button>
            <button class="tablinks" onclick="openTab(event, 'tab2')"> Fees / Print Receipt </button>
        </div>
        <div id="tab1" class="tabcontent active">
            <div class="fee-heading">
                <h1>Pending Fees Payment</h1>
            </div>
            <div class="fcontainer">
                <table>
                    <tr>
                        <th>Academic Year</th>
                        <th>Semester</th>
                        <th>Fee Type</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>3</td>
                        <td>HOSTEL FEE</td>
                        <td>Rs.800000</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>4</td>
                        <td>HOSTEL FEE</td>
                        <td>Rs.800000</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>4</td>
                        <td>HOSTEL FEE</td>
                        <td>Rs.800000</td>
                        <td>Pending</td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="tab2" class="tabcontent">
            <div class="fee-heading">
                <h1>Fees / Print Receipt</h1>
            </div>
            <div class="fcontainerprint">
                <table>
                    <tr>
                        <th>Academic Year</th>
                        <th>Semester</th>
                        <th>Fee Type</th>
                        <th>Amount</th>
                        <th>Download</th>
                    </tr>
                    <tr>
                        <td>2022</td>
                        <td>3</td>
                        <td>HOSTEL FEE</td>
                        <td>Rs.800000</td>
                        <td>
                            <a href="path/to/your/file.pdf" download class="download-btn">Print PDF</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2023</td>
                        <td>4</td>
                        <td>HOSTEL FEE</td>
                        <td>Rs.800000</td>
                        <td>
                            <a href="path/to/your/file.pdf" download class="download-btn">Print PDF</a>
                        </td>
                    </tr>
                </table>
            </div>
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
            <li>Account</li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="help.html">Help & Support</a></li>
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
    <script src="script.js"></script>
</body>

</html>