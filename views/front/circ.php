<?PHP
include "../../core/circuitC.php";
$circuit1C=new circuitC();

  $listecircuits=$circuit1C->affichercircuits();  

//var_dump($listecircuits->fetchAll());
?>




<!doctype html>
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

        <!-- TITLE -->
        <title>Povo - Travel Agency & Tourism HTML Template</title>
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
                        <a class="navbar-brand" href="index-2.html"><img src="logo.png" alt="logo"></a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a href="#" class="nav-link active">Home <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link active">Home One</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="index-two.html" class="nav-link">Home Two</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Tours <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="tours.html" class="nav-link">Tours</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-tours.html" class="nav-link">Single Tours</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">About</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="gallery.html" class="nav-link">Gallery</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Tours </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="tours.html" class="nav-link">Tours</a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="single-tours.html" class="nav-link">Single Tours</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">News</a>

                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="news.html" class="nav-link">News</a>
                                                </li>
        
                                                <li class="nav-item">
                                                    <a href="single-news.html" class="nav-link">Single News</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">Faq</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="signup.html" class="nav-link">Signup</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="loginn.php" class="nav-link">Login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="error-404.html" class="nav-link">404 Error</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Contact</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link">News <i class="fas fa-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="news.html" class="nav-link">News</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="single-news.html" class="nav-link">Single News</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="signup.html" class="nav-link">Sign Up</a>
                                    </li>

                                    <li class="nav-item">
                                        <select class="lang">
                                            <option>English</option>
                                            <option>Australia</option>
                                        </select>
                                    </li>
                                    
                                    <li class="nav">
                                        <a class="nav-link" href="#searchmodal" data-toggle="modal" data-target="#searchmodal">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </li>

                                    <li class="nav">
                                        <a class="nav-link" href="#" data-toggle="modal"        data-target="#myModal">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </li>
                                </ul> 
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Right Side Modal -->
        <div class="modal right fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="logo.png" alt="logo">
                            </a>
                        </div>

                        <p>Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                        <ul class="modal-contact-info">
                            <li>
                                <i class="fas fa-map-marker-alt"></i> <b>27 Division St</b>New York, NY 10002, USA
                            </li>

                            <li>
                                <i class="fas fa-phone"></i> <b>+0 (321) 984 754</b>Give us a call
                            </li>

                            <li>
                                <i class="fas fa-envelope"></i><b>upstart@gmail.com</b>24/7 online support
                            </li>
                        </ul>

                        <ul class="social-links">
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Right Side Modal -->

        <!-- Search Modal -->
        <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="search-form">
                            <input type="search" class="form-control" id="search" placeholder="Search...">
                            <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Modal -->

        <!-- Start Home Slides Area -->
		<div class="main-slides owl-carousel owl-theme">
			<div class="main-banner item-bg-one">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-8">
                                            <div class="main-banner-content">
                                                <h1>It’s A Travel Discover You Can See</h1>
                                                <p>A mystical adventure discover the new world!</p>

                                                <div class="banner-btn">
                                                    <a href="#" class="default-btn-one">Get Started</a>
                                                </div>
                                            </div>
                                        </div>    

                                        <div class="col-lg-4">
                                            <div class="banner-video">
                                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div> 
                                        </div>
                                    </div>
                                        
                                    <div class="main-form">
                                        <form>
                                            <div class="row m-0">
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-safari"></i>
                                                            <select class="form-control">
                                                                <option value="category">Where To?</option>
                                                                <option value="1">Australia</option>
                                                                <option value="2">Maldives</option>
                                                                <option value="3">Thailand</option>
                                                                <option value="4">Canada</option>
                                                                <option value="5">Japan</option>
                                                                <option value="6">Jordan</option>
                                                                <option value="7">Germany</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-calendar"></i>
                                                            <select class="form-control">
                                                                <option value="category">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-pin"></i>
                                                            <select class="form-control">
                                                                <option value="category">Travel Type</option>
                                                                <option value="1">Arts</option>
                                                                <option value="2">Beauty</option>
                                                                <option value="3">Health</option>
                                                                <option value="4">Hotels</option>
                                                                <option value="5">Real Estate</option>
                                                                <option value="6">Restaurant</option>
                                                                <option value="7">Shopping</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control" name="name" placeholder="Maximum Price">
                                                    </div>

                                                    <div class="banner-icon">
                                                        <a href="#"><i class="flaticon-magnifying-glass"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            
            <div class="main-banner item-bg-two">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-8">
                                            <div class="main-banner-content">
                                                <h1>It’s A Travel Discover You Can See</h1>
                                                <p>A mystical adventure discover the new world!</p>

                                                <div class="banner-btn">
                                                    <a href="#" class="default-btn-one">Get Started</a>
                                                </div>
                                            </div>
                                        </div>    

                                        <div class="col-lg-4">
                                            <div class="banner-video">
                                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div> 
                                        </div>
                                    </div>
                                        
									<div class="main-form">
                                        <form>
                                            <div class="row m-0">
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-safari"></i>
                                                            <select class="form-control">
                                                                <option value="category">Where To?</option>
                                                                <option value="1">Australia</option>
                                                                <option value="2">Maldives</option>
                                                                <option value="3">Thailand</option>
                                                                <option value="4">Canada</option>
                                                                <option value="5">Japan</option>
                                                                <option value="6">Jordan</option>
                                                                <option value="7">Germany</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-calendar"></i>
                                                            <select class="form-control">
                                                                <option value="category">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-pin"></i>
                                                            <select class="form-control">
                                                                <option value="category">Travel Type</option>
                                                                <option value="1">Arts</option>
                                                                <option value="2">Beauty</option>
                                                                <option value="3">Health</option>
                                                                <option value="4">Hotels</option>
                                                                <option value="5">Real Estate</option>
                                                                <option value="6">Restaurant</option>
                                                                <option value="7">Shopping</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control" name="name" placeholder="Maximum Price">
                                                    </div>

                                                    <div class="banner-icon">
                                                        <a href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

            <div class="main-banner item-bg-three">
				<div class="d-table">
					<div class="d-table-cell">
						<div class="container">
							<div class="row">
								<div class="col-lg-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-8">
                                            <div class="main-banner-content">
                                                <h1>It’s A Travel Discover You Can See</h1>
                                                <p>A mystical adventure discover the new world!</p>

                                                <div class="banner-btn">
                                                    <a href="#" class="default-btn-one">Get Started</a>
                                                </div>
                                            </div>
                                        </div>    
    
                                        <div class="col-lg-4">
                                            <div class="banner-video">
                                                <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                                    <i class="flaticon-play-button"></i>
                                                </a>
                                            </div> 
                                        </div>
                                    </div>
                                        
									<div class="main-form">
                                        <form>
                                            <div class="row m-0">
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-safari"></i>
                                                            <select class="form-control">
                                                                <option value="category">Where To?</option>
                                                                <option value="1">Australia</option>
                                                                <option value="2">Maldives</option>
                                                                <option value="3">Thailand</option>
                                                                <option value="4">Canada</option>
                                                                <option value="5">Japan</option>
                                                                <option value="6">Jordan</option>
                                                                <option value="7">Germany</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-calendar"></i>
                                                            <select class="form-control">
                                                                <option value="category">Month</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <div class="select-box">
                                                            <i class="flaticon-pin"></i>
                                                            <select class="form-control">
                                                                <option value="category">Travel Type</option>
                                                                <option value="1">Arts</option>
                                                                <option value="2">Beauty</option>
                                                                <option value="3">Health</option>
                                                                <option value="4">Hotels</option>
                                                                <option value="5">Real Estate</option>
                                                                <option value="6">Restaurant</option>
                                                                <option value="7">Shopping</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-md-3 p-0">
                                                    <div class="form-group mb-0">
                                                        <input type="text" class="form-control" name="name" placeholder="Maximum Price">
                                                    </div>

                                                    <div class="banner-icon">
                                                        <a href="#">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>  
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
		</div> 
        <!-- End Home Slides Area -->
       
        <!-- Start Support Section -->
        <section class="support-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="support-content">
                            <i class="flaticon-24-hours-support"></i>
                            <h3>Advice & Support</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor incididunt  labore et dolore. </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="support-content">
                            <i class="flaticon-invoice"></i>
                            <h3>Air Ticketing</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor incididunt  labore et dolore. </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="support-content">
                            <i class="flaticon-hotel"></i>
                            <h3>Hotel Accomodation</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor incididunt  labore et dolore. </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="support-content">
                            <i class="flaticon-itinerary"></i>
                            <h3>Tour Peckages</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor incididunt  labore et dolore. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Support Section -->

        <!-- Start Provide Section -->
        <section class="provide-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="provide-area">
                            <div class="provide-content">
                                <h2>We Provide Best Services</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. supendisse ultrices gravida. Risus commodo viverra maecenas . Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum supendisse ultr.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.supendisse ultrices gravida. Risus commodo viverra maecenas.<p></p>
                            </div>

                            <div class="provide-btn">
                                <a href="#" class="default-btn-one">Get Started</a>
                            </div>
                        </div>     
                    </div>

                    <div class="col-lg-6">
                        <div class="provide-features">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="provide-box">
                                        <i class="flaticon-alarm-clock"></i>
                                        <h3>London</h3>
                                        <p>135 Places</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="provide-box">
                                        <i class="flaticon-car-1"></i>
                                        <h3>Turkey</h3>
                                        <p>75 Places</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="provide-box">
                                        <i class="flaticon-airplane"></i>
                                        <h3>Turkey</h3>
                                        <p>135 Places</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="provide-box">
                                        <i class="flaticon-map"></i>
                                        <h3>Thailand</h3>
                                        <p>75 Places</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <!-- End Provide Section -->

        <!-- Start Offer Section -->
        <section class="offer-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="offer-area">
                            <div class="offer-content">
                                <h3>Best Tour Plans Offer</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo via maecenas accumsan lacus vel facilisis. </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo via maecenas accumsan lacus vel facilisis. </p>
                            </div>

                            <div class="offer-btn">
                                <a href="#" class="default-btn-one">Browse All Peckages</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 m-0">
                        <div class="offer-image">
                            <img src="assets/img/tours.png" alt="image">

                            <div class="offer-image-content">
                                <a href="#" class="image-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Section -->

        <!-- Start Popular Section -->
        <section class="popular-section">
            <div class="container">
                <div class="section-title">
                    <h2>Popular Destinations</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna commodo viverra maecenas accumsan. </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/1.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>Indoneshia</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $679</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/2.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>Bali</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $889</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/3.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>San Francisco</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $789</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/4.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>Paris</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $989</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/5.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>Madrid</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $679</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="popular-area">
                            <div class="popular-image">
                                <img src="assets/img/popular/6.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3>Turkey</h3>
                                <p>Lorem ipsum dolor sit amet. </p>
                                <span>From $889</span>

                                <div class="popular-icon">
                                    <a href="#">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Popular Section -->

        <!-- Start Restaurents Section -->
        <section class="restaurents-section">
            <div class="container">
                <div class="restaurents-title">
                    <h2>Top Restaurents</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna commodo viverra maecenas accumsan. </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/1.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Luxury Restaurent</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/2.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Excellent Experience</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/3.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Reliable Restaurants</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/4.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Restaurant Resources</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/5.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Restaurant Recs</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="restaurents-area">
                            <div class="restaurents-image">
                                <img src="assets/img/restaurents/6.png" alt="image">

                                <div class="read-more">
                                    <a href="#" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="restaurents-content">
                                <h3>Before The Bistro</h3>
                                <div class="star-list">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <a href="#">8 Rating</a>
                                </div>
                                <p>lorem ipsum Far far away, behind the word mountains, far from the countries</p>

                                <div class="restaurents-btn">
                                    <a href="#" class="restaurents-btn-one">Discover</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Restaurents Section -->

        <!-- Start Vaccation Section -->
        <section class="vaccation-section">
            <div class="container">
                <div class="section-title">
                    <h2>Vaccation Idea</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna commodo viverra maecenas accumsan. </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-vaccation-item">
                            <img src="assets/img/vaccation/1.png" alt="image">

                            <div class="vaccation-content">
                                <h3>Beacfront Scape</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-vaccation-item">
                            <img src="assets/img/vaccation/2.png" alt="image">

                            <div class="vaccation-content">
                                <h3>Oneday Holiday</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="single-vaccation-item">
                            <img src="assets/img/vaccation/3.png" alt="image">

                            <div class="vaccation-content">
                                <h3>City Breaks</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Vaccation Section -->

        <!-- Start Testimonial Section -->
        <section class="testimonial-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-image">
                            <img src="assets/img/testimonial.png" alt="image">
                            <img src="assets/img/bar.png" class="bar-image" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 p-0">
                        <div class="testimonial-slider owl-carousel owl-theme">
                            <div class="testimonial-area">
                                <div class="testimonial-item">
                                    <i class="flaticon-left-quote"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas. </p>
                                </div>
                                
                                <div class="testimonial-content">
                                    <h3>Adlof Meir</h3>
                                    <p>Cheif Executive</p>
                                </div>
                            </div> 

                            <div class="testimonial-area">
                                <div class="testimonial-item">
                                    <i class="flaticon-left-quote"></i>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas. </p>
                                </div>
                                
                                <div class="testimonial-content">
                                    <h3>Adlof Meir</h3>
                                    <p>Cheif Executive</p>
                                </div>
                            </div> 
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->

        <!-- Start Blog Section -->
        <section class="blog-section ptb-100">
            <div class="container">
                <div class="blog-title">
                    <h2>Latest Circuit Post</h2>
                    
                </div>

                <div class="row">
                  
                    <div class="blog-slider owl-carousel owl-theme">
                        <?PHP $i=0; foreach($listecircuits as $row2){ $i=$i+1;?>
                        <div class="col-lg-12 col-md-12">
                          <form action="singlecirc.php" method="post">
                                <button style="background-color:transparent;border:none;" type="submit" value="envoyer">
                            <div class="single-blog-post">
                                
                                <figure>
                                <a name="aa" value="<?PHP echo $row2['idCircuit']; ?>" >
                                        <img class="imgcircuit" src="../entities/img/<?PHP echo $row2['photo']; ?>">
                                    </a>
                                    <input type="text" name="idCircuit" value="<?PHP echo $row2['idCircuit']; ?>" hidden>
                                </figure>
                                
                                <div class="blog-post-content">
                                    <span><?PHP echo $row2['date']; ?></span>
                                    <h3><?PHP echo $row2['lieu']; ?></h3>
                                    <p><?PHP echo $row2['description']; ?></p>

                                    <div class="blog-btn">
                                        <a href="#" class="default-btn-one">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>

                        

                        

                        
                        

                        
                        <?php
                           if ($i==6) break; }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- Footer section -->
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-content">
                            <h2>About Crafted</h2>
                        </div>

                        <div class="footer-item">
                            <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <ul class="footer-links">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="menu-item">
                            <div class="footer-content">
                                <h2>Useful Links</h2>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="quick-menu">
                                        <li>
                                            <a href="#">Home</a>
                                        </li>

                                        <li>
                                            <a href="#">Services</a>
                                        </li>

                                        <li>
                                            <a href="#">Projects</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">Tours</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="quick-menu">
                                        <li>
                                            <a href="#">Team</a>
                                        </li>

                                        <li>
                                            <a href="#">Blog</a>
                                        </li>

                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                        
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>   
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-content">
                            <h2>Newsletter</h2>
                        </div>
                        
                        <div class="footer-info">
                            <p class="mb-15">Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt et.</p>

                            <div class="newsletter-content">
                                <input type="email" class="form-control" placeholder="Enter Email">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-content">
                            <h2>Instagram</h2>
                        </div>
                        <ul class="instagram-feed">
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/1.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/2.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/3.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/4.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/5.png" alt="image">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/instagram/6.png" alt="image">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer section -->

        <!-- End Footer Bottom section -->
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p> 2019, EnvyTheme. All Rights Reserved by Povo</p>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom section -->

        <!-- Button Section -->
        <div class="go-top">
            <i class="fas fa-arrow-up"></i>
        </div>
        <!-- End Button Section -->

        <!-- jQuery Min JS -->
        <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
        <!-- Popper Min JS -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap Min JS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Mean Menu Min JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Magnific Min JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Mixitup Min JS -->
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <!-- Owl Carousel Min JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Nice Select Min JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Upstart Map JS -->
        <script src="assets/js/upstart-map.js"></script>
        <!-- Active JS -->
        <script src="assets/js/active.js"></script>
    </body>

<!-- Mirrored from templates.envytheme.com/povo/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:14:11 GMT -->
</html>