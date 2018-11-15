<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/png">
        <title>Opium Blog</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">

		<!-- CK editor -->
		<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav">
								<li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="category.html">Category</a></li>
								<li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li>
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Sinlge Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right header_social ml-auto">

								<?php if(!$this->session->userdata('logged_in')) : ?>
									<li class="nav-item"><a href="<?php echo base_url(); ?>users/register"><i class="fa fa-user"></i>Register</a></li>
									<li class="nav-item"><a href="<?php echo base_url(); ?>users/login"><i class="fa fa-key"></i>Login</a></li>
								<?php endif; ?>
								<?php if($this->session->userdata('logged_in')) : ?>
									<li class="nav-item"><a><i class="fa fa-user"></i></a>Welcome, <?php echo $this->session->userdata('username'); ?></li>
									<li class="nav-item"><a href="<?php echo base_url(); ?>posts/create"><i class="fa fa-pencil"></i>Create New Post</a></li>
									<li class="nav-item"><a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-key"></i>Logout</a></li>
								<?php endif; ?>
							</ul>
						</div> 
					</div>
				</nav>
			</div>
			<div class="logo_part">
				<div class="container">
					<a class="logo" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""></a>
				</div>
			</div>
        </header>
        <!--================Header Menu Area =================-->