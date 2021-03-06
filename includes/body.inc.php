<?php
include_once("includes/config.inc.php");
function top($menu){
?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ink Place</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="imagens/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Font Awesome -->
    <script src='https://kit.fontawesome.com/e8e2985ace.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@500&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!--<link href="assets/vendor/aos/aos.css" rel="stylesheet">-->

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: BizLand - v1.2.1
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Top Bar
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
  <div class="container d-flex">
    <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
      <i class="icofont-phone"></i> +1 5589 55488 55
    </div>
    <div class="social-links">
      <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
      <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
      <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      <a href="#" class="skype"><i class="icofont-skype"></i></a>
      <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
    </div>
  </div>
</div>
======= -->
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.php"><img src="imagens/inkplacelogo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li <?php if ($menu == HOME) echo "class=\"active\""; ?>><a href="index.php">IN??CIO</a></li>
                <li <?php if ($menu == SOBRE) echo "class=\"active\""; ?>><a href="sobreNos.php">SOBRE N??S</a></li>
                <li <?php if ($menu == ONDE) echo "class=\"active\""; ?>><a href="onde.php">ONDE NOS ENCONTRAMOS</a></li>
                <li ><a href="https://pt-pt.facebook.com/InkPlacePT/"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fas fa-user"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
<?php
}

function bot(){
?>
<!-- ======= Footer ======= -->
<footer id="footer" style="background-color: black">


    <div class="container py-4 " >
        <div class="copyright" style="text-align: center; width: 100%; font-weight: bold; font-size: 17px">
            <span style="color: #FFFFFF ;text-align: center" >&copy; InkPlace.</span><br>
            <span style="color: #FFFFFF;text-align: center" >Todos os Direitos Reservados.</span>
        </div>

    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

<?php
}
?>
