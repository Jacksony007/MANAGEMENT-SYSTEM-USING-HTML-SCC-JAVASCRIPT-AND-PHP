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
              <h2>If you want to be taken seriously, speak up early.</h2>
          </div>
          <div class="dashboard">
              <ul>
                  <li><a href="student.php">Dashboard</a></li>
                  <li><a href="student_profile.php">Profile</a></li>
                  <li><a href="academics.php">Academics</a></li>
                  <li><a href="exam.php">Exam</a></li>
                  <li><a class="active" href="#">Time Table</a></li>
                  <li><a href="econtent.php">E-Content</a></li>
                  <li><a href="fees.php">Fees</a></li>
                  <li><a href="library.php">Library</a></li>
              </ul>
          </div>
      </section>
      <section id="mytable">
          <div id="mymain">
              <div class="tableheading">
                  <div class="tabletech">
                      <h1>FACULTY OF TECHNOLOGY</h1>
                  </div>
                  <h4>Department of Information & Communication Technology</h4>
              </div>
              <div class="tabledetails">
                  <div class="tableleft">
                      <p>Semester:- IV</p>
                      <p>Class Room: MA111 Division:- 4TK1</p>
                      <p> Class Coodinator : Prof Rakesh Oza ( Cabin no. MA161) (Ext No: 1171) </p>
                  </div>
                  <div class="tableright">
                      <p class="righttop">W. E. Date :26/12/2022</p>
                  </div>
              </div>
              <table>
                  <tr>
                      <th>Time</th>
                      <th>Monday</th>
                      <th>Tuesday</th>
                      <th>Wednesday</th>
                      <th>Thursday</th>
                      <th>Friday</th>
                  </tr>
                  <tr>
                      <td>09:00 AM - 09:50 AM</td>
                      <td>Class 1</td>
                      <td>Class 2</td>
                      <td>Class 3</td>
                      <td>Class 4</td>
                      <td>Class 5</td>
                  </tr>
                  <tr>
                      <td>09:50 AM - 10:50 AM</td>
                      <td>Class 6</td>
                      <td>Class 7</td>
                      <td>Class 8</td>
                      <td>Class 9</td>
                      <td>Class 10</td>
                  </tr>
                  <tr class="break-row">
                      <td>10:50 AM - 11:05 AM</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>11:05 AM - 12:05 PM</td>
                      <td>Class 11</td>
                      <td>Class 12</td>
                      <td>Class 13</td>
                      <td>Class 14</td>
                      <td>Class 15</td>
                  </tr>
                  <tr>
                      <td>12:05 PM - 01:05 PM</td>
                      <td>Class 16</td>
                      <td>Class 17</td>
                      <td>Class 18</td>
                      <td>Class 19</td>
                      <td>Class 20</td>
                  </tr>
                  <tr class="break-row">
                      <td>01:05 PM - 01:50 PM</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>
                  <tr>
                      <td>01:50 PM - 02:40 PM</td>
                      <td>Class 16</td>
                      <td>Class 17</td>
                      <td>Class 18</td>
                      <td>Class 19</td>
                      <td>Class 20</td>
                  </tr>
                  <tr>
                      <td>02:40 PM - 03:40 PM</td>
                      <td>Class 16</td>
                      <td>Class 17</td>
                      <td>Class 18</td>
                      <td>Class 19</td>
                      <td>Class 20</td>
                  </tr>
              </table>
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