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

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM admin
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION['admin'] = $email;

        header("Location: admin_dashboard.php");
        exit();
    }
    else
    {
        $error = "Invalid Email or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>EduVerse | Student Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/admin_login.css">
<link rel="stylesheet" href="css/responsive.css">

</head>

<body>

<div class="login-box">


<h1>Admin Login</h1>


<?php

if($error!=""){

echo "<div class='error'>$error</div>";

}

?>

<form method="POST">

<div class="input-group">

<label>Email Address</label>

<input
type="email"
name="email"
placeholder="Enter Admin Email"
required>

</div>

<div class="input-group">

<label>Password</label>

<input
type="password"
name="password"
placeholder="Enter Password"
required>

</div>

<button
type="submit"
name="login">

Login

</button>

</form>

<div class="footer">

© 2026 EduVerse – Student Management System

</div>

</div>

</body>

</html>