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
                  <li><a href="academics.php">Academics</a></li>
                  <li><a href="exam.php">Exam</a></li>
                  <li><a href="timetable.php">Time Table</a></li>
                  <li><a href="econtent.php">E-Content</a></li>
                  <li><a href="fees.php">Fees</a></li>
                  <li><a href="library.php">Library</a></li>
                  <li><a class="active" href="#">Apply Leave</a></li>
              </ul>
          </div>
      </section>
      <section id="leave-conteiner">
          <h1>Apply Leave Form</h1>
          <form action="student_add_leave.php" method="post">
              <div id="leave_message" style="text-align: center;"> <?php
                if (isset($_GET['message'])) {
                echo '<p style="color: #2596be;">' . $_GET['message'] . '</p>';
                }
            ?> </div>
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" value="<?php echo $fullname ?>" readonly required />
              <label for="Username">Username:</label>
              <input type="username" id="username" name="username" value="<?php echo $username ?>" required readonly />
              <label for="leave-type">Leave Type:</label>
              <select id="leave-type" name="leave-type" required>
                  <option value="">Select Leave Type</option>
                  <option value="sick">Sick Leave</option>
                  <option value="vacation">Vacation Leave</option>
                  <option value="personal">Personal Leave</option>
              </select>
              <label for="start-date">Start Date:</label>
              <input type="date" id="start-date" name="start-date" required />
              <label for="end-date">End Date:</label>
              <input type="date" id="end-date" name="end-date" required />
              <label for="reason">Reason:</label>
              <textarea id="reason" name="reason" required></textarea>
              <input type="submit" value="Submit" />
          </form>
      </section>
      <section id="leave-report">
          <div class="leave-heading" style="text-align: center;">
              <h1>Leave Reports</h1>
          </div> <?php
$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Query the database for all leave applications submitted by the current user, ordered by date in descending order
$username = $_SESSION['username'];
$sql = "SELECT * FROM leave_details WHERE username = '$username' ORDER BY application_date DESC";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    // Display the leave report in a table format
    echo "<table>";
    echo "<tr><th>Application ID</th><th>Application Date</th><th>Leave Type</th><th>Start Date</th><th>End Date</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['application_date'] . "</td>";
        echo "<td>" . $row['leave_type'] . "</td>";
        echo "<td>" . $row['start_date'] . "</td>";
        echo "<td>" . $row['end_date'] . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    }else {
        echo "<p>No leave applications found.</p>";
            }
?>
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