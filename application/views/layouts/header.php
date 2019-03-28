<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<meta name="google-site-verification" content="hmVjWeDuTLSw69wWLjm4qxvCvwbQjz9bA78CLiOIYzU" />

	<title><?=$page?> - FinQuor</title>

	<link rel="icon" href="<?=base_url('assets/img/logo.png')?>">

	<!-- font family -->
	<link href="//fonts.googleapis.com/css?family=Cairo|Montserrat" rel="stylesheet">

	<!-- css files -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/slick.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/slick-theme.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">

	<!-- script files -->
	<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
	<script src="<?=base_url('assets/js/slick.js')?>"></script>
</head>
<body>
	<?php $cpage = strtolower(str_replace(' ', '-', $page)); ?>
	<div class="<?=($cpage != 'signup') ? 'main' : ''?> <?=$cpage?>">
		<nav class="navbar navbar-expand-lg justify-content-between">
			<a class="navbar-brand">
				<img src="<?=base_url('assets/img/logo.png')?>" class="logo" alt="">
				<div class="compName">
					FinQuor
					<span>Bridging real people. Real advisors</span>
				</div>
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link <?=($page == 'Home') ? 'active' : ''?>" href="<?=base_url()?>">Home</a>
					<a class="nav-item nav-link <?=($page == 'About US') ? 'active' : ''?>" href="<?=base_url('about-us')?>">About US</a>
					<a class="nav-item nav-link <?=($page == 'Services') ? 'active' : ''?>" href="<?=base_url('services')?>">Services</a>
					<a class="nav-item nav-link <?=($page == 'Subscription') ? 'active' : ''?>" href="<?=base_url('subscription')?>">Subscription</a>
					<a class="nav-item nav-link <?=($page == 'Contact') ? 'active' : ''?>" href="<?=base_url('contact-us')?>">Contact Us</a>
					<a class="nav-item nav-link btn-register <?=($page == 'Signup') ? 'active' : ''?>" href="<?=base_url('signup')?>"><span>SIGN UP</span></a>

					<!-- <div class="nav-item dropdown">
						<a class="nav-link btn-nav dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<button class=" btn btn-theme">Login</button>
						</a>

						<div class="dropdown-menu dropdown-menu-right droplogin" aria-labelledby="navbarDropdown">
							<form id="frm-login">
								<input type="email" class="form-control" id="email" placeholder="Email">
								<input type="email" class="form-control" id="password" placeholder="Password">
								<a href="#">Forgot Password</a>
							</form>

							<div class="ssNav">
								<h3>LOG IN as</h3>
								<div>
									<button type="reset" class="btn btn-theme2">Advisor</button>
									<button type="button" class="btn btn-theme2"   data-toggle="modal" data-target="#submit">Client</button>
								</div>

								<span>or</span>

								<button class="btn facebook">Sign Up with Facebook</button>
								<button class="btn google">Sign Up with Google</button>
								<a href="#">No account yet? SIGN UP HERE</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</nav>

		<?php if($cpage != 'signup') : ?>
		<div class="social-media">
			<a href="https://www.facebook.com/FinQuor/" target="_blank" class="sm-fb"><i class="fa fa-facebook-square"></i></a>
			<a href="https://twitter.com/finquor" target="_blank" class="sm-twitter"><i class="fa fa-twitter-square"></i></a>
			<a href="https://www.instagram.com/finquor" target="_blank" class="sm-instagram"><i class="fa fa-instagram"></i></a>
			<a href="mailto: finquor@gmail.com" class="sm-mail"><i class="fa fa-envelope-o"></i></a>
			<p>SHARE</p>
		</div>
		<?php endif; ?>