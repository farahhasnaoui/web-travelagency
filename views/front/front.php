<?PHP
include "../../core/circuitC.php";
$circuit1C=new circuitC();
if (isset($_POST['search2'])) 
{
    if ($_POST['search1'] == "")
    {
        $listecircuits=$circuit1C->affichercircuits();
    }
    else 
    {
        $listecircuits=$circuit1C->rechercherListecircuit($_POST['search1']);
    }
}
else
  $listecircuits=$circuit1C->affichercircuits();  

//var_dump($listecircuits->fetchAll());
?>

<?php include "header.php"?>

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
                <h2>circuits</h2>
                <p><a href="index-2.html">Home</a> / circuits</p>
            </div>
        </div>
    </section>
    <!-- End Page banner -->

    <!-- Start Tours Section -->
    <section class="tours-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <?PHP foreach($listecircuits as $row){?>
                            
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <form action="singlecirc.php" method="post">
                                <button style="background-color:transparent;border:none;" type="submit" value="envoyer">
                            <div class="tours-item">
                            
                                <div class="tours-image">
                                    <a name="aa" value="<?PHP echo $row['idCircuit']; ?>" >
                                        <img class="imgcircuit" src="../entities/img/<?PHP echo $row['photo']; ?>">
                                    </a>
                                    <input type="text" name="idCircuit" value="<?PHP echo $row['idCircuit']; ?>" hidden>
                                </div>

                                

                                <div class="tours-content">
                                    
                                    <ul class="tours-list">
                                        <li>
                                            <i class="fas fa-map-marker"></i>
                                           Lieu: <?PHP echo $row['lieu']; ?>
                                        </li>
                                        <br>
                                        <li>
                                            <i class="fa fa-map-marker">
                                           Lieu depart: <?PHP echo $row['lieu_d']; ?>
                                            </i>
                                        </li>
                                        <li>
                                            <i class="fa fa-map-marker">
                                             Lieu arrivee:   <?PHP echo $row['lieu_a']; ?>
                                            </i>
                                        </li>
                                        <br>
                                        <li>
                                            <i class="fa fa-calendar-alt">
                                                <?PHP echo $row['date']; ?>
                                            </i>
                                        </li>
                                        <li>
                                                <i class="fa fa-user"></i>
                                                <?PHP echo $row['nb_place']; ?>
                                            </li>
                                    </ul>
                                    <br>

                                    <h3>

                                        <a value="<?PHP echo $row['idCircuit']; ?> ">
                                          Nom Circuit:  <?PHP echo $row['nom_circuit']; ?></a>
                                    </h3>
                                    
                                       <h3>Description:</h3> <p><?PHP echo $row['description']; ?></p>
                                     
                                    <h3>
                                        <a value="<?PHP echo $row['idCircuit']; ?> ">
                                          Prix:  <?PHP echo $row['prix']; ?></a>DT
                                    </h3>
                                    
                                    
                                    
                                    
                                   


                                </div>
                                
                            </div>
                            </button>
                        </form>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="tours-sidebar">
                        <div class="sidebar-content">
                            <h2>Plan Your Trip</h2>
                            <p>It’s time to plan just the perfect vacation!</p>
                        </div>

                        <div class="tours-form">
                            <form name="f1" method="post">
                                <input type="text" class="form-control" placeholder="Search circuit" name="search1">
                                <button type="submit" name="search2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>

                        </div>
                        <ul class="tours-where">
                                <li>
                                    <i class="flaticon-safari"></i>
                                    Where To
                                </li>

                                <li class="text-left">
                                    <i class="flaticon-calendar"></i>
                                    Month
                                </li>
                            </ul>

                            <div class="tours-price">
                                <h3>Filter By Price</h3>
                                

                                <ul class="price-list">
                                <form name="form1" method="post" action="tridecroissant.php">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="tridecroissant.php" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            from high to low
                                        </label>
                                        <input type="submit" value="Envoyer">
                                    </div>
                                 </form>
                                 <form name="form1" method="post" action="tricroissant.php">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="tridecroissant.php">
                                        <label class="form-check-label" for="exampleRadios2">
                                            from low to high 
                                        </label>
                                        <input type="submit" value="Envoyer">
                                    </div>
                                </form>    

                              
                                </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tours Section -->

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
</body>

<!-- Mirrored from templates.envytheme.com/povo/tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:06 GMT -->

</html>
