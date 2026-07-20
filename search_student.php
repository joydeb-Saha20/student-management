<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
}

if (!isset($_GET['id'])) {
    die("No Student Selected");
}

$id = mysqli_real_escape_string($conn, $_GET['id']);

$sql = "SELECT * FROM students WHERE id='$id'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

} else {

    die("Student Not Found");

}

?>

<!DOCTYPE html>
<html>
<head>

<title>EduVerse | Student Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="css/search_student.css">
<link rel="style.css" href="css/responsive.css">

</head>

<body>


<div class="container">

<h1 class="title">Student Profile</h1>

<div class="top-cards">

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

<div class="profile">

<div class="profile-header">

<div class="profile-info">

<img src="uploads/<?php echo $row['photo']; ?>">

<h2><?php echo $row['candidate_name']; ?></h2>

<p>Roll No : <?php echo $row['roll_no']; ?></p>

</div>

</div>

</div>

<div class="info-box">

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
<h3>Father Name</h3>
<p><?php echo $row['father_name']; ?></p>
</div>

<div class="data-item">
<h3>Mother Name</h3>
<p><?php echo $row['mother_name']; ?></p>
</div>

</div>

<div class="data-row">

<div class="data-item">
<h3>Email</h3>
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

<div class="documents">

<div class="doc-card">

<h3>Signature</h3>

<img src="uploads/<?php echo $row['signature']; ?>" alt="signature">

<br><br>

    <a href="uploads/<?php echo $row['signature']; ?>" target="_blank">
        View
    </a>

</div>

<div class="doc-card">
    <h3>Aadhaar Card</h3>

    <img src="uploads/<?php echo $row['aadhaar_file']; ?>" alt="Aadhaar">

    <br><br>

    <a href="uploads/<?php echo $row['aadhaar_file']; ?>" target="_blank">
        View
    </a>
</div>


<div class="doc-card">
    <h3>Marksheet</h3>

    <img src="uploads/<?php echo $row['marksheet_file']; ?>" alt="marksheet">

    <br><br>

    <a href="uploads/<?php echo $row['marksheet_file']; ?>" target="_blank">
        View 
    </a>
</div>

</div>

<div class="actions">

<a href="delete_student.php?id=<?php echo $row['id']; ?>" class="delete"
onclick="return confirm('Delete this student?')">
Delete Student
</a>

<a href="admin_dashboard.php" class="back">
Back Dashboard
</a>

</div>

</div>
</body>

</html>