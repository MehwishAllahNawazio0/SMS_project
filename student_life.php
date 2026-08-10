<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Life</title>


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
<link rel="stylesheet" type="text/css" href="slife2.css">
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
<a class="nav-link" href="landingpage.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About</a>
</li>

<li class="nav-item">
<a class="nav-link" href="admissions.php">Admissions</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact  Us</a>
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
<a href="landingpage.php">Home</a>
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
<!---Video Banner-->
<div class="about-banner">
  <!-- Video -->
  <video autoplay muted loop id="bannerVideo">
    <source src="slife.mp4" type="video/mp4">
  </video>

  <!-- Overlay for text -->
  <div class="overlay">
    <div class="banner-text">
      <h1>Life at Bright Future</h1>
    </div>
  </div>
</div>
<script>
  // Slow down video speed
  const video = document.getElementById('bannerVideo');
  video.playbackRate = 0.5; // 0.5x speed
</script>


<!--- end Image banner-->

<!--end last div-->





<!--   containeer2 -->
<div class=" container2"> 
 
<div class="d-flex mission-flex flex-wrap justify-content-between">

        <!-- Left Child (Image) -->
        <div class="left-box col-12 col-md-6 col-lg-6">
            <img src="slife.jpg" alt="our mission  Image">
        </div>


 <!-- Right Child (Text) -->
        <div class="right-box col-12 col-md-6 col-lg-4 justify-content-center">
            <h2 class="student-life-title">Students Life</h2>

            <p> 
         
          
Bright Future School is an environment that is bustling with activity, 
full of excitement, and overflowing with life. Students build friendships,
 learn responsibility, and work hard in a safe, secure environment.
  Whether we are singing, acting, competing, or learning, we are doing 
  so in a unique way to create an education that defines a lifetime.<br>

At Bright Future School, our students experience many fun and exciting 
events that involve the entire school. From pep rallies to participation 
in many events within the community, we believe in the importance of the entire student body being involved together.
<br>
            </p>
        </div>

    </div>


</div> <!--endcontainer2-->



<!--container 3-->

<section class="facilities-section ">
  <div class="container3">

    <!-- Text Row -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="facilities-title">Facilities</h2>
        <p class="facilities-text">
          At Bright Future School, we provide a modern and supportive learning
           environment with well-equipped classrooms, advanced labs, a rich library,
            sports facilities, and safe spaces that support both academic and personal growth.
        </p>
      </div>
    </div>

    <!-- Images Row -->
     <div class="row g-3">
  <div class="col-6 col-md-3">
    <div class="facility-box">
      <img src="f1.webp" alt="Classroom">
      <div class="facility-overlay">
        <p>Modern Classrooms with Interactive Learning Activities</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="facility-box">
      <img src="lab.jfif" alt="Lab">
      <div class="facility-overlay">
        <p>Well-Equipped Science Labs for Practical Knowledge</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="facility-box">
      <img src="f3.webp" alt="Library">
      <div class="facility-overlay">
        <p>Peaceful Library Encouraging Reading & Research</p>
      </div>
    </div>
  </div>

  <div class="col-6 col-md-3">
    <div class="facility-box">
      <img src="sb.jpg" alt="Sports">
      <div class="facility-overlay">
        <p>Spacious Sports Grounds for Physical Growth</p>
      </div>
    </div>
  </div>
</div>


  </div>
</section>

<!--end -container 3-->


<!----intra or extar activities div container-->

<section class="activities-section">
  <div class="container4">

    <!-- TEXT ROW -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="activities-title">
          Intra and Inter-School Extracurricular Activities
        </h2>
        <p class="activities-text">
          Our extensive extracurricular program supports the holistic development of students
          by encouraging creativity, teamwork, leadership, and confidence. Through academic,
          cultural, and physical activities, students gain real-life skills beyond the classroom.
        </p>
      </div>
    </div>

    <!-- IMAGES GRID -->
    <div class="row g-3">

      <!-- Image 1 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="lab.jfif" alt="">
          <div class="activity-overlay">
            <p>Hands-on Science Activities Encouraging Curiosity & Innovation</p>
          </div>
        </div>
      </div>

      <!-- Image 2 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e2.webp" alt="">
          <div class="activity-overlay">
            <p>Creative Art Sessions Enhancing Imagination & Expression</p>
          </div>
        </div>
      </div>

      <!-- Image 3 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e3.webp" alt="">
          <div class="activity-overlay">
            <p>Academic Exhibitions Showcasing Student Talent & Knowledge</p>
          </div>
        </div>
      </div>

      <!-- Image 4 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e4.jpg" alt="">
          <div class="activity-overlay">
            <p>Annual Stage Performances Building Confidence & Teamwork</p>
          </div>
        </div>
      </div>

      <!-- Image 5 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e5.webp" alt="">
          <div class="activity-overlay">
            <p>Early Learning Activities Developing Motor & Thinking Skills</p>
          </div>
        </div>
      </div>

      <!-- Image 6 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e6.webp" alt="">
          <div class="activity-overlay">
            <p>Fun-Based Learning Sessions Promoting Active Participation</p>
          </div>
        </div>
      </div>

      <!-- Image 7 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
<img src="e7.webp" alt="Group Student Activities">
          <div class="activity-overlay">
            <p>Group Activities Strengthening Social & Communication Skills</p>
          </div>
        </div>
      </div>

      <!-- Image 8 -->
      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e8.webp" alt="">
          <div class="activity-overlay">
            <p>Sports & Physical Training for Discipline and Healthy Growth</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!---end intra & extra activities div -->

<!----UN days div container -->


<section class="activities-section ">
  <div class="container5">

    <!-- TEXT ROW -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="activities-title">UN Global Action Days</h2>
        <p class="activities-text">
          UN Global Action Days at our school promote awareness, responsibility,
          and active participation among students. Through meaningful activities
          and celebrations, students learn to express their views, respect diversity,
          and develop global citizenship.
        </p>
      </div>
    </div>

    <!-- IMAGES GRID -->
    <div class="row g-3">

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="indendenceday.jfif" alt="">
          <div class="activity-overlay">
            <p>Independence Day Celebrations Inspiring Patriotism & Unity</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="sbirthday.jpg" alt="">
          <div class="activity-overlay">
            <p>School Birthday Celebrations Building School Spirit</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="prdday.jfif" alt="">
          <div class="activity-overlay">
            <p>Pride Day Promoting Respect, Inclusion & Confidence</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="drama.jpg" alt="">
          <div class="activity-overlay">
            <p>Drama Evening Enhancing Creativity & Stage Confidence</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="mreading.jfif" alt="">
          <div class="activity-overlay">
            <p>Motivational Reading Program Encouraging Reading Habits</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="debbat.jfif" alt="">
          <div class="activity-overlay">
            <p>Debate Contests Developing Critical Thinking & Expression</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e7.webp" alt="">
          <div class="activity-overlay">
            <p>Peace Awareness Activities Promoting Global Harmony</p>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="activity-box">
          <img src="e8.webp" alt="">
          <div class="activity-overlay">
            <p>Community Service Projects Building Social Responsibility</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!---end UN conatiner-->





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
<p class="mb-1"> <i class="fas fa-map-marker-alt text-yellow me-2"></i> Malir Karachi</p>
          <p class="mb-1"><i class="fas fa-phone text-yellow me-2"></i> (860) 927-3539</p>
      <p class="mb-0"><i class="fas fa-envelope text-yellow me-2"></i> info@BFschool.edu.pk</p>

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
