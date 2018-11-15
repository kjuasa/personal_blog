<!--================Home Banner Area =================-->
<section class="home_banner_area">
        	<div class="container">
            
				<div class="row">
					<div class="col-lg-5"></div>
					<div class="col-lg-7">
						<div class="blog_text_slider owl-carousel">
							<div class="item">
								<div class="blog_text">
                                <?php if($this->session->flashdata('user_login_success')) :?>
                                    <?php echo '<p class="alert alert-success">'. $this->session->flashdata('user_login_success').'</p>'; ?>
                                <?php endif; ?>
                                <?php if($this->session->flashdata('user_registered')) :?>
                                    <?php echo '<p class="alert alert-success">'. $this->session->flashdata('user_registered').'</p>'; ?>
                                <?php endif; ?>
                                <?php if($this->session->flashdata('post_created')) :?>
                                    <?php echo '<p class="alert alert-success">'. $this->session->flashdata('post_created').'</p>'; ?>
                                <?php endif; ?>
                                <?php if($this->session->flashdata('post_updated')) :?>
                                    <?php echo '<p class="alert alert-success">'. $this->session->flashdata('post_updated').'</p>'; ?>
                                <?php endif; ?>
                                
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
							<div class="item">
								<div class="blog_text">
									<div class="cat">
										<a class="cat_btn" href="#">Gadgets</a>
										<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> March 14, 2018</a>
										<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
									</div>
									<a href="#"><h4>Nest Protect: 2nd Gen Smoke + CO Alarm</h4></a>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<a class="blog_btn" href="#">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Blog Area =================-->
        <section class="blog_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog_left_sidebar">
						<?php foreach($posts as $post): ?>
                            <article class="blog_style1">
                            	<div class="blog_img">
                            		<img class="img-fluid" style="width:900px;height:340px;" src="<?php echo site_url(); ?>assets/img/posts/<?php echo $post['post_image']; ?>" alt="">
                            	</div>
                            	<div class="blog_text">
									<div class="blog_text_inner">
										<div class="cat">
											<a class="cat_btn" href="#">Gadgets</a>
											<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $post['created_at']; ?></a>
											<a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 05</a>
										</div>
										<a href="#"><h4><?php echo $post['title']; ?></h4></a>
										<p><?php echo word_limiter($post['body'], 20); ?></p>
										<a class="blog_btn" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a>
									</div>
								</div>
                            </article>
                            
                            
							<?php endforeach; ?>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget search_widget">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Posts">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget author_widget">
                                <img class="author_img img-fluid" src="<?php echo base_url(); ?>assets/<?php echo base_url(); ?>assets/img/blog/author.png" alt="">
                                <h4>Charlie Barber</h4>
                                <p>Senior blog writer</p>
                                <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                                <div class="social_icon">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-github"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="media post_item">
                                    <img src="img/blog/popular-post/post1.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Space The Final Frontier</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post2.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>The Amazing Hubble</h3></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post3.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Astronomy Or Astrology</h3></a>
                                        <p>03 Hours ago</p>
                                    </div>
                                </div>
                                <div class="media post_item">
                                    <img src="<?php echo base_url(); ?>assets/img/blog/popular-post/post4.jpg" alt="post">
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3>Asteroids telescope</h3></a>
                                        <p>01 Hours ago</p>
                                    </div>
                                </div>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns"><i class="lnr lnr-arrow-right"></i></a>
                                </div>	
                                <div class="br"></div>							
                            </aside>
                            <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">Post Catgories</h4>
								<?php foreach ($categories as $category): ?>
                                <ul class="list cat-list">
                                    <li>
                                        <a href="#" class="d-flex justify-content-between">
                                            <p><?php echo $category['category_name']; ?></p>
                                            <p>37</p>
                                        </a>
                                    </li>										
                                </ul>
								<?php endforeach; ?>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->