<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduVerse | Student Management System</title>

<link rel="stylesheet" href="css/admin_dashboard.css?v=10">
<link rel="stylesheet" href="css/responsive.css?v=10">
</head>
<body>

<!-- Sidebar -->

<div class="sidebar">

    <h2>EduVerse</h2>

    <ul>

        <li><a href="#"> Dashboard</a></li>

        <li><a href="registration.php"> Add Student</a></li>

        <li><a href="search_student.php"> Search Student</a></li>

        <li><a href="logout.php"> Logout</a></li>

    </ul>

</div>

<!-- Main -->

<div class="main">

    <!-- Topbar -->

    <div class="topbar">

        <h1>Student Management Dashboard</h1>

        <h3>Welcome admin</h3>
      

    </div>

    <!-- Search -->

    <form method="GET" action="" class="search-area">

    <input
        type="text"
        name="search"
        placeholder="Enter Student ID"
        required>

    <button type="submit">
        Search
    </button>

</form>
    <!-- Table -->

    <div class="table-box">

        <table>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Roll No</th>

                <th>Department</th>

                <th>Course</th>

                <th>Action</th>

            </tr>



           <?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed");
}

$search = "";

if(isset($_GET['search'])){
    $search = trim($_GET['search']);
}

if($search != ""){

    $search = mysqli_real_escape_string($conn,$search);

    $sql = "SELECT * FROM students
            WHERE id LIKE '%$search%'";

}else{

    $sql = "SELECT * FROM students";

}

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['candidate_name']; ?></td>

    <td><?php echo $row['roll_no']; ?></td>

    <td><?php echo $row['department']; ?></td>

    <td><?php echo $row['course']; ?></td>

    <td>

        <a href="search_student.php?id=<?php echo $row['id']; ?>" class="view">
            View More
        </a>

    </td>

</tr>

<?php
}
?>
  

        </table>
    </div>
</div>
    
</body>
</html>