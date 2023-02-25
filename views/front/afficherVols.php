

<?php include"header.php"; ?>
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
            <h2>Billeterie</h2>
            <p><a href="index-2.html">Home</a> / Les vols</p>
        </div>
    </div>
</section>
<!-- End Page banner -->







<!-- Start FAQ Section -->

<!-- End FAQ Section -->

<section class="faq-section ptb-100">
    <?php


    include "../../entities/Vol.php";
    require '../../core/VolC.php';


    $vol=new VolC();
    $liste1=$vol->affichVol();
    foreach ($liste1 as $emp) {
$i++;
    ?>
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12">





                <div class="flight-list-box rt-mb-30">
                    <div class="top-content d-flex flex-lg-row flex-column align-items-lg-center justify-content-left  justify-content-lg-between">
                        <div class="flight-logo">
                            <img src="assets/img/flt-logo-1.png" alt="flt logo" draggable="false">
                        </div><!-- /.flight-logo -->
                        <div class="pricing">
                            <h5><?php echo $emp['airline']; ?></h5>
                            <p>TR978 | <?php echo $emp['airline']; ?> A320-212 <br> <?php echo $emp['date_d']; ?></p>
                        </div><!-- /.pricing -->
                        <div class="flight-time d-flex justify-content-between align-items-lg-center">
                            <div class="left">
                                <span class="d-block"><?php echo $emp['heure_d']; ?>:00</span>
                                <span class="d-block"><?php echo $emp['lieu_d']; ?></span>
                            </div><!-- /.left -->
                            <div class="middle">
                                <img src="assets/img/time-shape-line.png" alt="time shape" draggable="false">
                            </div><!-- /.middle -->
                            <div class="right">
                                <span class="d-block"><?php echo $emp['heure_r']; ?>:00</span>
                                <span class="d-block"><?php echo $emp['lieu_a']; ?></span>
                            </div><!-- /.rght -->
                        </div><!-- /.flight-time -->
                        <div class="flight-detils">
                            <span class="d-block"><i class="icofont-clock-time"></i><!-- /.time -->4h5m</span>
                            <span class="d-block"><a href="#collapseExample" class="flt-d-clic collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">Flight details <i class="icofont-simple-down"></i></a></span>
                        </div><!-- /.flight-detils -->
                        <div class="trip">
                            <span class="d-blok"><?php echo $emp['prixVol']; ?> DNT</span>
                            <span class="d-block">Roundtrip</span>
                        </div><!-- /.trip -->
                        <div class="book-now">
                            <a href="payment/indexPayement.php" class="rt-btn  pill rt-gradient text-uppercase">Book</a>
                        </div><!-- /.book-now -->
                    </div><!-- /.top-content -->
                    <div class="bottom-content collapse" id="collapseExample" style="">
                        <p><span>Scoot - TR979 | Airbus A320 | Economy</span> <span><i class="icofont-clock-time"></i>4h5m</span></p>
                        <ul class="flight-timeline">

                            <li>
                                <span>Nov 12 10:55</span>

                            </li>
                            <li><span>HKG - Hong Kong Hong Kong International Airport T2</span></li>
                            <li>
                                <span>Nov 12 15:00</span>

                            </li>
                            <li><span>SIN - Singapore Changi Airport T2</span></li>

                        </ul>

                    </div><!-- /.bottom content -->
                </div>



            </div>
        </div>

    </div>
        <?php
    }
    ?>
</section>















<!-- Footer section -->
<?php include"footer.php"; ?>