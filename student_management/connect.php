<?php

// Database Connection

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "student_management"
);

if(!$conn){
    die("Connection Failed : " . mysqli_connect_error());
}

// Form Submit Check

if(isset($_POST['submit'])){

    // Form Data

    $candidate_name = $_POST['candidate_name'];
    $roll_no = $_POST['roll_no'];
    $registration_no = $_POST['registration_no'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $course = $_POST['course'];
    $department = $_POST['department'];
    $student_year = $_POST['student_year'];
    $institute_name = $_POST['institute_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $whatsapp_no = $_POST['whatsapp_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Files Names

    $aadhaar = $_FILES['aadhaar']['name'];
    $marksheet = $_FILES['marksheet']['name'];
    $photo = $_FILES['photo']['name'];
    $signature = $_FILES['signature']['name'];

    // Temporary File Location
     
    $tmp_aadhaar = $_FILES['aadhaar']['tmp_name'];
    $tmp_marksheet = $_FILES['marksheet']['tmp_name'];
    $tmp_photo = $_FILES['photo']['tmp_name'];
    $tmp_signature = $_FILES['signature']['tmp_name'];

    // Upload Folder

    $folder = "uploads/";

    // Upload Files

    move_uploaded_file(
        $tmp_aadhaar,
        $folder.$aadhaar
    );
    
    move_uploaded_file(
        $tmp_marksheet,
        $folder.$marksheet
    );

    move_uploaded_file(
        $tmp_photo,
        $folder.$photo
    );

    move_uploaded_file(
        $tmp_signature,
        $folder.$signature
    );


    // Duplicate Check

    $check = "SELECT * FROM students
              WHERE roll_no='$roll_no'";

    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) > 0){

        echo "<script>
        alert('Student Already Registered');
        window.location.href='index.php';
        </script>";

    }
    else{

        // Insert Query

        $sql = "INSERT INTO students(

            candidate_name,
            roll_no,
            registration_no,
            father_name,
            mother_name,
            course,
            department,
            student_year,
            institute_name,
            dob,
            gender,
            contact_no,
            whatsapp_no,
            email,
            address,
            aadhaar_file,
            marksheet_file,
            photo,
            signature

        )

        VALUES(

            '$candidate_name',
            '$roll_no',
            '$registration_no',
            '$father_name',
            '$mother_name',
            '$course',
            '$department',
            '$student_year',
            '$institute_name',
            '$dob',
            '$gender',
            '$contact_no',
            '$whatsapp_no',
            '$email',
            '$address',
            '$aadhaar',
            '$marksheet',
            '$photo',
            '$signature'

        )";

        // Execute Query

    if(mysqli_query($conn, $sql)){

    echo "<script>
    alert('Registration Successful');
    window.location.href='index.php';
    </script>";

}
else{

    echo "Error: " . mysqli_error($conn);

}

}

}

?>