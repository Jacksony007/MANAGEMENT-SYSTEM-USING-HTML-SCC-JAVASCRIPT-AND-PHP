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
            <h2> Do your self-assesment. Gather as many facts and as much information you can to assess your options.
            </h2>
        </div>
        <div class="dashboard">
            <ul>
                <li><a href="student.php">Dashboard</a></li>
                <li><a href="student_profile.php">Profile</a></li>
                <li><a class="active" href="#">Academics</a></li>
                <li><a href="exam.php">Exam</a></li>
                <li><a href="timetable.php">Time Table</a></li>
                <li><a href="econtent.php">E-Content</a></li>
                <li><a href="fees.php">Fees</a></li>
                <li><a href="library.php ">Library</a></li>
            </ul>
        </div>
    </section>
    <section id="acsection">
        <div class="acleft">
            <div class="lone">
                <h2>Semester 4</h2>
            </div>
            <div class="ltwo">
                <h3>MCI (01CT404)</h3>
                <h3>ADC (02CT450)</h3>
                <h3>PS (01CT324)</h3>
                <h3>IWT (01CT412)</h3>
            </div>
            <div class="lthree">
                <h2>Fuculties</h2>
            </div>
            <div class="lfour">
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="photo" />
            </div>
        </div>
        <div class="acright">
            <div class="achead">
                <h2>Subjects</h2>
            </div>
            <div class="maincontainer">
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="firstbox">
                        <strong>MCI (01CT404)</strong>
                        <br />
                        <p>MICROCONTROLLER AND INTERFACING</p>
                    </div>
                    <div class="chapter">
                        <p>Chapter</p>
                        <br />2. Interfacing
                    </div>
                    <div class="sulast">
                        <div class="lleft"> Weekly Lec.<br />
                            <p>TU-WE-TH-SA</p>
                        </div>
                        <span class="vertical-line"></span>
                        <div class="lright"> Syllabus<br />
                            <p>0.00 %</p>
                        </div>
                    </div>
                </div>
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