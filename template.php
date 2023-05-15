<?php include 'student_details.php'; ?> <img src='data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>'
    style='border-radius: 10px;'>
<div class="name">
    <h4><?php echo $fname ?></h4>
    <h4><?php echo $mname ?></h4>
    <h4><?php echo $lname ?></h4>
    <button type="submit"><a href="logout.php">Logout</a></button>
</div>