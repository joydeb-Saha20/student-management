echo $_GET['id'];
exit();
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

if(!isset($_GET['id'])){
    die("No Student Selected");
}

$id = mysqli_real_escape_string($conn,$_GET['id']);

// Get file names before deleting
$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==0){
    die("Student Not Found");
}

$row = mysqli_fetch_assoc($result);

// Delete uploaded files
if(file_exists("uploads/".$row['photo'])){
    unlink("uploads/".$row['photo']);
}

if(file_exists("uploads/".$row['signature'])){
    unlink("uploads/".$row['signature']);
}

if(file_exists("uploads/".$row['aadhaar_file'])){
    unlink("uploads/".$row['aadhaar_file']);
}

if(file_exists("uploads/".$row['marksheet_file'])){
    unlink("uploads/".$row['marksheet_file']);
}

// Delete database record
$delete = "DELETE FROM students WHERE id='$id'";

if(mysqli_query($conn,$delete))
{
    echo "<script>
    alert('Student Deleted Successfully');
    window.location='admin_dashboard.php';
    </script>";
}
else
{
    die(mysqli_error($conn));
}

?>