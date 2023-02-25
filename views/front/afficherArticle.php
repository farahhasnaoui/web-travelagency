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
                    <h2>News Details</h2>
                    <p><a href="index-2.html">Home</a> / News</p>
                </div>
            </div>
        </section>
        <!-- End Page banner -->

        <!-- Start Single News Section -->
        <section class="single-news-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="news-details">
                            <div class="article-img">
                                <img src="assets/img/news-details.png" alt="blog-details">
                            </div>
                            <form action="tri.php" method="POST">
                                <input class="btn btn-info" type="submit" name="ASC" value="voir les articles les plus Recent">
                            </form>
                            <?php
                        include "../../entities/article.php";
                        require '../../core/articleC.php';




                        $article=new articleC();
                        $liste1=$article->affiche_a();
                        foreach ($liste1 as $emp) {

                        ?>
                            <div class="article-content">
                                <ul class="blog-list">
                                    <p><?php echo $emp["titre"]; ?> </p>

                                    <img class="" width="800" height="800" src="../../entities/image/<?php echo $emp['image']; ?>"></td>
                                    <i class="flaticon-left-quote"></i><p><?php echo $emp["editor1"]; ?><p>
                                    <li>
                                        <i class="fa fa-comments"></i>Comments
                                    </li>
                                    <li>
                                        <i class="fa fa-calendar-week"><?php echo $emp["date_a"]; ?></i>
                                    </li>
                                </ul>

                                
                                

                                   
                            </div>
                            <?php
                        } ?>
                        </div>
                        
                        <div class="post-controls-buttons">
                            <div class="controls-left">
                                <a href="#"><i class="fas fa-angle-double-left"></i> Prev Post</a>
                            </div>

                            <div class="controls-right">
                                <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        
                        <div class="post-comments">
                            <h3>Comments</h3>
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/1.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Smith</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment left-m">
                                <div class="comment-img">
                                    <img src="assets/img/client/2.png" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Doe John</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/3.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>Steven Doe</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                            
                            <div class="single-comment">
                                <div class="comment-img">
                                    <img src="assets/img/client/4.jpg" alt="client">
                                </div>
                                <div class="comment-content">
                                    <h4>John Cina</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et minus, saepe porro a voluptatem, quidem aut libero consequatur unde molestiae quae impedit accusantium dolor est corporis! Dolores ut dignissimos doloribus?</p>
                                    <span>Jan 19, 2018 - 9:10AM</span>
                                    <a href="#"><i class="fas fa-reply"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="leave-a-reply">
                            <h3>Leave a Reply</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-Mail">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Website">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" cols="30" rows="5" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12 col-md-12">
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time.</label>
                                    </p>

                                    <div class="send-btn">
                                        <a href="#" class="send-btn-one">Submit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar mt-0">
                            <div class="widget widget-search">
								<form>
									<input type="text" class="form-control" placeholder="Search">
									<button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
								</form>
							</div>

                            <div class="widget widget-recent-entries">
								<h3 class="widget-title">
									<span>Recent Posts</span>
								</h3>

								<ul>
									<li>
										<a href="#">
											<img src="assets/img/blog/1.jpg" alt="image">
										</a>

										<h5><a href="#">The Most Popular New top Business Apps</a></h5>
										<p class="date">JUNE 18, 2019</p>
									</li>

									<li>
										<a href="#">
											<img src="assets/img/blog/2.jpg" alt="image">
										</a>

										<h5><a href="#">Welcome to EventNext, where thoughts matter.</a></h5>
										<p class="date">JUNE 18, 2019</p>
									</li>

									<li>
										<a href="#">
											<img src="assets/img/blog/3.jpg" alt="image">
										</a>

										<h5><a href="#">What events in your life made you happy?</a></h5>
										<p class="date">JUNE 18, 2019</p>
									</li>

									<li>
										<a href="#">
											<img src="assets/img/blog/4.jpg" alt="image">
										</a>

										<h5><a href="#">Best Event Management Companies</a></h5>
										<p class="date">JUNE 18, 2019</p>
									</li>
								</ul>
							</div>

							<div class="widget widget-categories">
								<h3 class="widget-title">
									<span>Categories</span>
								</h3>

								<ul>
									<li><a href="#">Agency</a></li>
									<li><a href="#">Corporate</a></li>
									<li><a href="#">Event</a></li>
									<li><a href="#">Happy</a></li>
									<li><a href="#">IT</a></li>
                                    <li><a href="#">Management</a></li>
                                    <li><a href="#">Planning</a></li>
                                    <li><a href="#">Technology</a></li>
								</ul>
							</div>

                            <div class="widget widget-instagram-feed">
                                <ul class="instagram-feed">
                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/1.jpg" alt="image">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/2.jpg" alt="image">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/3.jpg" alt="image">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/4.jpg" alt="image">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/5.jpg" alt="image">
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <img src="assets/img/blog/6.jpg" alt="image">
                                        </a>
                                    </li>
                                </ul>
                            </div>

							<div class="widget widget-tag-cloud">
								<h3 class="widget-title">
									<span>Tags</span>
								</h3>

								<div class="tagcloud">
									<a href="#">Agency</a>
									<a href="#">Corporate</a>
									<a href="#">Event</a>
									<a href="#">Happy</a>
									<a href="#">IT</a>
                                    <a href="#">Management</a>
                                    <a href="#">Planning</a>
                                    <a href="#">Technology</a>
								</div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Single News Section -->

        <!-- Footer section -->
<?php include"footer.php";?>