<?PHP
include "header.php";

include "../../entities/comment.php";
include "../../core/commentC.php";

$comment1C=new CommentC();
$listeComments=$comment1C->afficherComments();

?>



    <!-- End Navbar Area -->



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