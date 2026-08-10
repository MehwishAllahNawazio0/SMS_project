<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions page</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Beautiful Font for School Name -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- AOS Library CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <!--google font-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">



   <!-- link for css -->
<link rel="stylesheet" type="text/css" href="admissions.css">
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
<div class="about-banner">
  <img src="admission-banner.jpg" class="img-fluid w-100 banner-img">


  <div class="banner-text">
    <h1>Admissions</h1>
  </div>
</div>
<!--- end Image banner-->








<!--- cards -->

<!-- Admissions Circular Steps -->
<div class="text justify-content-center" >
  <h2>
ADMISSIONS 2026-2027
   </h2>
</div>

<div class="admission-steps">
  <div class="steps-wrapper">

    <!-- CARD 1 -->
    <div class="step-card">
      <div class="step-circle">
<i class="fa-solid fa-people-group"></i>
        <div class="step-number">1</div>
      </div>
      <div class="step-curve"></div>
      <h5>Eligibility</h5>
      <p>Age-appropriate admission test, clearance, and parent interview.</p>
    </div>

    <!-- CARD 2 -->
    <div class="step-card">
      <div class="step-circle">
<i class="fa-solid fa-id-card"></i>
        <div class="step-number">2</div>
      </div>
      <div class="step-curve"></div>
      <h5>How to Apply</h5>
      <p>Apply by visiting the campus or submitting the admission form.</p>
    </div>

    <!-- CARD 3 -->
    <div class="step-card">
      <div class="step-circle">
<i class="fa-solid fa-clipboard-list"></i>        
        <div class="step-number">3</div>
      </div>
      <div class="step-curve"></div>
      <h5>Test Details</h5>
      <p>No written test for preschool. Tests from primary onwards.</p>
    </div>

    <!-- CARD 4 -->
    <div class="step-card">
      <div class="step-circle">
<i class="fa-solid fa-hand-point-up"></i>        
        <div class="step-number">4</div>
      </div>
      <div class="step-curve"></div>
      <h5>Apply Now</h5>
      <p>Start your child’s learning journey with Bright Future School.</p>
    </div>

  </div>
</div>

<!---end cards -->




<!--   containeer2 -->
<div class=" container2"> 
 
<div class="d-flex mission-flex flex-wrap justify-content-between">

        <!-- Left Child (Image) -->
        <div class="left-box col-12 col-md-6 col-lg-6">
            <img src="middle.webp" alt="our mission  Image">
        </div>


 <!-- Right Child (Text) -->
        <div class="right-box col-12 col-md-6 col-lg-4 justify-content-center">
            <h2> <b>Admission Test and Interview</b></h2>
            <p> 
             <b>  As part of the admission process: </b></p><br>
             <ul>
<li>Students are required to take an age-appropriate, skills-based diagnostic test.</li><br>
<li>While the student completes the test, an interactive session with the parents is conducted by the School Head.</li><br>
<li>This interview helps establish a strong home-school partnership by fostering communication and understanding between the school and the family.
</li>
</ul>
<br>.
            
        </div>

    </div>


</div> <!--endcontainer2-->



<!---admission text  of container3 -->
<!-- Admission Formalities Text Section -->
<div class="admission-text-section w-100">
  <div class="admission-text" style="padding: 0 30px;"> <!-- optional padding -->
    <h2>Admission Formalities</h2>
    <p>
      When the eligibility for admission is determined by the School Head,
      the parents are required to submit the documentation, which includes:
    </p>
  </div>
</div>
<!---end admission text  of container3 -->


<!--container3-->


<div class="container3">
  <div class="row">

    <!-- LEFT SIDE -->
    <div class="col-12 col-lg-6">
      <h4 class="section-title">Required Documents</h4>
      <ul class="docs-list">
        <li>Attested Photocopy of Birth Certificate</li>
        <li>Attested Photocopy of Form B or Smart Card</li>
        <li>Attested Photocopies of CNIC of both parents/guardian</li>
        <li>
          Photocopy of School Leaving Certificate from previous schools
          (if applicable) along with the Result Card of last examination
        </li>
        <li>
          2 latest passport-sized photographs with 2 self-addressed envelopes
        </li>
      </ul>
    </div>

    <!-- RIGHT SIDE -->
    <div class="col-12 col-lg-6">
      <h4 class="section-title">Age Requirements</h4>

      <div class="table-responsive" style="padding: 0 15px;">
        <table class="age-table">
          <thead>
            <tr>
              <th>Classes</th>
              <th>Ages</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Beginners Step-1</td>
              <td>2 Years & 6 Months</td>
            </tr>

                         <tr>
                         <td>Beginners Step-2</td>
                          <td>3+</td>
                            </tr>

            <tr>
              <td>Beginners Step-3</td>
              <td>4+</td>
            </tr>
                            <tr>
                       <td>Class I</td>
                       <td>5+</td>
                        </tr>

               <tr>
                 <td>Class II</td>
                <td>6+</td>
               </tr>

             <tr>
              <td>Class III</td>
              <td>7+</td>
            </tr>

             <tr>
              <td>Class IV</td>
              <td>8+</td>
            </tr>

            <tr>
              <td>Class V</td>
              <td>9+</td>
            </tr>

             <tr>
              <td>Class VI</td>
              <td>  10+</td>
            </tr>
            <tr>

  <td>Class VII</td>
  <td>11+</td>
</tr>

<tr>
  <td>Class VIII</td>
  <td>12+</td>
</tr>

<tr>
  <td>Class IX </td>
  <td>13+</td>
</tr>

<tr>
  <td>Class X Matric</td>
  <td>14+</td>
</tr>


          </tbody>
        </table>
      </div>

    </div>

  </div>

</div>



<!-- New Text Section after Admission Formalities -->
<div class="admission-text-section w-100">
  <div class="admission-text" style="padding: 0 30px;">
    <p>
Once the payment of the fee challan is provided along with or before the due date with 
the admission formalities fulfilled, the child is then eligible to attend the school.
 The Smart School uniform and book lists are provided to the parents after the completion of the admission process.    </p>
  </div>
</div>
<!---final div of  container3-->
<!--endcontainer3-->


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
