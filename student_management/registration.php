<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EduVerse | Student Management System</title>

    <link rel="stylesheet" href="css/registration.css">
    <link rel="style.css" href="css/responsive.css">

<body>

    <!-- Registration Form -->

    <div class="container"
         id="registration-form">

        <form class="registration-form"
              action="connect.php"
              method="POST"
            enctype="multipart/form-data">

            <h1>Registration Form</h1>

            <!-- Row 1 -->

            <div class="row">

                <div class="form-group">

                    <label>Name of Candidate*</label>

                    <input type="text"
                           name="candidate_name"
                           required>

                </div>

                <div class="form-group">

                    <label>Roll Number*</label>

                    <input type="text"
                           name="roll_no"
                           required>

                </div>

            </div>

            <!-- Row 2 -->

            <div class="row">

                <div class="form-group">

                    <label>Registration Number*</label>

                    <input type="text"
                           name="registration_no"
                           required>

                </div>

                <div class="form-group">

                    <label>Father's Name*</label>

                    <input type="text"
                           name="father_name"
                           required>

                </div>

            </div>

            <!-- Row 3 -->

            <div class="row">

                <div class="form-group">

                    <label>Mother's Name*</label>

                    <input type="text"
                           name="mother_name"
                           required>

                </div>

                <div class="form-group">

                    <label>Course Name*</label>

                    <select name="course"
                            required>

                        <option value="">
                            Select Course
                        </option>

                        <option value="Diploma">
                            Diploma
                        </option>

                        <option value="BTech">
                            BTech
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Department Name*</label>

                    <select name="department"
                            required>

                        <option value="">
                            Select Department
                        </option>

                        <option value="CSE">
                            CSE
                        </option>

                        <option value="Civil">
                            Civil
                        </option>

                        <option value="Electrical">
                            Electrical
                        </option>

                        <option value="Mechanical">
                            Mechanical
                        </option>

                    </select>

                </div>

            </div>

            <!-- Row 4 -->

            <div class="row">

                <div class="form-group">

                    <label>Year of Student*</label>

                    <select name="student_year"
                            required>

                        <option value="">
                            Select Year
                        </option>

                        <option value="Diploma 1st Year">
                            Diploma 1st Year
                        </option>

                        <option value="Diploma 2nd Year">
                            Diploma 2nd Year
                        </option>

                        <option value="Diploma 3rd Year">
                            Diploma 3rd Year
                        </option>

                        <option value="BTech 1st Year">
                            BTech 1st Year
                        </option>

                        <option value="BTech 2nd Year">
                            BTech 2nd Year
                        </option>

                        <option value="BTech 3rd Year">
                            BTech 3rd Year
                        </option>

                        <option value="BTech 4th Year">
                            BTech 4th Year
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Institute Name*</label>

                    <input type="text"
                           name="institute_name"
                           required>

                </div>

                <div class="form-group">

                    <label>Date of Birth*</label>

                    <input type="date"
                           name="dob"
                           required>

                </div>

            </div>

            <!-- Row 5 -->

            <div class="row">

                <div class="form-group">

                    <label>Gender*</label>

                    <select name="gender"
                            required>

                        <option value="">
                            Select Gender
                        </option>

                        <option value="Male">
                            Male
                        </option>

                        <option value="Female">
                            Female
                        </option>

                    </select>

                </div>

                <div class="form-group">

                    <label>Contact No*</label>

                    <input type="tel"
                           name="contact_no"
                           required>

                </div>

                <div class="form-group">

                    <label>WhatsApp No*</label>

                    <input type="tel"
                           name="whatsapp_no"
                           required>

                </div>


                <div class="form-group">

                    <label>Email*</label>

                    <input type="email"
                           name="email"
                           required>

                </div>

            </div>

            <!-- Row 6 -->

                <div class="row">
                <div class="form-group">

                    <label>Address*</label>

                    <textarea rows="4"
                              name="address"
                              required></textarea>

                </div>
                </div>

                <!-- Row 7 -->

<div class="row">

    <div class="form-group">

        <label>Upload Aadhaar*</label>

        <input type="file"
               name="aadhaar"
               required>

    </div>

    <div class="form-group">

        <label>Upload Marksheet*</label>

        <input type="file"
               name="marksheet"
               required>

    </div>

</div>

<!-- Row 8 -->

<div class="row">

    <div class="form-group">

        <label>Upload Passport Size Photo*</label>

        <input type="file"
               name="photo"
               accept="image/*"
               required>

    </div>

    <div class="form-group">

        <label>Upload Signature*</label>

        <input type="file"
               name="signature"
               required>

    </div>

</div>

           

            <button type="submit"
                    name="submit">

                Submit

            </button>

            <p>

                Already have an account?

                <a href="login.php"
                   onclick="showForm('login-form')">
                    Login
                </a>

            </p>

        </form>

        <div class="footer">

© 2026 EduVerse – Student Management System

</div>

    </div>

    <script src="script.js"></script>
</head>
</body>

</html>