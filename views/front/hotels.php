<?PHP
include "../../core/hotelC.php";
$hotel1C=new hotelC();
if (isset($_POST['search2'])) 
{
    if ($_POST['search1'] == "")
    {
        $listehotels=$hotel1C->afficherhotels();
    }
    else 
    {
        $listehotels=$hotel1C->rechercherListehotels($_POST['search1']);
    }
}
else
  $listehotels=$hotel1C->afficherhotels();  

//var_dump($listehotels->fetchAll());
?>


<?php include"header.php";?>

    <!-- Right Side Modal -->
    <div class="modal right fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="logo">
                        <a href="hotels.php">
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
                <h2>Hotels</h2>
                <p><a href="hotels.php">Home</a> / Hotels</p>
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
                        <?PHP foreach($listehotels as $row){?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <form action="single-hotels.php" method="post">
                                <button style="background-color:transparent;border:none;width:100%;" type="submit" value="envoyer">
                            <div class="tours-item">
                                
                                <div class="tours-image">
                                    
                                        <a name="aa" value="<?PHP echo $row['idH']; ?>">
                                        <img class="imghotel" src="../assets/img/<?PHP echo $row['photo']; ?>">
                                        </a>
                                        
                                    
                                    <input type="text" name="idH" value="<?PHP echo $row['idH']; ?>" hidden>
                                </div>
                                

                                <div class="tours-content" style="word-wrap: break-word;">
                                    <ul class="tours-list">
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <?PHP echo $row['nbEtoils']; ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-user">
                                                <?PHP echo $row['note']; ?>/10
                                            </i>
                                        </li>
                                    </ul>

                                    <h3>
                                        <a value="<?PHP echo $row['idH']; ?> ">
                                            <?PHP echo $row['nomHotel']; ?></a>
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
                                <input type="text" class="form-control" placeholder="Search Hotel" name="search1">
                                <button type="submit" name="search2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Tours Section -->

    <!-- Footer section -->
<?php include "footer.php";?>
