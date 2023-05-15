<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Student Attendance</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
</body>

</html> <?php
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
      echo '<div class="name-container">';
      echo '<label for="' . $student_name . '">' . $student_name . ':</label>';
      echo '<input type="checkbox" id="' . $student_name . '" name="attendance[]" value="' . $student_name . '" />';
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