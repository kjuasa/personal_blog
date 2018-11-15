 <!-- Main Content -->
 <div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php echo form_open_multipart('posts/create'); ?><br>
          <h2><?=$title; ?></h2><br>
          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label>Add Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter title">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="body" id="editor1" placeholder="Enter post content" class="form-control" rows="8" cols="80"></textarea>
          </div>
          <div class="form-group">
            <label>Select Category</label><br>
            <select class="form-control" name="category_id"><br><br>
              <?php foreach($categories as $category) : ?>
                <option value="<?php echo $category['id']; ?>"><?php echo $category['category_name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
          <br><br><label>Upload Image</label><br>
            <input type="file" name="userfile" size="20"><br><br>
          </div>
          <button type="submit" class="btn btn-primary">Add Post</button>
        </form>
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
                    <?php foreach($categories as $category) : ?>
                    <ul class="list cat-list">
                        <li>
                            <a href="#" class="d-flex justify-content-between">
                                <p><?php echo $category['category_name']; ?></p>
                            </a>
                        </li>
                        <?php endforeach; ?>															
                    </ul>
                </aside>
            </div>
        </div>
    </div>
</div>
<br><br>
</div>
