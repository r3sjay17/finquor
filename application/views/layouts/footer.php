<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

		<footer>
			<div class="wrapper">
				<div class="row">
					<div class="col">
						<h5>Services</h5>
						<ul class="footer-link">
							<li><a href="#"  data-toggle="modal" data-target="#investments">Investments</a></li>
							<li><a href="#"  data-toggle="modal" data-target="#financial">Financial Services</a></li>
							<li><a href="#"  data-toggle="modal" data-target="#business">Business Opportunities</a></li>
							<li><a href="#"  data-toggle="modal" data-target="#insurance">Healthcare &amp; Insurance</a></li>
						</ul>
					</div>

					<div class="col">
						<h5>About Us</h5>
						<ul class="footer-link">
							<li><a href="">FinQuor at glance</a></li>
							<li><a href="">The Core Team</a></li>
							<li><a href="">FAQs</a></li>
						</ul>
					</div>

					<div class="col">
						<h5>Finquor, Inc.</h5>
						<p>FinQuor™ is an independent financial services platform dedicated to help people finding the best financial advisor tailored to their needs.</p>
					</div>

				</div>

				<div class="row">
					<div class="col">
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook-square"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube-play"></i></a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col copyright">
						FinQuor, Inc. © 2018
					</div>
				</div>
			</div>
		</footer>


	</div> <!-- ./ main div -->

	<!--Modal-->
	<div class="modal fade" id="popupalert" tabindex="-1" role="dialog" aria-labelledby="investmentsLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  		<i class="fa fa-times-circle"></i>
					</button>
					<p>Kindly check your email for confirmation.</p>
				</div>
			</div>
	  	</div>
	</div>


	<!-- scripts -->
	<script type="text/javascript">
		var base_url = "<?=base_url()?>";
	</script>
	<script src="<?=base_url('assets/js/rty-scripts.js')?>"></script>

	<!-- google captcha -->
	<script src='//www.google.com/recaptcha/api.js'></script>
	
</body>
</html>