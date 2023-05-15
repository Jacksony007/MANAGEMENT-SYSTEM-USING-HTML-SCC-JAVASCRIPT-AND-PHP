<?php include 'admin_details.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="{% static 'js/script.js' %}" src="https://kit.fontawesome.com/870eb544be.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
    $(document).ready(function(e) {
        $('#course').keyup(function() {
            var username = $(this).val();
            var output = $('#courseError');
            var phpfile = 'check_course.php';
            if (username != '') {
                $.post(phpfile, {
                    checkUser: username
                }, function(data) {
                    $('#courseError').html(data);
                });
            }
        });
        $('#department').keyup(function() {
            var username = $(this).val();
            var output = $('#emailError');
            var phpfile = 'check_course.php';
            if (username != '') {
                $.post(phpfile, {
                    checkUser: username
                }, function(data) {});
            }
        });
    });
    </script>
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
        <div class="Admin_dashboard">
            <ul>
                <li><a href="admin.php">Dashboard</a></li>
                <li><a href="admin_profile.php">Profile</a></li>
                <li><a href="admin_add_facult.php">Add Staff</a></li>
                <li><a class="active" href="#">Manage Staff</a></li>
                <li><a href="admin_add_student.php">Add Student</a></li>
                <li><a href="admin_manage_student.php">Manage Student</a></li>
                <li><a href="admin_add_course.php">Add Courses</a></li>
                <li><a href="admin_manage_course.php">Manage Courses</a></li>
                <li><a href="admin_add_fees.php">Add Fees</a></li>
                <li><a href="admin_manage_fees.php">Manage Fees</a></li>
                <li><a href="admin_add_book.php">Add Books</a></li>
                <li><a href="admin_manage_books.php">Manage Books</a></li>
                <li><a href="admin_staff_leave.php">Staff Leave</a></li>
                <li><a href="admin_student_leave.php">Student Leave</a></li>
            </ul>
        </div>
    </section>
    <section id="manage">
        <div class="card_body">
            <div class="heading_container">
                <h1>Manage Course</h1>
            </div>
            <div class="btn_add">
                <button class="add_student"> <a href="admin_add_course.php">+Add Course</a></button>
            </div>
            <div class="main_container">
                <div class="search-container">
                    <input type="text" placeholder="Search..." class="search-box" />
                    <button class="search-button">Search</button>
                </div>
                <div class="table_container">
                    <table class="table_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Course Name</th>
                                <th>Department Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>admin.id</td>
                                <td>IWT</td>
                                <td>ICT</td>
                                <td>27-Apr-2023</td>
                                <td>27-Apr-2023</td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script>
        const searchInput = document.querySelector("#search-input");
        const dataTable = document.querySelector("#data-table");
        searchInput.addEventListener("input", function() {
            const query = this.value.trim().toLowerCase();
            const rows = dataTable.querySelectorAll("tbody tr");
            rows.forEach(function(row) {
                const cells = row.querySelectorAll("td");
                let matches = false;
                cells.forEach(function(cell) {
                    if (cell.textContent.trim().toLowerCase().indexOf(query) !== -1) {
                        matches = true;
                    }
                });
                if (matches) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        });
        </script>
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
        </div>
    </footer>
</body>

</html>