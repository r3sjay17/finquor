<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

			<!-- contact form and map -->
			<div class="contact-row">
				<div class="container">
					<div class="inner-hldr">
						<div class="row">
							<div class="col-md-6 cntct-form-row">
								<h2>Send us your inquiry!</h2>
								<p>*required</p>

								<form method="POST" id="frm-contact">
									<div class="form-group row">
										<div class="col-md-12">
											<label>Name<span>*</span></label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
											  </div>
											  <input type="text" name="name" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1" required>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-12">
											<label>Email<span>*</span></label>
											<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
											  </div>
											  <input type="email" name="email" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1" required>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-8">
											<label>Subject of Inquiry</label>
											<select name="subject" class="form-control">
												<option value=""></option>
												<option value="services">Services</option>
												<option value="subscription">Subscription</option>
												<option value="signup">Signing Up</option>
												<option value="security and privacy">Security and Privacy</option>
												<option value="advisors">Advisors</option>
												<option value="clients">Clients</option>
											</select>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-12">
											<label>Comments<span>*</span></label>
											<textarea name="comments" class="form-control" rows="5" placeholder="Enter comments to help us understand better..." required></textarea>
										</div>
									</div>

									<div class="form-group row fq-btn-group">
										<div class="col-md-12">
											<button type="reset"><i class="fa fa-repeat"></i> Reset</button>
											<button type="submit">Submit <i class="fa fa-chevron-right"></i></button>
										</div>
									</div>
								</form>
							</div>

							<div class="col-md-6 map-row">
								<div class="map-hldr">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.70853565476534!2d121.02404951459283!3d14.560952199006222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c907af9013a3%3A0x8af4a17c3d9b870d!2sFinman+Centre+Building%2F+South+Premiere!5e0!3m2!1sen!2sph!4v1537088135446" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
								<div class="row details-hldr">
									<div class="col-md-6">
										<h3>
											<i class="fa fa-envelope"></i>
											Contact Us
										</h3>
										<p>Email: support@finquor.com.ph</p>
										<p>Contact No.: 09123456789</p>
									</div>

									<div class="col-md-6">
										<h3>
											<i class="fa fa-paper-plane"></i>
											Our Location
										</h3>
										<span>Lorem Ipsum Dolor Sit</span>
										<span>Salcedo Village, Makati City</span>
										<span>Philippines</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- ./end header -->