<?php

session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed");
}

if(!isset($_SESSION['roll_no'])){
    header("Location:index.php");
    exit();
}

$roll_no = $_SESSION['roll_no'];

$candidate_name = $_POST['candidate_name'];
$email = $_POST['email'];
$contact_no = $_POST['contact_no'];
$whatsapp_no = $_POST['whatsapp_no'];
$address = $_POST['address'];

$photo_name = $_FILES['photo']['name'];

if(!empty($photo_name)){

    $photo_tmp = $_FILES['photo']['tmp_name'];

    move_uploaded_file(
        $photo_tmp,
        "uploads/".$photo_name
    );

    $sql = "UPDATE students SET
            candidate_name='$candidate_name',
            email='$email',
            contact_no='$contact_no',
            whatsapp_no='$whatsapp_no',
            address='$address',
            photo='$photo_name'
            WHERE roll_no='$roll_no'";
}
else{

    $sql = "UPDATE students SET
            candidate_name='$candidate_name',
            email='$email',
            contact_no='$contact_no',
            whatsapp_no='$whatsapp_no',
            address='$address'
            WHERE roll_no='$roll_no'";
}

if(mysqli_query($conn,$sql)){
    header("Location: edit_profile.php?success=1");
    exit();
}
else{
    echo "Error: ".mysqli_error($conn);
}

?>