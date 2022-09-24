<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>UMKM SEKAR AYU PUTAT JAYA</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/foto/LOGO.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


	<!-- Start Main Top -->
	<header class="main-header">
		<!-- Start Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
			<a><img src="<?= base_url() ?>assets/foto/FRONTEND2.png" style="width: 20%; height: 20%;" alt=""></a>
			<div class="container">
				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="index.html"><img src="images/LOGO.png" class="logo" alt=""></a>
				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<?php $uri = $this->uri->segment(1) ?>
					<ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="nav-item <?php echo $uri == 'Welcome' ? 'active' : 'no' ?>"><a class="nav-link" href="<?= base_url() ?>Welcome">Home</a></li>
						<li class="nav-item <?php echo $uri == 'about' ? 'active' : 'no' ?>"><a class="nav-link" href="<?= base_url('about') ?>">Tentang kami</a></li>
						<!-- <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Sidebar Shop</a></li>
                                <li><a href="shop-detail.html">Shop Detail</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                            </ul>
                        </li> -->
						<li class="nav-item <?php echo $uri == 'Welcome/produk' ? 'active' : 'no' ?>"><a class="nav-link" href="<?= base_url() ?>Welcome/produk">Gallery</a></li>
						<li class="nav-item <?php echo $uri == 'contact' ? 'active' : 'no' ?>"><a class="nav-link" href="<?= base_url() ?>contact">Contact Us</a></li>
						<!-- <li class="nav-item"><a class="nav-link bg-info" href="<?= base_url() ?>produk">Backend</a></li> -->
					</ul>
				</div>
				<!-- /.navbar-collapse -->

				<!-- End Side Menu -->
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Main Top -->

	<!-- Start Top Search -->
	<div class="top-search">
		<div class="container">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-search"></i></span>
				<input type="text" class="form-control" placeholder="Search">
				<span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
			</div>
		</div>
	</div>
	<!-- End Top Search -->
