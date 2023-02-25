<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['cin']) && isset($_SESSION['userName']))
{

    $cin=$_SESSION['cin'];
    $userName=$_SESSION['userName'];


}





//définir la session une session est un tableau temporaire

//
?>

<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/povo/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:13:24 GMT -->
<head>
    <!-- REQUIRED META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Fontawesome Min CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Owl Theme Default Min CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet" href="assets/css/APP.css">
    <!-- TITLE -->
    <title>Planéte tours</title>
</head>

<body>

<!-- Start Loader -->
<div class="preloader">
    <div class="spinner"></div>
</div>
<!-- End Loader -->

<!-- Start Navbar Area -->
<div class="navbar-area  header-sticky">
    <div class="povo-mobile-nav">
        <div class="logo">
            <a href="index-2.html">
                <img src="logo.png" alt="logo">
            </a>
        </div>
    </div>

    <div class="povo-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <img src="logo.png" width="100" height="50">
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">


                        <li class="nav-item">
                            <a href="index2.php" class="nav-link">Home</a>
                        </li>
                        
                    </ul>

                    <div class="others-options">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                           
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->