<!DOCTYPE html>
<html lang="en">

<head>
	<style>
	body {
  font-family: "Open Sans", sans-serif;
  color: #272829;
}

a {
  color: #149ddd;
}

a:hover {
  color: #37b3ed;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Raleway", sans-serif;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  right: 15px;
  bottom: 15px;
  background: #149ddd;
  color: #fff;
  transition: display 0.5s ease-in-out;
  z-index: 99999;
}

.back-to-top i {
  font-size: 24px;
  position: absolute;
  top: 7px;
  left: 8px;
}

.back-to-top:hover {
  color: #fff;
  background: #2eafec;
  transition: background 0.2s ease-in-out;
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  width: 300px;
  transition: all ease-in-out 0.5s;
  z-index: 9997;
  transition: all 0.5s;
  padding: 0 15px;
  background: #040b14;
  overflow-y: auto;
}

#header .profile img {
  margin: 15px auto;
  display: block;
  width: 120px;
  border: 8px solid #2c2f3f;
}

#header .profile h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  font-weight: 600;
  -moz-text-align-last: center;
  text-align-last: center;
  font-family: "Poppins", sans-serif;
}

#header .profile h1 a, #header .profile h1 a:hover {
  color: #fff;
  text-decoration: none;
}

#header .profile .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #212431;
  color: #fff;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
}

#header .profile .social-links a:hover {
  background: #149ddd;
  color: #fff;
  text-decoration: none;
}

#main {
  margin-left: 300px;
}

@media (max-width: 1199px) {
  #header {
    left: -300px;
  }
  #main {
    margin-left: 0;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu {
  padding-top: 30px;
}

.nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
}

.nav-menu a {
  display: flex;
  align-items: center;
  color: #a8a9b4;
  padding: 12px 15px;
  margin-bottom: 8px;
  transition: 0.3s;
  font-size: 15px;
}

.nav-menu a i {
  font-size: 24px;
  padding-right: 8px;
  color: #6f7180;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  text-decoration: none;
  color: #fff;
}

.nav-menu a:hover i, .nav-menu .active > a i, .nav-menu li:hover > a i {
  color: #149ddd;
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #149ddd;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active #header {
  left: 0;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}

/*--------------------------------------------------------------
# - Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;
  background: url("../img/hero-bg.jpg") top center;
  background-size: cover;
}

#hero:before {
  content: "";
  background: rgba(5, 13, 24, 0.3);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

#hero .hero-container {
  position: relative;
  z-index: 2;
  min-width: 300px;
}

#hero h1 {
  margin: 0 0 10px 0;
  font-size: 64px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
}

#hero p {
  color: #fff;
  margin-bottom: 50px;
  font-size: 26px;
  font-family: "Poppins", sans-serif;
}

#hero p span {
  color: #fff;
  padding-bottom: 4px;
  letter-spacing: 1px;
  border-bottom: 3px solid #149ddd;
}

@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
}

/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background: black;
}

.section-title {
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
  color: #3684DC;
}

.section-title h2::after {
  content: '';
  position: absolute;
  display: block;
  width: 125px;
  height: 3px;
  background: gray;
  bottom: 0;
  left: 0;
}


/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about .content h3 {
  font-weight: 700;
  font-size: 25px;
  color: #3684DC;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li {
  padding-bottom: 10px;
  color: #FF00FF;
}

.about .content ul i {
  font-size: 20px;
  padding-right: 2px;
  color: cyan;
}

.about .content p:last-child {
  margin-bottom: 0;
  color: white;
}

/*--------------------------------------------------------------
# Akills
--------------------------------------------------------------*/
.skills .progress {
  height: 50px;
  display: block;
  background: none;
}

.skills .progress .skill {
  padding: 10px 0;
  margin: 0 0 6px 0;
  text-transform: uppercase;
  display: block;
  font-weight: 6000;
  font-family: "Poppins", sans-serif;
  color: white;
}

.skills .progress .skill .val {
  float: right;
  font-style: normal;
}

.skills .progress-bar-wrap {
  background: #dce8f8;
}

.skills .progress-bar {
  width: 1px;
  height: 10px;
  transition: .9s;
  background-color: #149ddd;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact {
  padding-bottom: 130px;
}

.contact .info {
  padding: 30px;
  background: black;
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
}

.contact .info i {
  font-size: 30px;
  color: #149ddd;
  float: left;
  width: 80px;
  height: 80px;
  background: #dff3fc;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 40px;
  font-weight: 6000;
  margin-bottom: 5px;
  color: #dff3fc;
}

.contact .info p {
  padding: 0 0 10px 60px;
  margin-bottom: 25px;
  font-size: 20px;
  color: #3684DC;
}




@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 20px 0;
  background: #f9f9f9;
}

.breadcrumbs h2 {
  font-size: 26px;
  font-weight: 300;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
  font-size: 15px;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #0e2442;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 40px;
}

.portfolio-details .portfolio-details-container {
  position: relative;
}

.portfolio-details .portfolio-details-carousel {
  position: relative;
  z-index: 1;
}

.portfolio-details .portfolio-details-carousel .owl-nav, .portfolio-details .portfolio-details-carousel .owl-dots {
  margin-top: 5px;
  text-align: left;
}

.portfolio-details .portfolio-details-carousel .owl-dot {
  display: inline-block;
  margin: 0 10px 0 0;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.portfolio-details .portfolio-details-carousel .owl-dot.active {
  background-color: #149ddd !important;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  position: absolute;
  right: 0;
  bottom: -70px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  z-index: 2;
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 400;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}

.portfolio-details .portfolio-description {
  padding-top: 50px;
}

.portfolio-details .portfolio-description h2 {
  width: 50%;
  font-size: 26px;
  font-weight: 400;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-description p {
  padding: 0;
}

@media (max-width: 768px) {
  .portfolio-details .portfolio-description h2 {
    width: 100%;
  }
  .portfolio-details .portfolio-info {
    position: static;
    margin-top: 30px;
  }
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
  padding: 15px;
  color: #f4f6fd;
  font-size: 14px;
  position: fixed;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 9999;
  background: #040b14;
}

#footer .copyright {
  text-align: center;
}

#footer .credits {
  padding-top: 5px;
  text-align: center;
  font-size: 13px;
  color: #eaebf0;
}

@media (max-width: 1199px) {
  #footer {
    position: static;
    width: auto;
    padding-right: 20px 15px;
  }
}

	</style>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arbaa shawla</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/im/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Arba
        a shawla</a></h1
        <div class="social-links mt-3 text-center">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.html"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i>Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Arbaa shawla</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Gamers"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about" style= "background: black; color: white;">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hello Hello!, I attended vocational high school 2 Jakarta I am 17 years old,My hobby is listening to music, and playing video game, this year i am in 12th grade, majoring in software engineering.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>My Info.</h3>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 09 December 2002</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +62-85777423741</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Jakarta, Indonesia</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 17</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> arbabiko@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
			<h3>Internship Experiences</h3>
             <p>
			I did an intership at Menara BTN Harmoni, i didn't get too much experience about programming and editing or stuff like that in there, but i got other experience about how to manage things and i got to know how it feels to work in an office, where i must complete my task on time be disciplined, and always tidy
          </p>
            <h3>My Hope For The Future</h3>
            <p>
			  My aspirations and hopes for the future are to become a programmer who is able and knowledgeable about programming languages to make something like application, game, etc ​​and I want to work in a place that matches what I have learned in school.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">35%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Python <i class="val">20%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C++ <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

   
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
   

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title" style="color: white;">
          <h2>Portfolio</h2>
          <p>NONE.</p>
        </div>

        
    </section><!-- End Portfolio Section -->
   

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style="background: black">
      <div class="container">

        <div class="section-title">
          <h2>Contact Me</h2>
        </div>

        <div class="row" data-aos="fade-in" >

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Jl. Krukut lio dlm No.41</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>arbabiko@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 85777423741</p>
              </div>

              <iframe frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
