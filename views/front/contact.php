<?php include"header.php"; ?>

    <!-- Page banner -->
    <section class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <h2>Contact Us</h2>
                <p><a href="index.php">Home</a> / Contact Us</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Contact Area -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-title">
                <h2>Get In Touch</h2>
                <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form class="contactForm" method="post" action="formReclamation.php">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text"  class="form-control" name="date_a" placeholder="Your Name">
                                </div>
                            </div>





                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="titre" placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <textarea name="editor1" class="form-control" placeholder="message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p class="comment-form-cookies-consent">
                                    <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                    <label for="wp-comment-cookies-consent">I agree that my submitted data is being collected and stored.</label>
                                </p>

                                <input class="form-control" type="submit" name="ajouter" value="ajouter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->











<?php include"footer.php"; ?>