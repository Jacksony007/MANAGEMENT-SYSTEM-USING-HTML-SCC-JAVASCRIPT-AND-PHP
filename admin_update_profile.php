<?php

$servername = "localhost";
$username = "root";
$password = "1717";
$dbname = "school_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // Get user inputs
     $username = $_POST["username"];
     $firstname = $_POST["firstname"];
     $middlename = $_POST["middlename"];
     $lastname = $_POST["lastname"];
     $email = $_POST["email"];
     $dob = $_POST["dob"];
     $mobilenumber = $_POST["mobilenumber"];
     $oldpassword = $_POST["oldpassword"];
     $newpassword = $_POST["newpassword"];

      //Image Upload
   

   if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {

        
          $image = $_FILES['image']['tmp_name'];
          $img = file_get_contents($image);

         // Check if new password is provided
         if (!empty($newpassword)) {

            $sql = "SELECT * FROM college_login WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            if (password_verify($oldpassword, $row["password"])) {

                // Encrypt new password using password_hash() function
                $newpassword_hash = password_hash($newpassword, PASSWORD_DEFAULT);

                $sql = "UPDATE college_login SET password = ? WHERE username = ?";

                $stmt_staff = $conn->prepare($sql);

                $stmt_staff->bind_param("ss", $newpassword_hash, $username);
                $stmt_staff->execute();
                $stmt_staff->close();


                $sql = "UPDATE admin_details SET firstname = ?, middlename = ?, lastname = ?, date_of_birth = ?, mobilenumber = ?, password = ?, profile_pic = ? WHERE username = '$username'";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssss", $firstname, $middlename, $lastname, $dob,  $mobilenumber, $password, $img,);
                if($stmt->execute()){
                    $message = "Profile updated successfully.";
                    header('Location: admin_profile.php?message=' . urlencode($message));
                    exit;
                }

                else {
                    $error_message = "Error updating profile: " . mysqli_error($conn);
                    header('Location: admin_profile.php?error_message=' . urlencode($error_message));
                    
                }

                $stmt_staff->close();

            } else {
                // Failed comparison, redirect back to profile page with error message
                $error_message = "Incorrect Old Password.";
                header('Location: admin_profile.php?error_message=' . urlencode($error_message));
                exit;
            }

          } 

         //update when no password change
         else{
              $sql = "UPDATE admin_details SET firstname = ?, middlename = ?, lastname = ?, date_of_birth = ?, mobilenumber = ?, profile_pic = ? WHERE username = '$username'";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssss", $firstname, $middlename, $lastname, $dob,  $mobilenumber, $img,);
                if($stmt->execute()){
                    $message = "Profile updated successfully.";
                    header('Location: admin_profile.php?message=' . urlencode($message));
                    exit;
                }

                else {
                    $error_message = "Error updating profile: " . mysqli_error($conn);
                    header('Location: admin_profile.php?error_message=' . urlencode($error_message));     
                }

                $stmt_staff->close();
             }

      
    } 
       else {
        // Check if new password is provided
        if (!empty($newpassword)) {

            $sql = "SELECT * FROM college_login WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

            if (password_verify($oldpassword, $row["password"])) {

                // Encrypt new password using password_hash() function
                $newpassword_hash = password_hash($newpassword, PASSWORD_DEFAULT);

                $sql = "UPDATE college_login SET password = ? WHERE username = ?";

                // Prepare the statement
                $stmt_staff = $conn->prepare($sql);

                // Bind the parameters to the statement
                $stmt_staff->bind_param("ss", $newpassword_hash, $username);

                // Execute the statement
                $stmt_staff->execute();

                // Close the statement
                $stmt_staff->close();


                $sql = "UPDATE admin_details SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname',  date_of_birth = '$dob', mobilenumber = '$mobilenumber', password = '$newpassword_hash' WHERE username = '$username'";
                if (mysqli_query($conn, $sql)) {
                    $message = "Profile updated successfully.";
                    header('Location: admin_profile.php?message=' . urlencode($message));
                    exit;
                } else {
                    $error_message = "Error updating profile: " . mysqli_error($conn);
                    header('Location: admin_profile.php?error_message=' . urlencode($error_message));
                    exit;
                }

            } else {
                // Failed comparison, redirect back to profile page with error message
                $error_message = "Incorrect Old Password.";
                header('Location: admin_profile.php?error_message=' . urlencode($error_message));
                exit;
            }

        }
        // Update other user information in database
        $sql = "UPDATE admin_details SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname',  date_of_birth = '$dob', mobilenumber = '$mobilenumber' WHERE username = '$username'";
        if (mysqli_query($conn, $sql)) {

            $message = "Profile updated successfully.";
            header('Location: admin_profile.php?message=' . urlencode($message));
            exit;

        } else {

            $error_message = "Error updating profile: " . mysqli_error($conn);
            header('Location: admin_profile.php?error_message=' . urlencode($error_message));
            exit;
        }


    }

}
  // Close MySQL database connection
  mysqli_close($conn);

?>