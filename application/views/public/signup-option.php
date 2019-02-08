<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp ssAdv">
	<div class="wrapper">
		<div class="cont">
			<h1>SIGN UP as</h1>
			<a href="<?=base_url('signup')?>" class="btn btn-theme2"><?=strtoupper($type)?></a>
			<h1>SIGN UP with</h1>
			<a href="<?=base_url('form/'. $type .'/signup')?>" class="btn email">Sign Up with Email</a>
			<a href="<?=$google_login_url?>" class="btn google">Sign Up with Google</a>
			<!-- <button class="btn facebook">Sign Up with Facebook</button>
			<button class="btn google">Sign Up with Google</button> -->
			<div class="terms">By Signing up, you agree to Canva's <br><a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></div>
			<!-- <h4><i>If you already have an account, <a href="">LOG IN HERE</a></i></h4> -->
		</div>
	</div>
</section>