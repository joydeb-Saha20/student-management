<?php
session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
}

$error = "";

if(isset($_POST['candidate_name']) && isset($_POST['roll_no'])){

    $candidate_name = mysqli_real_escape_string($conn,$_POST['candidate_name']);
    $roll_no = mysqli_real_escape_string($conn,$_POST['roll_no']);

    $sql = "SELECT * FROM students
            WHERE candidate_name='$candidate_name'
            AND roll_no='$roll_no'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['roll_no']=$roll_no;

        header("Location: dashboard.php");
        exit();

    }else{

        $error = "Invalid Candidate Name or Roll Number";

    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>EduVerse | Student Management System</title>

<link rel="stylesheet" href="css/login.css">
<link rel="style.css" href="css/responsive.css">

</head>

<body>
<div class="login-container">

<form class="login-form" method="POST">


<h1>Student Login</h1>

<?php
if($error!=""){
    echo "<div class='error'>$error</div>";
}
?>

<div class="input-group">

<label>Candidate Name</label>

<input
type="text"
name="candidate_name"
placeholder="Enter Candidate Name"
required>

</div>

<div class="input-group">

<label>Roll Number</label>

<input
type="text"
name="roll_no"
placeholder="Enter Roll Number"
required>

</div>

<button type="submit">
Login
</button>

<div class="register">

Don't have an account?

<a href="registration.php">
Register
</a>

</div>

<div class="footer">

© 2026 EduVerse – Student Management System

</div>

</form>

</div>



</body>
</html>
