<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Manage Leave</title>
    <style>
    #table_container {
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    #table_container h1 {
        font-size: 24px;
        text-align: center;
    }

    #table_container table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    #table_container th,
    #table_container td {
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }

    #table_container th {
        background-color: #f2f2f2;
    }

    #table_container td select {
        margin-right: 10px;
    }

    #table_container td a {
        color: red;
        margin-left: 10px;
    }

    #table_container a.delete-button {
        background-color: #f44336;
        color: white;
        padding: 10px 22px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        border-radius: 4px;
        cursor: pointer;
    }

    #table_container a.delete-button:hover {
        background-color: #da190b;
    }

    #table_container button.submit-button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 10px;
        cursor: pointer;
        border-radius: 4px;
    }

    #table_container button.submit-button:hover {
        background-color: #3e8e41;
    }

    #table_container select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        appearance: none;
        /* removes default styling on select */
        -webkit-appearance: none;
        -moz-appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="%23333333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>');
        /* adds custom arrow icon */
        background-repeat: no-repeat;
        background-position: right 10px center;
    }

    #table_container select:hover,
    #table_container select:focus {
        border-color: #66afe9;
        outline: 0;
    }
    </style>
</head>

<body>
    <h1>Manage Leave</h1> <?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "1717";
    $dbname = "school_project";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // Check if a leave application has been accepted or rejected
    if (isset($_POST['action']) && isset($_POST['id'])) {
      $id = $_POST['id'];
      $action = $_POST['action'];
      $sql = "UPDATE leave_details SET status='$action' WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
        echo "<p>Leave application $id has been $action.</p>";
      } else {
        echo "<p>Error updating record: " . $conn->error . "</p>";
      }
    }

    // Check if a leave application has been deleted
    if (isset($_GET['delete'])) {
      $id = $_GET['delete'];
      $sql = "DELETE FROM leave_details WHERE id=$id";
      if ($conn->query($sql) === TRUE) {
        echo "<p>Leave application $id has been deleted.</p>";
      } else {
        echo "<p>Error deleting record: " . $conn->error . "</p>";
      }
    }

    // Display the list of leave applications
    $sql = "SELECT * FROM leave_details";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>ID</th><th>Name</th><th>Start Date</th><th>End Date</th><th>Status</th><th>Action</th></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["start_date"] . "</td>";
        echo "<td>" . $row["end_date"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "<td>";
        echo "<form method='post' action=''>";
        echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
        echo "<select name='action'>";
        echo "<option value='approved'>Approve</option>";
        echo "<option value='rejected'>Reject</option>";
        echo "</select>";
        echo '<button type="submit" class="submit-button">Submit</button>';
        echo "<a href='?delete=" . $row["id"] . "' class='delete-button' style='float: right;'>Delete</a>";
      
        echo "</form>";
        echo "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "<p>No leave applications found.</p>";
    }

    // Close the database connection
    $conn->close();
  ?>
</body>

</html>