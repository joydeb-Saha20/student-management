<?php
session_start();

if(!isset($_SESSION['roll_no'])){
    header("location:index_php");
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
    <link rel="stylesheet" href="css/document.css">
    <link rel="style.css" href="css/responsive.css">

</head>
<body>
    <div class="container">
        <h1 class="title">📄 My Documents</h1>

        <div class="docs-grid">
            <div class="doc-card">
                <img src="uploads/<?php echo $row['aadhaar_file']; ?>">
                <h3> 🆔 Aadhaar Card</h3>
                <a href="uploads/<?php echo $row['aadhaar_file']; ?>"
                target="_blank"
                class="view-btn">
             View Document
            </a>
            </div>

            <div class="doc-card">
                <img src="uploads/<?php echo $row['marksheet_file']; ?>">
                <h3> 🎓 Marksheet</h3>
                <a href="uploads/<?php echo $row['marksheet_file']; ?>"
                target="_blank"
                class="view-btn">
            View Document
            </a>
            </div> 

            <div class="doc-card">
                <img src="uploads/<?php echo $row['photo']; ?>">
                <h3> 📷 Profile</h3>
                <a href="uploads/<?php echo $row['photo']; ?>"
                target="_blank"
                class="view-btn">
            View Document
            </a>
            </div> 

             <div class="doc-card">
                <img src="uploads/<?php echo $row['signature']; ?>">
                <h3> ✍ Signature</h3>
                <a href="uploads/<?php echo $row['signature']; ?>"
                target="_blank"
                class="view-btn">
            View Document
            </a>
            </div> 

            
        </div>
        <div class="button-box">
            <a href="dashboard.php" class="back-btn">BACK</a>
        </div>
    </div>
</body>
</html>