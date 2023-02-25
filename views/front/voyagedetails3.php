<?PHP



include "../../core/VoyageC.php";
include "../../entities/Voyage.php";
include "../../entities/comment.php";
include "../../core/commentC.php";


if (isset($_GET['idVo'])){
    $voyageC =new VoyageC();

    $voyageC->updateVoyageViews($_GET['idVo']);

    $result=$voyageC->recupererVoyage($_GET['idVo']);


    foreach($result as $emp){

        $idVo= $emp['idVo'];
        $airline= $emp['airline'];
        $lieu_aller= $emp['lieu_aller'];
        $lieu_retour= $emp['lieu_retour'];
        $description= $emp['description'];
        $nom_hotel=$emp['nom_hotel'];
        $prix= $emp['prix'];
        $date_aller= $emp['date_aller'];
        $date_retour=$emp['date_retour'];
        $image=$emp['image'];
        $views=$emp['views'];
        $voy_places=$emp['voy_places'];
    }
    $listesimages= $voyageC->afficherVoyages();



    $comment1C=new CommentC();
    $listeComments=$comment1C->afficherCommentsvoy($_GET['idVo']);
    $lastid=$comment1C->afficherlastcommentid();
    /*oreach($lastid as $row){

             echo $row['comment_id'];




            }

            $ncv=$comment1C->countcommentsvoyage($_GET['idVo']);
            foreach($ncv as $row){

             echo "nc".$row['nc'];




            }*/



    /*session_start();
    $views = $_SESSION['views'];

    unset($_SESSION['views']);
    session_destroy();*/

    /*session_start();

    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+1;
    else
        $_SESSION['views']=1;

    echo"views = ".$_SESSION['views']; */







}



include "header.php";
?>






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
            <h2>Tours</h2>
            <p><a href="index-2.html">Home</a> / Tours</p>
        </div>
    </div>
</section>
<!-- End Page banner -->

<!-- Start Single Tours Section -->
<section class="single-tours-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-tours-item">
                            <div class="single-tours-image">
                                <img src="../../entities/img/<?PHP echo $emp['image']; ?>" alt="image">
                            </div>

                            <div class="single-tours">
                                <ul class="tours-list">
                                    <li>
                                        <i class="fa fa-calendar-alt"></i>
                                        1
                                    </li>

                                    <li>
                                        <i class="fa fa-user"></i>
                                        <?PHP echo $emp['voy_places']; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-eye"></i>
                                        <?PHP echo $emp['views']; ?>

                                    </li>
                                </ul>
                            </div>

                            <ul class="single-tours-content">
                                <li>
                                    Destination
                                    <span><?PHP echo $emp['lieu_retour']; ?></span>
                                </li>

                                <li>
                                    Date Aller
                                    <span><?PHP echo $emp['date_aller']; ?></span>
                                </li>

                                <li>
                                    Date Retour
                                    <span><?PHP echo $emp['date_retour']; ?></span>
                                </li>

                                <li>
                                    Nom d'hotel
                                    <span><?PHP echo $emp['nom_hotel']; ?></span>


                                </li>


                            </ul>
                            <div class="tours-btn">
                                <a href="payment/indexPayement.php" class="tours-btn-one" style="width:150px;">Reserver maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="single-details">
                            <h2> <?PHP echo $emp['lieu_retour']; ?></h2>
                            <ul class="details-list">
                                <li> <?PHP echo $emp['prix']; ?> TTC</li>

                                <section class='rating-widget'>
                                    <div class='rating-stars text-center'>
                                        <ul id='stars'>
                                            <li class='star' title='Poor' data-value='1'  >
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Fair' data-value='2'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Good' data-value='3'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='Excellent' data-value='4'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                            <li class='star' title='WOW!!!' data-value='5'>
                                                <i class='fa fa-star fa-fw'></i>
                                            </li>
                                        </ul>
                                    </div>


                                </section>









                                <li>1 Review</li>
                            </ul>
                            <p><?PHP echo $emp['description']; ?> </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Single Tours Section -->

<!-- Start Form Gallery Section -->
<!--

<section class="form-gallery-section">
   <div class="container">
       <div class="form-gallery-content">
           <h3>Form Gallery</h3>
       </div>

       <div class="row">
           <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="form-gallery-image">
                   <img src="assets/img/tours/1.png" alt="image">
               </div>
           </div>

           <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="form-gallery-image">
                   <img src="assets/img/tours/2.png" alt="image">
               </div>
           </div>

           <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
               <div class="form-gallery-image">
                   <img src="assets/img/tours/3.png" alt="image">
               </div>
           </div>
       </div>
   </div>





</section>  -->


<section class="gallery-section">
    <div class="container">
        <div class="section-title">
            <h2>Gallery</h2>
            <p>Some beautiful pictures from this trip .</p>
        </div>

        <div id="Container" class="row">


            <div class="col-lg-4 col-sm-6 mix destination tour">
                <div class="single-work">
                    <div class="work-image">

                        <img src="../../entities/img/<?PHP echo $emp['image']; ?>" alt="gallery">
                        <a href="../../entities/img/<?PHP echo $emp['image']; ?>" class="popup-btn">View</a>
                    </div>
                </div>
            </div>






            <div class="col-lg-4 col-sm-6 mix tour">
                <div class="single-work">
                    <div class="work-image">
                        <img src="assets/img/gallery/9.jpg" alt="gallery">
                        <a href="assets/img/gallery/9.jpg" class="popup-btn">View</a>
                    </div>
                </div>
            </div>
        </div>
        <!--

                      <div class="gallery-btn">
                          <a href="#" class="gallery-btn-one">View More</a>
                      </div> -->
    </div>
</section>

</div>
<!-- End Form Gallery Section -->

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
                                    </l

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
<script type="text/javascript">
    $(document).ready(function(){

        /* 1. Visualizing things on Hover - See next part for action on click */
        $('#stars li').on('mouseover', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

            // Now highlight all the stars that's not after the current hovered star
            $(this).parent().children('li.star').each(function(e){
                if (e < onStar) {
                    $(this).addClass('hover');
                }
                else {
                    $(this).removeClass('hover');
                }
            });

        }).on('mouseout', function(){
            $(this).parent().children('li.star').each(function(e){
                $(this).removeClass('hover');
            });
        });


        /* 2. Action to perform on click */
        $('#stars li').on('click', function(){
            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');

            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
            var msg = "";
            if (ratingValue > 1) {
                msg = "Thanks! You rated this " + ratingValue + " stars.";
            }
            else {
                msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
            }
            responseMessage(msg);

        });


    });


    function responseMessage(msg) {
        $('.success-box').fadeIn(200);
        $('.success-box div.text-message').html("<span>" + msg + "</span>");
    }


</script>

</body>

<!-- Mirrored from templates.envytheme.com/povo/single-tours.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Nov 2019 22:16:07 GMT -->
</html>