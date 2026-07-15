<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>School Navbar</title>
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
<link rel="stylesheet" type="text/css" href="landingpage2.css">
<!--end link for css -->

</head>

<body>
<!-- DESKTOP LOGO -->
<div class="logo-merge">
<img src="bright.png">
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




<!--  Crousels -->

<div id="carouselExample" 
     class="carousel slide carousel-fade"
     data-bs-ride="carousel"
     data-bs-interval="4000"
     data-bs-pause="false">
     

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bb.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption-left">
<h1 class="slide-title">Welcome to Bright Future School</h1>
    <p class="slide-text">
      A place where learning begins, creativity grows,  
      and every child shines with confidence.
    </p>
  </div>
    </div>
    <div class="carousel-item">
      <img src="b4.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption-left">
        <h1 class="slide-title">Inspired Learning, Bright Futures</h1>
        <p class="slide-text">
          From creative classrooms to engaging activities, we help students explore
          new ideas, build real skills, and shape their future.
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="a1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption-left">
        <h1 class="slide-title">A Safe, Caring & <br>
          Creative Environment</h1>
        <p class="slide-text">
          Our school encourages kindness, discipline, and curiosity — giving children
          the freedom to learn, play, and shine.
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---- endcrousels--->

<!--   End Crousels -->









<!--   containeer2 -->
   <!-- Quality Education Section -->
    <!-- Professional About Section -->
<section class="about-pro py-5">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- LEFT TEXT -->
      <div class="col-lg-6 " data-aos="fade-right">

      <h5 class="about-title"
    data-aos="fade-up"
    data-aos-delay="100">
  Bright Future School & Quality Education
</h5>

        <p class="about-text">
          Bright Future School is committed to delivering excellence in
          education through innovative teaching methods, strong academic
          foundations, and character building.
        </p>




        
        <p class="about-text">
          Our learning environment nurtures curiosity, confidence, and
          creativity—preparing students to succeed academically and
          thrive in life with strong moral and social values.
        </p>

        <a href="about.php" class="about-btn">
          Learn More About Us
        </a>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="col-lg-6 text-center" data-aos="fade-left">
<img src="glas.jpg"
     class="img-fluid edu-image animate-img"
     data-aos="zoom-in"
     data-aos-delay="200"
     alt="Bright Future School">
    </div>
  </div>
</section> <!--endcontainer2-->



 <!--container3-->
 <!-- ===== Container 3 : Who Are We ===== -->
<!-- ===== Container 3 : Who Are We ===== -->
<section class="container3 ">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- LEFT IMAGE -->
      <div class="col-lg-6">

        <img src="p1.png"
     class="img-fluid about-img animate-img"
     data-aos="fade-right"
     data-aos-delay="200"
     alt="Who We Are">
      </div>

      <!-- RIGHT TEXT -->
      <div class="col-lg-6">
<h5 class="about-title"
    data-aos="fade-up"
    data-aos-delay="100">
  Who are we?
</h5>
      <p class="about-text"
   data-aos="fade-up"
   data-aos-delay="250">
          Bright Future School is a well-established educational institution
          dedicated to delivering quality education in a disciplined,
          supportive, and student-focused environment.
        </p>
        <p class="about-text">
          We believe in nurturing intellectual growth, strong moral values,
          and practical skills, enabling students to become confident,
          responsible, and productive members of society.
        </p>
      </div>

    </div>
  </div>
</section>
<!--end -->



<!-- ===== Container 4 : Mission & Commitments ===== -->
<section class="mission-section py-5">

  <div class="overlay" >

</div>
  <div class="container">
    <div class="row text-white align-items-center text-center text-lg-start g-4">

      <!-- Left Column -->
      <div class="col-lg-4 d-flex justify-content-center justify-content-lg-start align-items-center">
        <h2 class="mission-title">Mission &<br>
           Commitments</h2>

       
      </div>

      <!-- Middle Column -->
      <div class="col-lg-4">
        <p class="mission-text">
          The Bright Future Schools’ mission is to provide enlightened education and examination services to the students. Education sets the path for development and helps achieve the desired goals.
        </p>
      </div>

      <!-- Right Column -->
      <div class="col-lg-4">
        <p class="mission-text">
          Committed to excellence in developing dynamic personalities to accept the challenges of modern era. Creating expertise and advancement in every field of life, serving mankind, and being patriotic Pakistani citizens.
        </p>
      </div>

    </div>
  </div>
</section>



<!--    Cards - header-content hidden-xs-->
<div class="container4">

  <div class="center col-md-12 justify-content-center  mb-5 my-5">             
<h1>
 Get the School advantage
</h1>

</div><!--ceter -->

 <!--child divs-->
<!--- 3 Responsive DIV Boxes -->
<div class="container my-5">
    <div class="row g-4">

        <!-- Div 1 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="info-box">
                <div class="img-wrap">
                    <img src="t1.png" alt="img 1">
                </div>
                <p><b>Conceptual clarity 
                  <br>through visualizations</b></p>
            </div>
        </div>

        <!-- Div 2 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="info-box">
                <div class="img-wrap">
                    <img src="t2.png" alt="img 2">
                </div>
                <p><b>Personalised learning <br>
programs</b></p>
            </div>
        </div>

        <!-- Div 3 -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="info-box">
                <div class="img-wrap">
                    <img src="t3.png" alt="img 3">
                </div>
                <p><b>Unmatched individual <br>
                   attention</b></p>
            </div>
        </div>

    </div>
</div>


</div><!-- endcontainer4-->




<!-- ===== Programs / Classes Slider Section ===== -->
<!-- ===== Academic Levels Slider ===== -->


<!-- ===== Academic Levels Slider ===== -->
<section class="levels-section">
  <div class="levels-wrapper">
    <div class="levels-track" id="levelsTrack">

      <div class="level-card">
        <div class="level-img">
          <img src="pre-primary.jpg" alt="">
        </div>
        <h4>PRE-PRIMARY</h4>
      </div>

      <div class="level-card">
        <div class="level-img">
          <img src="primary.jpg" alt="">
        </div>
        <h4>PRIMARY</h4>
      </div>

      <div class="level-card">
        <div class="level-img">
          <img src="middle.jpg" alt="">
        </div>
        <h4>MIDDLE</h4>
      </div>

      <div class="level-card">
        <div class="level-img">
          <img src="secondary.jpg" alt="">
        </div>
        <h4>SECONDARY</h4>
      </div>

      <div class="level-card">
        <div class="level-img">
          <img src="o-level.jpg" alt="">
        </div>
        <h4>O LEVELS</h4>
      </div>

    </div>
  </div>
</section>




<!---cards-->





<!--container5  Cards -->

<div class=" container5 ">

<div class="c5text   mb-5 my-5">            
<h4><b>
Comprehensive learning programs<br>
& classes for all students
</b></h4>
<p>
Become lifelong learners with Pakistan's best teachers,<br>
engaging video lessons and personalised learning journeys
</p>

</div>


<div class="row g-4 justify-content-center">

        <!-- LEFT CARD -->
        <div class="col-md-6 col-lg-5">
            <div class="custom-card">

                <span class="badge-custom"> Class 1–3</span>

                <div class="row align-items-center">
                    
                    <!-- Left Image -->
                    <div class="col-12 col-md-5">
                        <img src="p6.webp" class="card-img-left" alt="">
                    </div>

                    <!-- Right Content (Right Image Removed) -->
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold mt-2">KG Classes</h5>

                        <p class="mt-1 mb-1">
Early learning focused on basics and creativity.
                        </p>
                        <br>

<a href="https://www.youtube.com/@PeekabooKidzz" class="explore-btn">Explore</a>
                    </div>

                </div>

            </div>
        </div>

        <!-- RIGHT CARD -->
        <div class="col-md-6 col-lg-5">
            <div class="custom-card">

                <span class="badge-custom">Class 1-5</span>

                <div class="row align-items-center">

                    <!-- Left Image -->
                    <div class="col-12 col-md-5">
                        <img src="t3.png" class="card-img-left" alt="">
                    </div>

                    <!-- Right Content (Right Image Removed) -->
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold mt-2">Primary Classes</h5>

                        <p class="mt-1 mb-1">
Strong foundations in core subjects.
                        </p>
<br>
<a href="https://www.youtube.com/@KhanAcademyKids" class="explore-btn">Explore</a>

                    </div>

                </div>

            </div>
        </div>

    </div>



<div class="row g-4 justify-content-center">

        <!-- LEFT CARD -->
        <div class="col-md-6 col-lg-5">
            <div class="custom-card">

                <span class="badge-custom"> Class 6–8</span>

                <div class="row align-items-center">
                    
                    <!-- Left Image -->
                    <div class="col-12 col-md-5">
                        <img src="middle-classess.png" class="card-img-left" alt="">
                    </div>

                    <!-- Right Content (Right Image Removed) -->
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold mt-2">  Middle Classes</h5>

                        <p class="mt-1 mb-1">
Concept-based learning and skill development.                            
                        </p>

<br>
<a href="https://www.youtube.com/@khanacademy" class="explore-btn">Explore</a>
                    </div>

                </div>

            </div>
        </div>

        <!-- RIGHT CARD -->
        <div class="col-md-6 col-lg-5">
            <div class="custom-card">

                <span class="badge-custom">Class  9–10</span>

                <div class="row align-items-center">

                    <!-- Left Image -->
                    <div class="col-12 col-md-5">
                        <img src="p5.png" class="card-img-left" alt="">
                    </div>

                    <!-- Right Content (Right Image Removed) -->
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold mt-2">High Classes</h5>

                        <p class="mt-1 mb-1">
Academic focus and exam readiness.                            
                        </p>

<br>
<a href="https://www.youtube.com/@CrashCourse" class="explore-btn">Explore</a>
                    </div>

                </div>

            </div>
        </div>

    </div>





        </div><!---container5--->


<!--end cards-->


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
            <li><a href="landingpage2.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="admissions.php">Admissions</a></li>
            <li><a href="contact.php">Contact Us </a></li>
            <li><a href="slife.php">Students life</a></li>
          </ul>
        </div>

        <!-- 3️⃣ CONTACT US -->
        <div class="col-md-3 mb-4 mb-md-0">
          <h5 style="color:#f8b82c;">Contact Us</h5>
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




<!--aos library-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!--end aos library link-->



<script>

 AOS.init({
  duration: 1200, // animation duration in ms
  once: true   // animate only once while scrolling
});



/* Offcanvas resize fix*/
window.addEventListener("resize", function(){

if(window.innerWidth >= 992){

let offcanvasElements =
document.querySelectorAll('.offcanvas');

offcanvasElements.forEach(function(el){

let instance =
bootstrap.Offcanvas.getInstance(el);

if(instance){
instance.hide();
}

});

}

});

/* Explanation: Hides mobile offcanvas menu when switching to desktop.*/


/*crousels js */




/*cards js*/
 
/*cards js*/
 const track = document.getElementById("levelsTrack");
let position = 0;
let speed = 0.25;

function autoScroll() {
  position -= speed;
  track.style.transform = `translateX(${position}px)`;

  if (Math.abs(position) >= track.scrollWidth - window.innerWidth) {
    position = 0;
  }

  requestAnimationFrame(autoScroll);
}

autoScroll();
/* end crousels js */

// hover pe pause
track.addEventListener("mouseenter", () => speed = 0);
track.addEventListener("mouseleave", () => speed = 0.4);

/*endcards js*/



</script>


</body>
</html>




