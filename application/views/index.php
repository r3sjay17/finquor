<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


			<!-- header content -->
			<div class="content-wrpr">
				<div class="container">
					<div class="row">
						<div class="col-md-12 content-panel">
							<div class="content">
								<h2>The best time to manage</h2>
								<h2>your finances is, TODAY.</h2>
								
								<div class="btn-hldr">
									<button type="button" class="btn btn-get-started">Get Started</button>
								</div>
								<p>Sign up now for greater deals once we are live!</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- ./end header -->

	
	<div class="fq-content">

		<!-- explore more -->
		<div class="btn-explore">
			<button>
				<span>EXPLORE MORE</span>
				<span class="icn-hldr"><i class="fa fa-chevron-down"></i></span>
			</button>
		</div>
			
		<!-- help row -->
		<div class="help-row">
			<div class="container">
				<h3 class="row-title">How does FinQuor help you?</h3>
				<div class="inner-hldr">
					<div class="row">

						<div class="col-md-4 hlpr-col">
							<div class="img-hldr">
								<img src="<?=base_url('assets/images/home-search-icon.png')?>">
							</div>
							<div class="content">
								<h2>Search for an advisor</h2>
								<div class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum risus consequat tempor porta. Nunc lacus nibh, condimentum ac justo et, facilisis auctor libero. Aenean non quam enim. Donec condimentum dui eu ligula congue, eget euismod felis commodo. Proin sodales vitae sem vitae pretium.
								</div>
							</div>
						</div>

						<div class="col-md-4 hlpr-col">
							<div class="img-hldr">
								<img src="<?=base_url('assets/images/home-meeting-icon.png')?>">
							</div>
							<div class="content">
								<h2>Set a meeting</h2>
								<div class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum risus consequat tempor porta. Nunc lacus nibh, condimentum ac justo et, facilisis auctor libero. Aenean non quam enim. Donec condimentum dui eu ligula congue, eget euismod felis commodo. Proin sodales vitae sem vitae pretium.
								</div>
							</div>
						</div>

						<div class="col-md-4 hlpr-col">
							<div class="img-hldr">
								<img src="<?=base_url('assets/images/home-plan-icon.png')?>">
							</div>
							<div class="content">
								<h2>Engage the plan</h2>
								<div class="desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum risus consequat tempor porta. Nunc lacus nibh, condimentum ac justo et, facilisis auctor libero. Aenean non quam enim. Donec condimentum dui eu ligula congue, eget euismod felis commodo. Proin sodales vitae sem vitae pretium.
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- financial priority -->
		<div class="priority-row">
			<div class="container">
				<h3 class="row-title">What is your financial priority?</h3>
				<div class="inner-hldr">
					<div class="row">
						<div class="col-md-3 fq-col">
							<a href="<?=base_url('service/investments')?>" class="content">
								<h2>Investments</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</a>
						</div>
						
						<div class="col-md-3 fq-col">
							<a href="<?=base_url('service/financial-services')?>" class="content">
								<h2>Financial Services</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</a>
						</div>
						
						<div class="col-md-3 fq-col">
							<a href="<?=base_url('service/business-opportunities')?>" class="content">
								<h2>Business Opportunities</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</a>
						</div>
						
						<div class="col-md-3 fq-col">
							<a href="<?=base_url('service/healthcare-and-insurance')?>" class="content">
								<h2>Healthcare & Insurance</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 btn-hldr">
							<button type="button" class="btn-get-started">Get Started</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- inquiry row -->
		<div class="inquiry-row">
			<div class="container">
				<h2>Send us your inquiry!</h2>
				<p class="col-md-8">*required</p>

				<form method="POST" id="frm-inquiry">
					<div class="form-group row">
						<div class="col-md-6">
							<label>Name<span>*</span></label>
							<div class="input-group mb-3">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
							  </div>
							  <input type="text" name="name" class="form-control" placeholder="Full Name" aria-describedby="basic-addon1" required>
							</div>
						</div>
						<div class="col-md-6">
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
						<div class="col-md-4">
							<label>Subject of Inquiry</label>
							<select name="subject" class="form-control">
								<option value=""></option>
								<option value="services">Services</option>
								<option value="subscription">Subscription</option>
								<option value="signup">Signing Up</option>
								<option value="security and privacy">Security and Privacy</option>
								<option value="advisors">Advisors</option>
								<option value="clients">Clients</option><option value="services">Services</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-md-8">
							<label>Comments<span>*</span></label>
							<textarea name="comments" class="form-control" rows="5" placeholder="Enter comments to help us understand better..." required></textarea>
						</div>
					</div>

					<div class="form-group row fq-btn-group">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<button type="reset"><i class="fa fa-repeat"></i> Reset</button>
								</div>
								<div class="col-md-6">
									<button type="submit">Submit <i class="fa fa-chevron-right"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
	<!-- ./end body content -->