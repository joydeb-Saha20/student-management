<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduVerse | Student Management System</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="style.css" href="css/responsive.css">


</head>
<body>
    <nav>
        <div class="logo">EduVerse</div>

        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="registration.php">Sign Up</a></li>
        </ul>

        <a href="admin_login.php" class="admin-btn">Admin Login</a>
    </nav>


    <!-- Footer --> 

    <section class="hero">
        <div class="content">
            <h1 class="animate">Welcome to our</h1>
            <div class="title-row">
            <h2 class="animate">EduVerse </h2>
            <a href="login.php" class="signin-btn animate">
                Sign In
            </a>
            

            </div>
        </div>
    </section>

   
     <section class="features">

    <div class="features-container">

        <h2 class="section-title animate">Features</h2>

    <div class="feature-container">

        <!-- Card 1 -->
<div class="feature-card animate">

    <div class="icon">👨‍🎓</div>

    <h3>Student Profile</h3>

    <p>
        Register, log in, update your personal profile,
        manage academic details, and access your student
        information securely anytime from your personalized
        dashboard with ease.
    </p>

    <a href="#">Learn More →</a>

</div>

<!-- Card 2 -->
<div class="feature-card animate">

    <div class="icon">🔐</div>

    <h3>Secure System</h3>

    <p>
        Protect student information with secure authentication,
     and role-based access to
        ensure complete privacy, safety, and reliable
        protection against unauthorized access.
    </p>

    <a href="#">Learn More →</a>

</div>

<!-- Card 3 -->
<div class="feature-card animate">

    <div class="icon">🛡️</div>

    <h3>Admin Dashboard</h3>

    <p>
        Manage student accounts, monitor profiles, verify
        information, and control the complete system through
        one secure dashboard with powerful administrative
        tools and easy access.
    </p>

    <a href="#">Learn More →</a>

</div>

    </div>

</section>
 <!-- ================= About Section ================= -->

<section class="about" id="about">

    <div class="about-container">

    <div class="about-content">

        <h2 class="animate">About EduVerse</h2>

        <p class="animate">
            
    <strong>EduVerse</strong> is a modern Student Management System designed to simplify
    academic record management. Students can securely register, manage
    their profiles, upload important documents, and access their
    information anytime, while administrators efficiently manage the
    entire system through one secure dashboard.

    The platform provides a fast, reliable, and user-friendly experience
    that improves communication between students and administrators.
    It helps educational institutions manage records securely, save time,
    reduce paperwork, and increase overall efficiency.
</p>
        

        </div>

        </div>

    </div>

</section>

<footer class="footer">

    <div class="footer-container">

    <div class="footer-box ">
        <h2>EduVerse</h2>
        <p>
             A modern Student Management System that makes
             academic management simple, secure and efficient.
        </p>
    </div>

    <div class="footer-box">
        <h3>Quick Links</h3>

        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Features</a>
        <a href="#">Sign In</a>
    </div>

    <div class="footer-box">
        <h3>Features</h3>
        <a href="#">Student Profile</a>
        <a href="#">Secure system</a>
        <a href="#">Admin Panel</a>
    </div>

    <div class="footer-box">
        <h3>Contact</h3>
        <p>📧 support@eduVerse.com</p>
        <p>📞 +91 9612350...</p>
        <p>📍 Tripura, India</p>
    </div>
    </div>

    <div class="footer-bottom">

        © 2026 EduVerse | All Rights Reserved

    </div>

<script>
   const elements = document.querySelectorAll(".animate");

function reveal() {

    elements.forEach((element) => {

        const elementTop = element.getBoundingClientRect().top;
        const elementBottom = element.getBoundingClientRect().bottom;
        const windowHeight = window.innerHeight;

        // Animate when entering screen
        if (elementTop < windowHeight - 100 && elementBottom > 100) {
            element.classList.add("show");
        }
        // Reset animation when leaving screen
        else {
            element.classList.remove("show");
        }

    });

}

window.addEventListener("scroll", reveal);
window.addEventListener("load", reveal);    
</script>
</body>
</html>