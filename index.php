<?php

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if(isset($_POST['submit'])){
$name = clean_text($_POST['name']);
$email = clean_text($_POST['email']);
$subject = clean_text($_POST['subject']);

$to = "festechsolutions@gmail.com";
$headers = "MIME-VERSION: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
$headers = "From : <$email> \r\n "; 

$message = "Received Email from: $name\n\n";
$message .= clean_text($_POST['message']);
$message .= "\n\nTo send a reply, please click here -> $email";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to Sri Astro Yoga Vidya Peetam</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Yoga, Yoga Classes, Yoga Therapy Classes, Stress Management Classes, Omkaram, Pranayama, Mudras, Bandha, Yoga Teacher Training Classes, Kids Yoga Classes, Meditation, Dhatu Meditation, Sri Chakra Meditation, Chakra Balancing Techniques, Astrology, Life Report, Marriage and Match Compatibility, Marriage Problems, Career Astrology, Business Astrology, Birth Time Rectification, Health Issues and Dangers, Muhurta’s for Different Auspicious Occasions, Personal Yearly Predictions" name="keywords">
  <meta content="Yoga is a lifestyle than a series of workout. It helps relieve stress and help you relieve from tensions. Meditation is a practice to attain the position of peace and calmness. Inner peace is the most Important and necessary aspect in our day-to-day life. Astrology is science and mathematics combined than a simple belief." name="description">

  <link href="img/Logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Sweet Alert Files -->
  <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href=""><img src="img/Logo.png" height="100px" width="100px" alt="Logo" title="Sri Astro Yoga Vidya Peetam" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="https://youtube.com/c/ShubhamTV" target="_blank">Our Channel</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Yoga for everyone</h2>
                <p>Yoga is a lifestyle than a series of workout. It helps relieve stress and help you relieve from tensions. We teach you YOGA.</p>
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Peace</h2>
                <p>Meditation is a practice to attain the position of peace and calmness. Inner peace is the most Important and necessary aspect in our day-to-day life. We teach you the best ways to attain it and help you regrow from within.</p>
                <a href="#services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Astrology</h2>
                <p>Astrology is science and mathematics combined than a simple belief. We help you with your detailed life chart, matchmaking and the rest of the services mentioned below.</p>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->  

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p style="text-align: justify;">Sri Tulasi is a veteran in teaching Yoga with over 15 years of experience and had over 300 students. She teaches meditation and helps people find the inner peace. Over the period, Sri Tulasi trained numerous teachers who now teaches YOGA in different institutions. As a yoga therapist she assists her clients to release stress and tensions through yoga. In TATA cert services, which handles project management and quality assurance, Sri Tulasi is an examiner for 15 + years. With the abundance of wisdom and experience Sri Tulasi gives the best to the students and clients with Yoga and meditation classes. </p>
          <p style="text-align: justify;">Sri Tulasi provides astrology consultation, as a matter-of-fact Sri Tulasi is one of the leading astrology consultants in Hyderabad. She provided the consultation for more than 300 marriages. She started her career as astrology consultant 15 years ago and she has over 800 regular clients.</p>
        </header>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services we Offer</h3>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="#services">Yoga Classes</a></h4>
            <p class="description" style="text-align: justify;">We provide General Yoga Classes, Yoga Therapy Classes, Stress Management Classes, Omkaram, Pranayama, Mudras, Bandha, Yoga Teacher Training Classes, Kids Yoga Classes.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="#services">Meditation</a></h4>
            <p class="description" style="text-align: justify;">We provide Dhatu Meditation, Sri Chakra Meditation, Chakra Balancing Techniques.</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="#services">Astrology</a></h4>
            <p class="description" style="text-align: justify;">We offer Detailed Life Report, Marriage and Match Compatibility, Marriage Problems, Career Astrology, Business Astrology, Birth Time Rectification, Health Issues and Dangers, Muhurta’s for Different Auspicious Occasions, Personal Yearly Predictions.</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call To Action</h3>
        <p>Contact us for any services needed.</p>
        <a class="cta-btn" href="#contact">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-location"></i>
              <h3>Address</h3>
              <address><a href="https://goo.gl/maps/agDnh71TdAoXw7qZ8" target="_blank">Leela hospital road, motinagar mainroad, Hyderabad, Telangana </a></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-social-whatsapp"></i>
              <h3>Phone Number</h3>
              <p><a href="https://mywa.link/yt6atjlc" target="_blank" >+91 8099909923</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-email"></i>
              <h3>Email</h3>
              <p><a href="mailto:sriastro.y@gmail.com">sriastro.y@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter your name" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please Enter your message" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><input type="submit" name="submit" value="Send Message"></div>
            <?php
              if (isset ($_POST['submit']))
              {
                if(mail($to,$subject,$message,$headers))
                {
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Hurray!","Your response has been recorded, Relax and sit back we will contact you soon.","success");';
                  echo '}, 1000);</script>';
                }
                else{
                  echo '<script type="text/javascript">';
                  echo 'setTimeout(function () { swal("Oops","There is an error, We are working on the issue. Apologies for the Inconvenience caused","error");';
                  echo '}, 1000);</script>';
                }
              }
            ?>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Sri Astro Yoga Vidya Peetam</strong>. All Rights Reserved
      </div>
      <div class="credits">
        by <a href="https://festech.in">Festech</a> in association with <a href="https://bootstrapmade.com/">BootstrapMade Template</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
