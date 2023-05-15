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
                <li><a href="home.php">Dashboard</a></li>
                <li><a href="student_profile.php">Profile</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="exam.php">Exam</a></li>
                <li><a href="timetable.php">Time Table</a></li>
                <li><a class="active" href="#">E-Content</a></li>
                <li><a href="fees.php">Fees</a></li>
                <li><a href="library.php">Library</a></li>
            </ul>
        </div>
    </section>
    <section id="econtent">
        <div class="tab">
            <button class="tablinks active" onclick="openTab(event, 'Tab1')"> IWT </button>
            <button class="tablinks" onclick="openTab(event, 'Tab2')">DBMS</button>
            <button class="tablinks" onclick="openTab(event, 'Tab3')">MCI</button>
            <button class="tablinks" onclick="openTab(event, 'Tab4')">ADC</button>
        </div>
        <div class="econtentlower">
            <div id="Tab1" class="tabcontent" style="display: block">
                <div class="Eupper">
                    <h4>INTERNET AND WEB TECHNOLOGY</h4>
                    <label for="notes">Notes Synopsis/E-material</label>
                </div>
                <div class="Elower">
                    <table class="downloads-table">
                        <thead>
                            <tr>
                                <th>UNITS</th>
                                <th>DOWNLOAD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unit 1</td>
                                <td><a href="unit1.pdf" download>Download Unit 1</a></td>
                            </tr>
                            <tr>
                                <td>Unit 2</td>
                                <td><a href="unit2.pdf" download>Download Unit 2</a></td>
                            </tr>
                            <tr>
                                <td>Unit 3</td>
                                <td><a href="unit3.pdf" download>Download Unit 3</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="Tab2" class="tabcontent">
                <div class="Eupper">
                    <h4>DATABASE AND MANAGEMENT SYSTEM</h4>
                    <label for="notes">Notes Synopsis/E-material</label>
                </div>
                <div class="Elower">
                    <table class="downloads-table">
                        <thead>
                            <tr>
                                <th>UNITS</th>
                                <th>DOWNLOAD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unit 1</td>
                                <td><a href="unit1.pdf" download>Download Unit 1</a></td>
                            </tr>
                            <tr>
                                <td>Unit 2</td>
                                <td><a href="unit2.pdf" download>Download Unit 2</a></td>
                            </tr>
                            <tr>
                                <td>Unit 3</td>
                                <td><a href="unit3.pdf" download>Download Unit 3</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="Tab3" class="tabcontent">
                <div class="Eupper">
                    <h4>MICROCONTROLLER AND INTERFACING</h4>
                    <label for="notes">Notes Synopsis/E-material</label>
                </div>
                <div class="Elower">
                    <table class="downloads-table">
                        <thead>
                            <tr>
                                <th>UNITS</th>
                                <th>DOWNLOAD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unit 1</td>
                                <td><a href="unit1.pdf" download>Download Unit 1</a></td>
                            </tr>
                            <tr>
                                <td>Unit 2</td>
                                <td><a href="unit2.pdf" download>Download Unit 2</a></td>
                            </tr>
                            <tr>
                                <td>Unit 3</td>
                                <td><a href="unit3.pdf" download>Download Unit 3</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="Tab4" class="tabcontent">
                <div class="Eupper">
                    <h4>ANALOGY AND DIGITAL COMMUNICATION</h4>
                    <label for="notes">Notes Synopsis/E-material</label>
                </div>
                <div class="Elower">
                    <table class="downloads-table">
                        <thead>
                            <tr>
                                <th>UNITS</th>
                                <th>DOWNLOAD</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Unit 1</td>
                                <td><a href="unit1.pdf" download>Download Unit 1</a></td>
                            </tr>
                            <tr>
                                <td>Unit 2</td>
                                <td><a href="unit2.pdf" download>Download Unit 2</a></td>
                            </tr>
                            <tr>
                                <td>Unit 3</td>
                                <td><a href="unit3.pdf" download>Download Unit 3</a></td>
                            </tr>
                        </tbody>
                    </table>
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
    <script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    </script>
</body>

</html>