<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact page</title>


    <!---bootstrape link-->
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
<link rel="stylesheet" type="text/css" href="contact.css">
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
  <img src="contactbanner.jpg" class="img-fluid w-100 banner-img" alt="About Banner">

  <!-- LEFT OVERLAY TEXT -->
  <div class="banner-text">
    <h1><b>Contact Us</b></h1>
    
  </div>
</div>
<!--- end Image banner-->



<!---cards divs-->

<div class="container2 ">

    <!-- TOP 3 CARDS -->
    <div class="row g-4 my-5">

        <div class="col-lg-4 col-md-6">
            <div class="contact-card">
                <h4>KG & Primary  Classes Sections</h4>
                <hr><br>

                <h6>Head</h6>
                <p><i class="fa fa-phone"></i> Tel: (021) 3583 3582</p>
                <p><i class="fa fa-envelope"></i> brightfuture.school@gmail.com</p><br>

                <hr><br>
                <h6>Postal Address</h6>
                <p class="text-primary">
                    Abdullah Goth, Bin Qasim Town, Karachi
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="contact-card">
                <h4>Middle Classes Section</h4><br>
                <hr><br>

                <h6>Head</h6>
                <p><i class="fa fa-phone"></i> Tel: (021) 3225 8263</p>
                <p><i class="fa fa-envelope"></i> brightfuture.school@gmail.com</p><br>

                <hr><br>
                <h6>Postal Address</h6>
                <p class="text-primary">
                    Abdullah Goth, Bin Qasim Town, Karachi
                </p>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="contact-card">
                <h4>High Classes Section</h4><br>
                <hr><br>

                <h6>Head</h6>
                <p><i class="fa fa-phone"></i> Tel: (021) 3587 6414</p>
                <p><i class="fa fa-envelope"></i>brightfuture.school@gmail.com</p><br>

                <hr><br>
                <h6>Postal Address</h6>
                <p class="text-primary">
                    Abdullah Goth, Bin Qasim Town, Karachi
                </p>
            </div>
        </div>

    </div>

    <!-- BOTTOM 2 CARDS -->
    <div class="row g-4 mt-4">

        <div class="col-lg-6">
            <div class="contact-card white-card">
                <h4>Principal</h4>
                <hr><br>
                <p><i class="fa fa-phone"></i> Tel: (021) 3587 6414</p>
                <p><i class="fa fa-envelope"></i> principal.brightfuture@gmail.com</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="contact-card white-card">
                <h4>Accounts Department</h4>
                <hr><br>
                <p><i class="fa fa-phone"></i> Tel: (021) 3587 6414, 3582 1706</p>
                <p><i class="fa fa-envelope"></i> accounts.brightfuture@gmail.com</p>
            </div>
        </div>

    </div>

</div>
<!--end-cards divs-->


<!--last div-->



<div class="container3 contact-section ">
    <div class="row align-items-center my-5">

        <!-- LEFT CONTENT -->
        <div class="col-lg-5 mb-4 mb-lg-0"  style="padding: 0 30px;">
            <h1 class="contact-title">Contact Us!</h1>
                 
                  <p class="contact-text">
                Get in touch with us for more information and assistance.
            </p><hr>

                <p><i class="fa fa-phone"></i> Tel: (021) 3587 6414, 3582 1706</p><hr>
                <p><i class="fa fa-envelope"></i>   brightfuture.school@gmail.com</p><hr>


            
            <div class="social-icons mt-4">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
           <!-- LEFT CONTENT -->

        <!-- RIGHT FORM -->
        <div class="col-lg-7">
            <div class="form-card">
                <form>

                    <div class="mb-3">
                        <label class="form-label"><b>Name</b></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><b>Phone Number</b></label>
                        <input type="text" class="form-control" placeholder="Phone Number">
                    </div>

                    <div class="mb-4">
                        <label class="form-label"><b>Message</b></label>
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>

                    <button type="submit" class="btn send-btn"><b>Send</b></button>

                </form>
            </div>
        </div>        <!-- RIGHT FORM -->


    </div>
</div>





<!--end last div-->

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
