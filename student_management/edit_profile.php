<?php

session_start();
if(!isset($_SESSION['roll_no'])){
    header("Location:index.php");
    exit();
}

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
}

$roll_no = $_SESSION['roll_no'];

$sql = "SELECT * FROM students WHERE roll_no='$roll_no'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduVerse | Student Management System</title>

    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
     <link rel="stylesheet" href="css/edit_profile.css">
     <link rel="style.css" href="css/responsive.css">
     
  </head>
  <body>

    <div class="container">
        <?php if(isset($_GET['success'])){
            ?>
            <div class="success-msg">
               Profile Updated Successfully ✅
            </div>
            <?php
        }?>

        <h2>Edit Profile</h2>

        <form action="update_profile.php"
        method="POST"
       enctype="multipart/form-data">
    
        <!-- Profile Photo -->

        <div class="profile-img-box">
            <img src="uploads/<?php echo $row['photo']; ?>" alt="Profile">

            <label for="photo-upload" class="change-photo-btn">
                <i class="fa-solid fa-pen"></i>
            </label>

            <input type="file"
            id="photo-upload"
            name="photo">
        </div> 

        <div class="form-group">
            <label>Student Name</label>
            <input type="text"
            name="candidate_name"
            value="<?php echo $row['candidate_name'] ?>">
        </div>

        <div class="form-group">
            <label> Email</label>  
            <input type="text"
            name="email"
            value="<?php echo $row['email']?>">    
        
        </div>

        <div class="form-group">
            <label>Contact</label>
            <input type="text"
            name="contact_no"
            value="<?php echo $row['contact_no']?>">
        </div>

        <div class="form-group">
            <label>Whatsapp</label>
            <input type="text"
            name="whatsapp_no"
            value="<?php echo $row['whatsapp_no']?>">
        </div>

        <div class="form-group">
            <label>Address</label>
            <textarea name="address"><?php echo $row['address']; ?></textarea>
        </div>


        <div class="button-box">
            <a href="dashboard.php" class="back-btn">
                 BACK
            </a>

             <button type="submit" class="update-btn">
           SAVE
        </button>
        </div>
    </form>
    </div>
</body>
</html>
