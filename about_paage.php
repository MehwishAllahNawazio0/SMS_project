<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about page</title>

    <!---bootstrape link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!--for animations link-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Beautiful Font for School Name -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!--google font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


   <!-- link for css -->
<link rel="stylesheet" type="text/css" href="about.css">
<!--end link for css -->



</head>
<body>
    



<!-- DESKTOP LOGO -->
<div class="logo-merge">
<img src="bright.png" alt="Bright Future School Logo">
</div>
<!--end DESKTOP LOGO -->


<!-- TOP NAVBAR (DESKTOP) -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">

<div class="container-fluid">

<span class="school-title">Bright Future School</span>

<div class="ms-auto d-flex gap-2">

<input class="form-control search-input" type="search" placeholder="Search...">

<button class="btn btn-search">Search</button>

<button class="btn btn-login" onclick="window.location.href='loginpage.php'">Login</button>

</div>

</div>

</nav>
<!--end TOP NAVBAR (DESKTOP) -->


<!-- BOTTOM NAVBAR (DESKTOP) -->

<nav class="navbar navbar-expand-lg bottom-nav">

<div class="container">

<ul class="navbar-nav mx-auto">

<li class="nav-item">
<a class="nav-link" href="landingpage2.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="admissions.php">Admissions</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact Us</a>
</li>

<li class="nav-item">
<a class="nav-link" href="slife.php">Students Life</a>
</li>



</ul>

</div>

</nav>

<!--end BOTTOM NAVBAR (DESKTOP) -->

<!-- MOBILE HEADER -->

<div class="mobile-header">

<div class="mobile-left">
<img src="bright.png" class="mobile-logo">
<span class="mobile-school">Bright Future School</span>
</div>

<div class="mobile-icons">

<button class="icon-btn" data-bs-toggle="offcanvas" data-bs-target="#searchCanvas">
<i class="fas fa-search"></i>
</button>

<button class="icon-btn" data-bs-toggle="offcanvas" data-bs-target="#menuCanvas">
<i class="fas fa-bars"></i>
</button>

</div>

</div>
<!--end MOBILE HEADER -->


<!-- SEARCH PANEL -->

<div class="offcanvas offcanvas-end" id="searchCanvas">

<div class="offcanvas-header">
<h4>Search</h4>

<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>

</div>

<div class="offcanvas-body">

<input class="form-control mb-3" placeholder="Search...">

<button class="btn btn-search w-100 mb-2">Search</button>

<button class="btn btn-login w-100" onclick="window.location.href='loginpage.php'">
Login
</button>

</div>

</div>
<!--end SEARCH PANEL -->


<!-- MENU PANEL -->

<div class="offcanvas offcanvas-end" id="menuCanvas">

<div class="offcanvas-header">

<h4>Menu</h4>

<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>

</div>

<div class="offcanvas-body p-0">

<div class="mobile-menu-item">
<a href="landingpage2.php">Home</a>
</div>

<div class="mobile-menu-item">
<a href="about.php">About</a>
</div>

<div class="mobile-menu-item">
<a href="admissions.php">Admissions</a>
</div>



<div class="mobile-menu-item">
<a href="contact.php">Contact Us</a>
</div>


<div class="mobile-menu-item">
<a href="slife.php">Students Life</a>
</div>

</div>

</div>
<!-- endMENU PANEL -->






<!---Image banner-->
<div class="about-banner">
  <img src="about-banner.jpg" class="img-fluid w-100 banner-img">


  <div class="banner-text">
    <h1>About Us</h1>
  </div>
</div>
<!--- end Image banner-->



<!---about -->

<!-- ABOUT CONTENT SECTION -->
<!-- ABOUT CONTENT SECTION (Compact & Professional) -->
<section class="about-content-section">
  <div class="container">
    <div class="row align-items-center g-0">

      <!-- LEFT IMAGE -->
      <div class="col-lg-6 col-md-12">
        <img src="school.png" alt="School Building" class="img-fluid about-img">
      </div>

      <!-- RIGHT TEXT -->
      <div class="col-lg-6 col-md-12 about-text-wrap">
        <h2 class="about-heading">About Us</h2>
        <p class="about-text">
          Established with a vision to nurture young minds, Bright Future School
          is committed to academic excellence and holistic development.
        </p>

        <p class="about-text">
          We provide a safe, inclusive, and innovative learning environment where students
          are encouraged to explore their potential and become responsible global citizens.
        </p>
      </div>

    </div>
  </div>
</section>
<!-- END ABOUT CONTENT SECTION -->


<!-- PRINCIPAL MESSAGE SECTION -->
 
<section class="principal-message-section">
  <div class="container">
    <div class="row align-items-center g-0">

      <!-- LEFT TEXT -->
      <div class="col-lg-6 col-md-12 principal-text-wrap">
        <h2 class="principal-heading">Message from the Principal</h2>
        <p class="principal-text">
          At Bright Future School, our mission is to create a nurturing and challenging environment
          that fosters both academic excellence and personal growth. We believe that every student
          has unique talents, and our role is to guide them to discover and enhance those strengths.
        </p>
        <p class="principal-text">
          We emphasize integrity, responsibility, and a passion for learning, ensuring our students
          are well-prepared to thrive in a rapidly changing world. Our commitment is to excellence,
          innovation, and holistic development.
        </p>
        <p class="principal-text" style="margin-top:15px;">
          - Dr. Sarah Khan, Principal
        </p>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 col-md-12">
        <img src="principle.jpg" alt="Principal Image" class="img-fluid principal-img">
      </div>

    </div>
  </div>
</section>

<!---end about-->

<!--our mission-->

<!-- OUR MISSION SECTION -->
<section class="mission-section">
  <div class="container">
    <div class="row align-items-center g-0">

      <!-- LEFT IMAGE -->
      <div class="col-lg-6 col-md-12">
        <img src="our-mission.jpg" alt="School Mission" class="img-fluid mission-img">
      </div>

      <!-- RIGHT TEXT -->
      <div class="col-lg-6 col-md-12 mission-text-wrap">
        <h2 class="mission-heading">Our Mission</h2>
        <p class="mission-text">
          At Bright Future School, our mission is to empower every student with the knowledge,
          skills, and values necessary to excel in academics and life. We are dedicated to
          fostering creativity, critical thinking, and a love for learning in a safe and inclusive environment.
        </p>
        <p class="mission-text">
          We aim to cultivate responsible global citizens who are confident, compassionate, and
          ready to contribute positively to society. Our approach combines innovation, discipline,
          and holistic development to ensure each student reaches their full potential.
        </p>
      </div>

    </div>
  </div>
</section>


<!--end our mission-->

<!--our vision-->


<!-- OUR VISION SECTION -->
<section class="vision-section">
  <div class="container">
    <div class="row align-items-center g-0">

      <!-- LEFT TEXT -->
      <div class="col-lg-6 col-md-12 vision-text-wrap">
        <h2 class="vision-heading">Our Vision</h2>
        <p class="vision-text">
          Bright Future School envisions a learning community where every student
          is inspired to achieve excellence, embrace innovation, and contribute
          positively to society. Our focus is on nurturing leaders of tomorrow
          with integrity, empathy, and global awareness.
        </p>
        <p class="vision-text">
          We strive to create an environment that encourages curiosity, critical
          thinking, and lifelong learning, ensuring that our students are prepared
          to thrive in an ever-changing world.
        </p>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 col-md-12">
        <img src="our-vision.jpg" alt="Our Vision" class="img-fluid vision-img">
      </div>

    </div>
  </div>
</section>


<!--end our vision-->


<!---our core values-->


<!-- OUR CORE VALUES SECTION -->
<section class="core-values-section">
  <div class="container">
    <div class="row align-items-center g-0">

      <!-- LEFT IMAGE -->
      <div class="col-lg-6 col-md-12">
        <img src="our-values.png" alt="Our Core Values" class="img-fluid core-values-img">
      </div>

      <!-- RIGHT TEXT -->
      <div class="col-lg-6 col-md-12 core-values-text-wrap">
        <h2 class="core-values-heading">Our Core Values</h2>
        <p class="core-values-text">
          At Bright Future School, our core values guide everything we do. We emphasize integrity,
          respect, and responsibility, ensuring students grow into ethical and compassionate individuals.
        </p>
        <p class="core-values-text">
          Collaboration, innovation, and lifelong learning are central to our approach. We believe
          in fostering curiosity and resilience, helping students develop the skills to succeed academically
          and socially in a rapidly changing world.
        </p>
      </div>

    </div>
  </div>
</section>



<!---end our core values-->





<!-- Footer Start -->


<!-- Footer Start -->


  <!-- Footer -->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row text-center text-md-start">

        <!-- 1️⃣ LOGO + ICONS -->
        <div class="col-md-3 mb-4 mb-md-0">
          <img src="bright.png" alt="School Logo">

          <div class="social-icons mt-3">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="https://www.linkedin.com/in/mehwish-a-nawazio-ba6171370?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-icon"><i class="fab fa-linkedin-in"></i></a>

       <!--     <a href="#"><i class="fab fa-instagram"></i></a>-->
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>

        <!-- 2️⃣ PAGES -->
        <div class="col-md-3 mb-4 mb-md-0">
          <h5 style="color:#f8b82c;"><b>Pages</b></h5>
          <ul class="list-unstyled mt-2">
            <li><a href="landingpage.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="admissions.php">Admissions</a></li>
            <li><a href="contact.php">Contact Us </a></li>
            <li><a href="slife.php">Students life</a></li>
          </ul>
        </div>

        <!-- 3️⃣ CONTACT US -->
        <div class="col-md-3 mb-4 mb-md-0">
          <h5 style="color:#f8b82c;"><b>Contact Us</b></h5>
          <p class="mb-1">Abdullah Goth</p>
          <p class="mb-1">Bin Qasim Town, Karachi</p>
          <p class="mb-1">📞 (860) 927-3539</p>
      <p class="mb-0">✉️ info@BFschool.edu.pk</p>

        <!-- <a href="mailto:info@brightfutureschool.edu.pk">
  info@brightfutureschool.edu.pk
</a>--->
        </div>

        <!-- 4️⃣ MAP -->
         
      <!-- RIGHT: MAP -->
<!-- 4️⃣ MAP -->
<!-- 4️⃣ MAP -->
<div class="col-md-3 col-sm-12 text-center text-md-end">
  <div class="map-box">
    <iframe
      src="https://www.google.com/maps?q=Street+No+14+Block+Abdullah+Goth+Bin+Qasim+Town+Karachi&output=embed"
      width="100%"
      height="200"
      style="border:0;"
      allowfullscreen=""
      loading="lazy">
    </iframe>
  </div>
</div>

</div>

      </div>
    </div>
  </div>

  <!-- FOOTER BOTTOM -->
  <div class="footer-bottom">
    © 2026 Bright Future School. All Rights Reserved.
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
