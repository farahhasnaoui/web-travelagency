<?php include"headerSignUp.php"?>
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

                <p>UpStart have much planned for the future, working with great clients and continued software development. If you'd like to join our team, then we'd also love to hear from you.</p>
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

<!-- Page banner -->
<section class="page-banner">
    <div class="container">
        <div class="page-banner-content">
            <h2>Sign In</h2>
            <p><a href="index-2.html">Home</a> / Signin</p>
        </div>
    </div>
</section>
<!-- End Page banner -->

<!-- Start Signin Area -->
<div class="signin-section ptb-100">
    <div class="container">
        <div class="signup-form">
            <h3>Create your Account</h3>
            <form name="f" method="POST" action="ajouterUser.php"  class="contactForm" >
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="cin" placeholder="cin" id="cin">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nom" placeholder="nom" id="nom">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="prenom" placeholder="prénom" id="prenom">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="numTel" placeholder="numTel" id="numTel">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="userName" placeholder="userName" id="userName">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="password" class="form-control" name="mdp" placeholder="mot de passe" id="mdp">
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="save" onclick="return verif();">Save</button>
                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p class="comment-form-cookies-consent">
                            <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                            <label for="wp-comment-cookies-consent">I agree that my submitted data is being collected and stored.</label>
                        </p>


                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Signin Area -->

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
<!-- Magnific Min JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Mean Menu Min JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Nice Select Min JS -->
<script src="assets/js/jquery.nice-select.min.js"></script>
<!-- Owl Carousel Min JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Mixitup Min JS -->
<script src="assets/js/jquery.mixitup.min.js"></script>
<!-- Upstart Map JS -->
<script src="assets/js/upstart-map.js"></script>
<!-- Active JS -->
<script src="assets/js/active.js"></script>
<!-- App JS-->
<script src="app.js"></script>
</body>

</html>