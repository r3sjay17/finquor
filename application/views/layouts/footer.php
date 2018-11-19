<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

	</div>
	<!-- ./end body content -->

	<?php if($page != 'services') : ?>
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
					FinQuor, Inc. &copy; 2018
				</div>
			</div>
		</div>
	</footer>

	<div class="back-to-top">
		<i class="fa fa-chevron-up"></i>
	</div>
	<?php endif; ?>

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