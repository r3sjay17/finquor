<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	</div>
	<!-- ./end body content -->

	<footer>
		<div class="container">
			<div class="top-footer">
				<div class="row">

					<div class="col-md-4 ftr-widget">
						<h3 class="title">Services</h3>
						<ul class="footer-link">
							<li><a href="<?=base_url('service/investments')?>">Investments</a></li>
							<li><a href="<?=base_url('service/financial-services')?>">Financial Services</a></li>
							<li><a href="<?=base_url('service/business-opportunities')?>">Business Opportunities</a></li>
							<li><a href="<?=base_url('service/healthcare-and-insurance')?>">Healthcare & Insurance</a></li>
						</ul>
					</div>

					<div class="col-md-4 ftr-widget">
						<h3 class="title">About Us</h3>
						<ul class="footer-link">
							<li><a href="#">Finquor at glance</a></li>
							<li><a href="#">The Core Team</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>

					<div class="col-md-4 ftr-widget">
						<h3 class="title">FinQuor, Inc.</h3>
						<div class="desc">
							FinQuor&trade; is an independent financial services platform dedicated to help people finding the best financial advisor tailored to their needs.
						</div>
					</div>

				</div>
			</div>

			<div class="btm-footer">
				<div class="social-links">
					<a href="#" class="fq-fb"><i class="fa fa-facebook-square"></i></a>
					<a href="#" class="fq-twitter"><i class="fa fa-twitter-square"></i></a>
					<a href="#" class="fq-instagram"><i class="fa fa-instagram"></i></a>
					<a href="#" class="fq-youtube"><i class="fa fa-youtube-play"></i></a>
				</div>
				<div class="copyright">
					Finquor, Inc. &copy; 2018
				</div>
			</div>
		</div>
	</footer>

	<div class="back-to-top">
		<i class="fa fa-chevron-up"></i>
	</div>


	<div class="fq-modal fq-alert">
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
				<button class="close"><i class="fa fa-times-circle"></i></button>
			</div>
			<div class="fq-modal-content">
				
			</div>
		</div>
	</div>

	<div class="fq-modal" id="get-started-modal">
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
			</div>
			<div class="fq-modal-content">
				<div class="signup-main">
					<div class="main">
						<h4>You are on the right track,</h4>
						<h1>SIGN UP as</h1>
						<button type="button" class="fq-btn btn-su-advisor">Advisor</button>
						<button type="button" class="fq-btn btn-su-advisor">Client</button>
					</div>

					<div class="sub">
						<div class="sub-main">
							<h2>SIGN UP as</h2>
							<button type="button" class="fq-btn btn-su-back">
								<i class="fa fa-chevron-left"></i>
								Advisor
							</button>
							<h1>SIGN UP with</h1>
							<button type="button" class="fq-btn btn-su-email">Sign up with Email</button>
							<button type="button" class="fq-btn fq-btn-fb btn-su-fb">
								<i class="fa fa-facebook-square"></i>
								Sign up with Facebook
							</button>    
							<!-- <button type="button" class="fq-btn btn-su-google">
								<i class="fa fa-google"></i>
								Sign up with Google
							</button> -->
							<div class="g-signin2" data-onsuccess="onSignIn"></div>
						</div>

						<div class="sub-form">
							<h2>SIGN UP as</h2>
							<button type="button" class="fq-btn btn-su-back">
								<i class="fa fa-chevron-left"></i>
								Advisor
							</button>
							<h2>SIGN UP with</h2>
							<form method="POST" id="frm-signup">
								<div class="form-group row justify-content-md-center">
									<div class="col-md-10">
										<input type="email" name="email" class="form-control" placeholder="Email Address" required>
									</div>
								</div>

								<div class="form-group row justify-content-md-center">
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-6 fq-col">
												<input type="text" name="fname" class="form-control" placeholder="First Name" required>
											</div>
											<div class="col-md-6 fq-col">
												<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row justify-content-md-center">
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-7 fq-col input-group">
												<div class="input-group-prepend">
												    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
												 </div>
												<input type="date" name="bdate" class="form-control">
											</div>
											<div class="col-md-5 fq-col text-left">
												<label><input type="radio" name="gender" value="female">FEMALE</label>
												<label><input type="radio" name="gender" value="male">MALE</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row justify-content-md-center advisor-frm-row">
									<div class="col-md-10">
										<div class="row">
											<div class="col-md-5 fq-col">
												<select name="service" class="form-control">
													<option value=""></option>
													<option value="investments">Investments</option>
												</select>
											</div>
											<div class="col-md-7 fq-col">
												<input type="text" name="company" class="form-control" placeholder="Company or Affiliation">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row justify-content-md-center">
									<div class="col-md-10 input-group">
										<input type="password" name="pword" class="form-control" placeholder="Password" required>
										<div class="input-group-prepend">
										    <span class="input-group-text" id="icn-pword"><i class="fa fa-eye"></i></span>
										 </div>
									</div>
								</div>

								<div class="form-group row justify-content-md-center">
									<div class="col-md-10">
										<input type="password" name="cpword" class="form-control" placeholder="Confirm Password" required>
										<span class="err-msg">Password not match!</span>
									</div>
								</div>

								<div class="form-group row justify-content-md-center">
									<div class="col-md-12">
										<button type="submit">SIGN UP</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="terms">
						By signing up, you agree to Canva's <br>
						<a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>
					</div>
					<div class="user">If you already have an account, <a href="#">LOG IN HERE.</a></div>
				</div>

				<div class="">
					
				</div>
			</div>
		</div>
	</div>


	<iframe id="googlelogoutframe" src="#" style="display: none"></iframe>

	<?php if(!isset($_SESSION['name'])) : ?>
	<script type="text/javascript">
		$(document).ready(function() {
			// Initiate Facebook JS SDK
			window.fbAsyncInit = function() {
				FB.init({
					appId   : '<?php echo $this->config->item('facebook_app_id'); ?>', // Your app id
					cookie  : true,  // enable cookies to allow the server to access the session
					xfbml   : false,  // disable xfbml improves the page load time
					version : 'v2.4', // use version 2.4
					status  : true // Check for user login status right away
				});
			};
			// Check login status
			function statusCheck(response)
			{
				if (response.status === 'connected')
				{
					$('.fq-modal').fadeOut(800);
					FB.api('/me', {locale: 'en_US', fields: 'id, name, short_name, email, picture'}, function(response) {
			  			authenticate(response, 'facebook');
			  			//window.location.reload();
					});
				}
			}

			// log out user from facebook
			function logout() {
				FB.logout(function(response) {
					
				});
				unsetSession();
			}
			// Get login status
			function loginCheck()
			{
				FB.getLoginStatus(function(response) {
					statusCheck(response);
				});
			}
			$(function(){
				// Trigger login
				$('.fq-header #login-item .api-login-holder, #get-started-modal .fq-modal-content .sub-main').on('click', '.fq-btn-fb', function() {
					FB.login(function(){
						loginCheck();
					}, {scope: '<?php echo implode(",", $this->config->item('facebook_permissions')); ?>'});
				});
			});
			(function(d, s, id){
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) {return;}
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

		});
	</script>
	<?php endif; ?>

</body>
</html>