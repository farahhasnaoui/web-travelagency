<?php include"headerSignUp.php";?>

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

        <!-- Page banner -->
        <section class="page-banner">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Login</h2>
                    <p><a href="index-2.html">Home</a> / Login</p>
                </div>
            </div>
        </section>
        <!-- End Page banner -->

        <!-- Start Signin Area -->
        <div class="login-section ptb-100">
            <div class="container">
                <div class="login-form">
                    <div class="login-title">
                        <h3>Welcome Back!</h3>
                        <p>Please login to your account.</p>
                    </div>
                        
                    <form method="POST" action="login.php">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="userName" class="form-control"  required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="password" name="mdp" class="form-control" placeholder="Password" required>
                                    <h4><a href="forgot-password.php">Forgot password</a></h4>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Keep me Login</label>
                                </div>
                            </div>



                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <input type="submit" href="#" class="default-btn-one">Login Now</input>
                                </div>
                                <br>
                                <span>Don't have account? <a href="signup.html">Signup!</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Signin Area -->

<?php include"footer.php";?>