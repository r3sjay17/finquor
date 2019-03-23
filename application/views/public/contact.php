<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="con-sOne">
	<div class="wrapper">
		<h1>Send us your inquiry!</h1>
		<div class="row">
			<div class="col" ng-app="appContact" ng-controller="contactCtrl">
				<p>*required</p>
				<form id="frm-contact" name="frmContact" class="frm-inquiry">
				  	<div class="row">
						<div class="col">
						  	<div class="input-group mb-2">
					  			<label for="name">Name*</label>
								<div class="input-group-prepend">
							  		<div class="input-group-text"><i class="fa fa-user"></i></div>
								</div>
								<input type="text" class="form-control" name="name" placeholder="Full Name" nrequired>
						  	</div>
						</div>
				  	</div>

				  	<div class="row">
						<div class="col">
						  	<div class="input-group mb-2">
						  		<label for="email">Email*</label>
								<div class="input-group-prepend">
							  		<div class="input-group-text"><i class="fa fa-envelope"></i></div>
								</div>
								<input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
						  	</div>
						</div>
				  	</div>

				  	<div class="row">
						<div class="col">
							<label for="inquiry">Subject of Inquiry</label>
							<select name="inquiry" class="form-control" style="display: inline-block;width: auto;">
								<option value="services">Services</option>
								<option value="subscription">Subscription</option>
								<option value="signup">Signing Up</option>
								<option value="security and privacy">Security and Privacy</option>
								<option value="advisors">Advisors</option>
								<option value="clients">Clients</option>
							</select>
						</div>
				  	</div>

				  	<div class="row">
						<div class="col">
							<label for="comments">Comments</label>
							<textarea placeholder="Enter Comments to help understand better..." class="form-control" name="comments" rows="5"></textarea>
						</div>
				  	</div>

					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LdK0HwUAAAAAP-mI0MT9aH8eHBCY8Xl37C_ZzEv"></div>
						</div>
					</div>

				  	<div class="row">
						<div class="col">
							<button type="reset" class="btn btn-theme btn-reset"><i class="fa fa-repeat"></i> Reset</button>
							<button type="submit" class="btn btn-theme">Submit <i class="fa fa-chevron-right"></i></button>
						</div>
				  	</div>
				</form>
			</div>
			<div class="col-sm-5">
				<p>&nbsp;</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.70853565476534!2d121.02404951459283!3d14.560952199006222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c907af9013a3%3A0x8af4a17c3d9b870d!2sFinman+Centre+Building%2F+South+Premiere!5e0!3m2!1sen!2sph!4v1537088135446" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				<div class="row">
					<div class="col">
						<h3><i class="fa fa-envelope"></i>Contact Us</h3>
						<span>Email: support@finquor.com.ph <br> Contact No.: 09123456789</span>
					</div>
					<div class="col">
						<h3><i class="fa fa-envelope"></i>Our Location</h3>
						<span>7th Floor Finman Centre, Salcedo Village <br> 131 Tordesillas St., Bel-Air, Makati City <br> NCR, 4th District, Philippines</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="submit" tabindex="-1" role="dialog" aria-labelledby="submitLabel" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content" style="border: 3px solid #fb8320">
				<div class="modal-body" style="font-size: 20px;font-weight: 700;text-align: center;padding: 2rem;">
					Thank you for submitting your query,
					please wait for our response within 48 hours.
				</div>
			</div>
	  	</div>
	</div>
</section>