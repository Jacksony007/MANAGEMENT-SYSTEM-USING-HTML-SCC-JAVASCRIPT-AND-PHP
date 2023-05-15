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
                <li><a href="profile.php">Profile</a></li>
                <li><a class="active" href="#">Add Attendance</a></li>
                <li><a href="staff_add_results.php">Add Results</a></li>
                <li><a href="timetable.php">Add Time Table</a></li>
                <li><a href="econtent.php">Add E-Content</a></li>
                <li><a href="staff_leave.php">Apply Leave</a></li>
            </ul>
        </div>
    </section>
    <section id="att-container">
        <h1>Add Student Attendance</h1> <?php
  // establish a connection with your database
  $host = 'localhost';
  $username = 'root';
  $password = '1717';
  $dbname = 'school_project';

  $conn = mysqli_connect($host, $username, $password, $dbname);
  if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
  }

  // fetch the names from your database
  $sql = 'SELECT * FROM student_details';
  $result = mysqli_query($conn, $sql);

  if (!$result || mysqli_num_rows($result) === 0) {
    echo "No student found.";
  } else {
    echo '<form action="process_attendance.php" method="post">';
    echo '<div class="mark-container">';
    echo '<label><input type="checkbox" id="all-present" name="all-present" />Mark all present</label>';
    echo '<label><input type="checkbox" id="all-absent" name="all-absent" />Mark all absent</label>';
    echo '</div>';
    echo '<div class="student-container">';

    while ($row = mysqli_fetch_assoc($result)) {
      $student_name = $row['username'];
      echo '<div class="student">';
      echo "<td><img src='data:image/jpg;charset=utf8;base64,".base64_encode($row['profile_pic'])."' style='width: 100px;height: 100px; border-radius: 5px;'></td>";
 
      echo '<div class="name-container">';
      echo '<label for="' . $student_name . '">' . $student_name . ':</label>';
      echo '<input type="checkbox" id="' . $student_name . '" name="attendance[]" value="' . $student_name . '" />';
      echo '</div>';
      echo '</div>';
    }

    echo '</div>';
    echo '<div style="text-align: center">';
    echo '<input type="submit" value="Submit" />';
    echo '</div>';
    echo '</form>';
  }

  mysqli_close($conn);
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
    <script>
    // mark all checkboxes as present or absent
    document.getElementById("all-present").addEventListener("change", function() {
        if (this.checked) {
            document.querySelectorAll("input[name='attendance[]']").forEach(function(checkbox) {
                checkbox.checked = true;
            });
        }
    });
    document.getElementById("all-absent").addEventListener("change", function() {
        if (this.checked) {
            document.querySelectorAll("input[name='attendance[]']").forEach(function(checkbox) {
                checkbox.checked = false;
            });
        }
    });
    // style checkboxes based on their checked status
    document.querySelectorAll("input[name='attendance[]']").forEach(function(checkbox) {
        checkbox.addEventListener("change", function() {
            if (this.checked) {
                this.nextElementSibling.classList.remove("absent");
                this.nextElementSibling.classList.add("present");
            } else {
                this.nextElementSibling.classList.remove("present");
                this.nextElementSibling.classList.add("absent");
            }
        });
    });
    </script>
</body>

</html>