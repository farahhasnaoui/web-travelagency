<?PHP
include "header.php";
include "../../core/VoyageC.php";
include "../../entities/Voyage.php";
include "../../entities/comment.php";
include "../../core/commentC.php";
$voyage1C=new voyageC();
if (isset($_POST['search2'])) 
{
    if ($_POST['search1'] == "")
    {
        $listevoyages=$voyage1C->affichervoyagEs();
    }
    else 
    {
        $listevoyages=$voyage1C->rechercherListevoyages($_POST['search1']);
    }
}

else 
if (isset($_POST['croissant'])) 
{  
        $listevoyages=$voyage1C->affichervoyagescroissant();
    
     
    
}

else 
if (isset($_POST['decroissant'])) 
{  
        $listevoyages=$voyage1C->affichervoyagesdecroissant();
    
     
    
}
else 
if (isset($_POST['ok']))  
{   

{
     $listevoyages=$voyage1C->recherchervoyagedate($_POST['search_date']);
}

       
    
     
    
}



else
  $listevoyages=$voyage1C->affichervoyages();  
$comment1C=new CommentC();
$listeComments=$comment1C->afficherComments();
 /*$prix_min=$voyage1C->rechercherprixmin();
 $prix_max=$voyage1C->rechercherprixmax();
 foreach($prix_min as $row){
       
         echo "min".$row['min']; 
           
               
            
       
        }

        foreach($prix_max as $row){
       
         echo "max".$row['max']; 
           
               
            
       
        }*/


//var_dump($listevoyages->fetchAll());
?>



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

    <!-- Page banner -->
    <section class="page-banner">
        <div class="container">
            <div class="page-banner-content">
                <h2>Voyages</h2>
                <p><a href="index-2.html">Home</a> / Voyages</p>
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
                        <?PHP foreach($listevoyages as $row){?>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            
        
                                
                                    <ul class="tours-list">
                                         
                                        

                                             
                        <div class="popular-area">
                            <div class="popular-image">
                                 

                                <a href="voyagedetails3.php?idVo=<?PHP echo $row['idVo']; ?>">
                                <img src="../../entities/img/<?PHP echo $row['image']; ?>" alt="image">

                                <div class="read-more">
                                    <a href="voyagedetails3.php?idVo=<?PHP echo $row['idVo']; ?>" class="default-btn-one">Read More</a>
                                </div>
                            </div>

                            <div class="popular-content">
                                <h3><?PHP echo $row['lieu_retour']; ?></h3>
                                <p><?PHP 
                                echo substr( $row['description'],0,70);
                                 if (strlen($row['description'])> 70) echo "... " ?> </p>
                                <span>From <?PHP echo $row['prix']; ?>dinars</span>

                                <div class="popular-icon">
                                    <a href="voyagedetails3.php?idVo=<?PHP echo $row['idVo']; ?>">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                        
                            

                           



                       
                    


                                        <br>
                                        
                                    


                              
                            
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
                                <input type="text" class="form-control" placeholder="Search Voyage" name="search1">
                                <button type="submit" name="search2">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>

                        
 
                            <div class="tours-price">
                                <h3 style="text-align:center;">Filter By Price</h3>
                                <p style="text-align:center;">Price:  <?PHP
                                $prix_min=$voyage1C->rechercherprixmin();
                          foreach($prix_min as $row){
                                  ?>
                               <tr>
                       <td><?PHP echo $row['min']; ?></td>
           
               
            
                    </tr>
                  <?PHP 
    } 
    ?>
                                -$<?PHP
                                $prix_max=$voyage1C->rechercherprixmax();
                          foreach($prix_max as $row){
                                  ?>
                               <tr>
                       <td><?PHP echo $row['max']; ?></td>
           
               
            
                    </tr>
                  <?PHP
    } 
    ?></p>

                                <ul class="price-list">
                                     <form method="post"> 
                                    <div class="form-check">
                                         <button type="submit" name="decroissant" class="form-control"  >
                                   Prix :$$-$
                                </button>  
                                
                                    <button type="submit" name="croissant" class="form-control" >
                                  Prix :$-$$
                                </button>  
                                        
                                    </div>
                                </form>
                                  
                                    
                                </ul>
                                
                                 

                                   
                                
                                

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container">
        <div class="post-comments">


                            <h3>  <?PHP
                            $nc=$comment1C->countcomments();
    foreach($nc as $row){
        ?> 
        <tr>
            <td><?PHP echo $row['nc']; ?></td>
        
        </tr>
        <?PHP
    }
    ?>
                            Comments</h3>

                            <?PHP
    foreach($listeComments as $row){
        ?>
                            <div class="single-comment">
                                <div class="comment-img">
                                   
                                     <img src="../../entities/img/<?PHP echo $row['image']; ?>" alt="image"> 
                                </div>
                                <div class="comment-content">
                                    <?PHP  $row['comment_id']; ?>
                                    <h4><?PHP echo $row['sender_name']; ?></h4>
                                    <p><?PHP echo $row['comment']; ?></p>
                                    <span><?PHP echo $row['datec']; ?></span>
                                    <p> <a href="supprimerComment.php?comment_id=<?PHP echo $row['comment_id']; ?>">
                  supprimer</a>  </p>
                                    
                                </div>
                            </div>
                            
                            
                            
                            
                            <?PHP
    } 
    ?>
                            
                        </div> 
     
        <div class="leave-a-reply">
             <form method="POST" action="ajoutComment.php">
                            <h3>Leave a Comment</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name" name="sender_name">
                                    </div>
                                </div>
                                

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Comment" name="comment"></textarea>
                                    </div>
                                </div>
                                
                                      
                                  
                                

                                
                                <div class="col-lg-12 col-md-12">
                                    <p class="comment-form-cookies-consent">
                                        
                                        
                                    </p> 

                                    <div class="send-btn"> 
                                        
                                         
                                          
                                        <input class="send-btn-one" type="submit" name="ajouter" value="ajouter"  >
                                    </div>
                                </div>
                            </div>
                          </form>
                        </div>
                       
                    </div>






    <!-- End Tours Section -->

    <!-- Footer section -->
  <?php include"footer.php"; ?>