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

$sql = "SELECT * FROM students
        WHERE roll_no='$roll_no'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_assoc($result);

}
else{

    echo "No Student Data Found";
    exit();

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
      
<title>EduVerse | Student Management System</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="css/dashboard.css">
<link rel="stylesheet" href="css/responsive.css">


</head>

<body>


<button class="menu-btn" onclick="toggleSidebar()">☰</button>
<div class="sidebar" id="sidebar">

    <h2>Student Panel</h2>

    <ul>
        <li class="active"><a href="dashboard.php">🏠 Dashboard</a></li>
        <li><a href="#">👤 My Profile</a></li>
        <li><a href="document.php">📄 Documents</a></li>
        <li><a href="logout.php">🚪 Logout</a></li>
    </ul>

</div>

<div class="main">

    <div class="topbar">
        <h1>Welcome, <?php echo $row['candidate_name']; ?></h1>
    </div>

    <!-- Stats Cards -->

    <div class="stats">

        <div class="card">
            <h3>Course</h3>
            <p><?php echo $row['course']; ?></p>
        </div>

        <div class="card">
            <h3>Department</h3>
            <p><?php echo $row['department']; ?></p>
        </div>

        <div class="card">
            <h3>Year</h3>
            <p><?php echo $row['student_year']; ?></p>
        </div>

    </div>

    <!-- Profile Card -->

    <div class="profile-card">

        <?php
        $photo = !empty($row['photo']) ? $row['photo'] : 'default.png';
        ?>

        <img src="uploads/<?php echo $photo; ?>" alt="Student Photo">

        <h2><?php echo $row['candidate_name']; ?></h2>

        <p>Roll No: <?php echo $row['roll_no']; ?></p>

        <a href="edit_profile.php" class="edit-btn">
            ✏️ Edit Profile
        </a>

    </div>

    <!-- Student Information -->

    <div class="data-box">

        <h2>Student Information</h2>

        <div class="data-row">
            <div class="data-item">
                <h3>Registration No</h3>
                <p><?php echo $row['registration_no']; ?></p>
            </div>

            <div class="data-item">
                <h3>Institute Name</h3>
                <p><?php echo $row['institute_name']; ?></p>
            </div>
        </div>

        <div class="data-row">
            <div class="data-item">
                <h3>Father's Name</h3>
                <p><?php echo $row['father_name']; ?></p>
            </div>

            <div class="data-item">
                <h3>Mother's Name</h3>
                <p><?php echo $row['mother_name']; ?></p>
            </div>
        </div>

        <div class="data-row">
            <div class="data-item">
                <h3>Email ID</h3>
                <p><?php echo $row['email']; ?></p>
            </div>

            <div class="data-item">
                <h3>Contact</h3>
                <p><?php echo $row['contact_no']; ?></p>
            </div>
        </div>

        <div class="data-row">
            <div class="data-item">
                <h3>WhatsApp</h3>
                <p><?php echo $row['whatsapp_no']; ?></p>
            </div>

            <div class="data-item">
                <h3>Date of Birth</h3>
                <p><?php echo $row['dob']; ?></p>
            </div>
        </div>

        <div class="data-row">
            <div class="data-item">
                <h3>Gender</h3>
                <p><?php echo $row['gender']; ?></p>
            </div>

            <div class="data-item">
                <h3>Address</h3>
                <p><?php echo $row['address']; ?></p>
            </div>
        </div>
        

    </div>
    <script>
    function toggleSidebar(){


    document.getElementById("sidebar")
            .classList.toggle("active");
}
</script>
</div>