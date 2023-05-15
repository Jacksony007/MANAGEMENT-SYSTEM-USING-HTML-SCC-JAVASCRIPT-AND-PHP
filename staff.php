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
                <li><a class="active" href="#">Dashboard</a></li>
                <li><a href="staff_profile.php">Profile</a></li>
                <li><a href="add_attendance.php">Add Attendance</a></li>
                <li><a href="staff_add_results.php">Add Results</a></li>
                <li><a href="timetable.php">Add Time Table</a></li>
                <li><a href="econtent.php">Add E-Content</a></li>
                <li><a href="staff_leave.php">Apply Leave</a></li>
            </ul>
        </div>
    </section>
    <section id="one">
        <div class="semester">
            <h3>Current Class</h3>
            <h3></h3>
        </div>
        <div class="details">
            <h3><?php echo $email ?></h3>
            <h3><?php echo $mobilenumber ?></h3>
        </div>
    </section>
    <section id="info">
        <div class="dashhead">
            <h2>Important Information</h2>
        </div>
        <div class="pic">
            <img src="Profiles\IMG-20230328-WA0000.jpg" alt="photo" />
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
        <div class="pic">
            <img src="159142286112.jpg" alt="photo" />
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
    </section>
    <section id="mentor">
        <div class="mheading">
            <h2>Mentor Information</h2>
        </div>
        <div class="mdetails">
            <div class="mpic">
                <img src="Profiles\FB_IMG_1648114602597 - Copy.jpg" alt="" />
                <h3>Mentor Name</h3>
            </div>
            <div class="mright">
                <div class="m">
                    <i class="fa-solid fa-phone"></i>
                    <a href="">+91 7383949016</a>
                </div>
                <div class="m">
                    <i class="fa-solid fa-envelope"></i>
                    <a href="">Mentor's Email</a>
                </div>
                <div class="m">
                    <i class="fa-solid fa-location-dot"></i>
                    <a href="">Mentor's Location</a>
                </div>
            </div>
        </div>
    </section>
    <section id="attendance">
        <div class="aupper">
            <h2>Attendance Details</h2>
        </div>
        <div class="alower">
            <div class="aleft">
                <div class="atcontainer"></div>
                <div class="circular-progress">
                    <span class="progress-value">0%</span>
                </div>
            </div>
            <div class="aright">
                <h4>My Attendance</h4>
                <p> Note If you attendance is below 75% you will not allowed to sit for exams </p>
            </div>
        </div>
    </section>
    <section id="gpa">
        <div class="gupper">
            <h2>Semester GPA</h2>
        </div>
        <div class="glower">
            <div class="wrapper">
                <div class="card">
                    <input type="checkbox" id="card1" class="more" aria-hidden="true" />
                    <div class="content">
                        <div class="front" style="
                  background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80');
                ">
                            <div class="inner">
                                <h2>First Semester</h2>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <label for="card1" class="button" aria-hidden="true"> VIEW RESULTS </label>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                        <span>MAVC</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fas fa-door-open"></i>
                                        <span>FSSI</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>3</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-c"></i>
                                        <span>ICP</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>2</span>
                                    <div class="icon">
                                        <i class="fas fa-bath"></i>
                                        <span>BEE</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>Donot wish for it Work for it</p>
                                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates earum
                                        nostrum ipsam ullam, reiciendis nam consectetur? Doloribus voluptate architecto
                                        possimus perferendis tenetur nemo amet temporibus, enim soluta nam, debitis.
                                    </p>
                                </div>
                                <div class="location">JYC University</div>
                                <div class="price">12/01/2022</div>
                                <label for="card1" class="button return" aria-hidden="true">
                                    <i class="fas fa-arrow-left"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <input type="checkbox" id="card2" class="more" />
                    <div class="content">
                        <div class="front" style="
                  background-image: url('https://images.unsplash.com/photo-1515263487990-61b07816b324?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c02fb96f9cfc16d3649835b75d1b2033&auto=format&fit=crop&w=1350&q=80');
                ">
                            <div class="inner">
                                <h2>Second Semester</h2>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <label for="card2" class="button" aria-hidden="true"> VIEW RESULTS </label>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-chart-simple"></i>
                                        <span>IRRS</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>3</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-tachograph-digital"></i>
                                        <span>D.E</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fa-brands fa-java"></i>
                                        <span>OOP</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-diagram-project"></i>
                                        <span>DMGT</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p>Work in silent and let your success vocalize</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                        <li> Lorem ipsum dolor sit, amet consectetur adipisicing elit. </li>
                                        <li>Lorem ipsum dolor sit amet consectetur.</li>
                                        <li>Lorem ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                                <div class="location">JYC University</div>
                                <div class="price">26/06/2022</div>
                                <label for="card2" class="button return" aria-hidden="true">
                                    <i class="fas fa-arrow-left"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <input type="checkbox" id="card3" class="more" />
                    <div class="content">
                        <div class="front" style="
                  background-image: url('https://images.unsplash.com/photo-1529595354331-201ad3ae5e71?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6114533e2d0c1c81534fe13611dbfd76&auto=format&fit=crop&w=658&q=80');
                ">
                            <div class="inner">
                                <h2>Third Semester</h2>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <label for="card3" class="button" aria-hidden="true"> VIEW RESULTS </label>
                            </div>
                        </div>
                        <div class="back">
                            <div class="inner">
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fa-brands fa-python"></i>
                                        <span>PWP</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>2</span>
                                    <div class="icon">
                                        <i class="fa-brands fa-windows"></i>
                                        <span>OS</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>5</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-blog"></i>
                                        <span>IWT</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>4</span>
                                    <div class="icon">
                                        <i class="fa-solid fa-database"></i>
                                        <span>DBMS</span>
                                    </div>
                                </div>
                                <div class="description">
                                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa libero totam
                                        nostrum consequatur autem quae provident quos alias fugit maxime nisi labore,
                                        temporibus tempore illo natus voluptates aliquam ipsum officia quasi placeat aut
                                        facilis laudantium nam! </p>
                                    <p> Quam, iusto.Neque ratione ut deserunt unde dicta nesciunt, repudiandae
                                        aspernatur explicabo numquam! Tenetur! </p>
                                </div>
                                <div class="location">JYU University</div>
                                <div class="price">06/01/2023</div>
                                <label for="card3" class="button return" aria-hidden="true">
                                    <i class="fas fa-arrow-left"></i>
                                </label>
                            </div>
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
    <script src="script.js"></script>
</body>

</html>