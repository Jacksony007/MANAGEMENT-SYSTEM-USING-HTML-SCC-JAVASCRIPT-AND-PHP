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
                  <li><a class="active" href="#">Profile</a></li>
                  <li><a href="academics.php">Academics</a></li>
                  <li><a href="exam.php">Exam</a></li>
                  <li><a href="timetable.php">Time Table</a></li>
                  <li><a href="econtent.php">E-Content</a></li>
                  <li><a href="fees.php">Fees</a></li>
                  <li><a href="library.php">Library</a></li>
                  <li><a href="student_leave.php">Apply Leave</a></li>
              </ul>
          </div>
      </section>
      <section id="profile-container">
          <h1>My Profile</h1>
          <form action="student_update_profile.php" method="post" enctype="multipart/form-data">
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
              <label for="adminId">Student ID:</label>
              <input type="text" id="adminId" name="adminId" value="<?php echo $student_Id?>" readonly />
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" value="<?php echo $username ?>" readonly />
              <label for="firstname">First Name:</label>
              <input type="text" id="firstname" name="firstname" value="<?php echo $fname ?>" />
              <label for="middlename">Middle Name:</label>
              <input type="text" id="middlename" name="middlename" value="<?php echo $mname ?>" />
              <label for="lastname">Last Name:</label>
              <input type="text" id="lastname" name="lastname" value="<?php echo $lname ?>" />
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" value="<?php echo $email ?>" readonly />
              <label for="dob">Date of Birth:</label>
              <input type="date" id="dob" name="dob" value="<?php echo $dob ?>" />
              <label for="mobilenumber">Mobile Number:</label>
              <input type="text" id="mobilenumber" name="mobilenumber" value="<?php echo $mobile_number?>" />
              <label for="password">Old Password:</label>
              <input type="password" id="oldpassword" name="oldpassword" placeholder="Old Password" />
              <label for="password">New Password:</label>
              <input type="password" id="newpassword" name="newpassword" placeholder="New Password" />
              <label for="profile-pic">Profile Picture:</label>
              <input type="file" id="image" name="image" onchange="previewImage()" />
              <div class="preview-container"><img id="preview" src="#" alt="Preview" /></div>
              <div class="btn-savechanges"> <button type="submit">Save Changes</button></div>
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
      <script>
      function previewImage() {
          var preview = document.getElementById("preview");
          var file = document.getElementById("image").files[0];
          var reader = new FileReader();
          reader.onloadend = function() {
              preview.src = reader.result;
              preview.style.display = "block";
          };
          if (file) {
              reader.readAsDataURL(file);
          } else {
              preview.src = "";
              preview.style.display = "none";
          }
      }
      </script>
  </body>

  </html>