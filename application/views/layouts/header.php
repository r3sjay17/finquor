<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">

	<link rel="icon" href="<?=base_url('assets/images/logo.png')?>">

	<!-- <meta name="google-signin-client_id" content="471011139323-avtmuha9addgfpklpe3tauvrfaisoila.apps.googleusercontent.com"> -->
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="471011139323-rap0mihmqg6nscouhhg2m7ve0iccd08r.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

	<title>FinQuor</title>

	<!-- font style -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo|Montserrat" rel="stylesheet">

	<!-- main style sheet -->
	<link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/main.min.css')?>">

	<!-- slick stylesheet -->
	<link rel="stylesheet" href="<?=base_url('assets/css/slick.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/slick-theme.min.css')?>">

	<!-- HTTPS required. HTTP will give a 403 forbidden response -->
	<script src="https://sdk.accountkit.com/en_US/sdk.js"></script>

	
	<!-- scripts -->
	<script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/slick.min.js')?>"></script>
	<script src="<?=base_url('assets/js/fq-scripts.js')?>"></script>
	<script type="text/javascript">
		var site = "<?=base_url()?>";
	</script>

</head>
<body class="fq-landing <?=$page?>-page">
	<!-- social links -->
	<div class="social-links fq-sticky">
		<a href="#" class="fq-fb"><i class="fa fa-facebook-square"></i></a>
		<a href="#" class="fq-twitter"><i class="fa fa-twitter-square"></i></a>
		<a href="#" class="fq-instagram"><i class="fa fa-instagram"></i></a>
		<a href="#" class="fq-mail"><i class="fa fa-envelope-o"></i></a>
		<p>SHARE</p>
	</div>

	<!-- header wrapper -->
	<div class="fq-header">
		<div class="row">

			<!-- link wrapper -->
			<div class="lnk-wrpr row">
			<!-- logo holder -->
				<div class="col-md-4 left-panel">
					<a href="<?=base_url()?>">
						<div class="logo-hldr">
							<img src="<?=base_url('assets/images/logo.png')?>">
						</div>
						<div class="details">
							<h2>FinQuor</h2>
							<p>Bridging real people. Real advisors.</p>
						</div>
					</a>
				</div>
				
				<div class="icn-hldr">
					<button type="button" class="menu-icon">
						<i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- menu holder -->
				<div class="col-md-8 right-panel">
					<div class="close-menu-btn">
						<i class="fa fa-times"></i>
					</div>
					<div class="menu-hldr">
						<ul class="fq-menu main-menu">
							<li class="menu-item <?=($page == 'home') ? 'active' : '';?>">
								<a href="<?=base_url()?>">Home</a>
							</li>
							<li class="menu-item <?=($page == 'about-us') ? 'active' : '';?>">
								<a href="<?=base_url('about')?>">About US</a>
							</li>
							<li class="menu-item <?=($page == 'services') ? 'active' : '';?>">
								<a href="<?=base_url('services')?>">Services</a>
							</li>
							<li class="menu-item <?=($page == 'subscription') ? 'active' : '';?>">
								<a href="<?=base_url('subscription')?>">Subscription</a>
							</li>
							<li class="menu-item <?=($page == 'contact') ? 'active' : '';?>">
								<a href="<?=base_url('contact')?>">Contact Us</a>
							</li>

							<?php if(!isset($_SESSION['provider'])) : ?>
							<li class="menu-item" id="login-item">
								<button type="button" class="btn-login">LOG IN</button>

								<div class="login-wrapper">
									<form method="POST" id="frm-login">
										<input type="email" name="email" placeholder="Email Address" required>
										<input type="password" name="pword" placeholder="Password" required>
									</form>
									<a href="#" class="btn-forgot-pword">Forgot Password?</a>

									<div class="btn-holder">
										<h4>LOG IN as</h4>
										<button type="button" class="fq-btn fq-btn-advisor">Advisor</button>
										<button type="button" class="fq-btn fq-btn-client">Client</button>
									</div>
									<div class="api-login-holder">
										<p>or</p>
										<!-- <div class="fb-login-button" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div> -->

										<button type="button" class="fq-btn-fb"><i class="fa fa-facebook-square"></i> Login with Facebook</button>
										<!-- <button type="button" class="fq-btn-google" data-onsuccess="onSignIn"><i class="fa fa-google"></i> Login with Google</button> -->
										<div class="g-signin2" data-onsuccess="onSignIn"></div>
									</div>
									<a href="#" class="btn-no-account">No account yet? SIGN UP HERE.</a>
								</div>
							</li>
							<?php else : ?>
							<li class="menu-item" id="user-item">
								<a class="btn-user">
									<i class="fa fa-user-circle"></i>
									<span><?=(isset($_SESSION['name'])) ? $_SESSION['name'] : ''?></span>
								</a>

								<div class="settings-wrpr">
									<button type="button" class="fq-btn fq-usr-lnk">Dashboard <span>soon</span></button>
									<?php if(isset($_SESSION['provider']) && $_SESSION['provider'] == 'facebook') : ?>
										<a href="<?=base_url('logout')?>" class="fq-btn fq-usr-lnk" onclick="logout()"><strong>Logout</strong></a>
									<?php else : ?>
										<button type="button" class="fq-btn fq-usr-lnk" onclick="signOut()"><strong>Logout</strong></button>
									<?php endif; ?>
								</div>
							</li>
						<?php endif; ?>
						</ul>
					</div>
				</div>

			</div>