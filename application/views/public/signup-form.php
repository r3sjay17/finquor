<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp sgnAdv sgnFrm">
	<div class="wrapper">
		<div class="cont <?=$type?>">
			<p style="font-family: 'Montserrat', sans-serif;font-size: 18px;font-weight: 700;">SIGN UP as</p>
			<a href="<?=base_url('signup')?>" class="btn btn-theme2"><?=$type?></a>

			<div ng-app="appSignup" ng-controller="signupCtrl">
				<form id="frm-signup" name="frmSignup">
					<input type="hidden" name="type" value="<?=$type?>">
					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">Email Address</label>
						  	<input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">First Name</label>
						  	<input type="text" name="fname" class="form-control" placeholder="First Name" required>
						</div>
						<div class="col">
						  	<label for="name" class="sr-only">Last Name</label>
						  	<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
						</div>
					</div>

					<div class="row">
						<div class="col-8">
					  		<label for="name" class="sr-only">Birthdate</label>
					  		<div class="input-group mb-2">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
								<input type="text" name="bdate" class="form-control datepicker" max="<?=date('Y-m-d')?>" autocomplete="off" placeholder="mm/dd/yyyy" required>
					  		</div>
						</div>
						<div class="col">
							<div class="row">
								<div class="col">
									<input class="form-check-input" type="radio" name="gender" id="genderRadio1" value="1" checked>
									<label class="form-check-label" for="genderRadio1">
									    Male
									</label>
								</div>
								<div class="col">
									<input class="form-check-input" type="radio" name="gender" id="genderRadio2" value="2">
									<label class="form-check-label" for="genderRadio2">
									    Female
									</label>
								</div>
							</div>
						</div>
					</div>

					<?php if($type == 'advisor') : ?>
						<div class="row">
							<div class="col-4">
								<label for="name" class="sr-only">Select</label>
								<select id="inquiry" class="form-control">
									<option value="Investments - Stock Market">Investments - Stock Market</option>
									<option value="Investments - Mutual Fund">Investments - Mutual Fund</option>
									<option value="Investments - UITF">Investments - UITF</option>
									<option value="Investments - ForEx">Investments - ForEx</option>
									<option value="Investments - Real Estate">Investments - Real Estate</option>
									<option value="Financial Services- Tax Compliance Services">Financial Services- Tax Compliance Services</option>
									<option value="Financial Services - Accounting Services">Financial Services - Accounting Services</option>
									<option value="Financial Services - Credit Card Services">Financial Services - Credit Card Services</option>
									<option value="Business Opportunities">Business Opportunities</option>
									<option value="Healthcare and Insurance - Variable Universal Life Insurance (VUL)">Healthcare and Insurance - Variable Universal Life Insurance (VUL)</option>
									<option value="Healthcare and Insurance - Non-Life Insurance">Healthcare and Insurance - Non-Life Insurance</option>
									<option value="Healthcare and Insurance - Healthcare Maintenance Organization">Healthcare and Insurance - Healthcare Maintenance Organization</option>
								</select>
							</div>
							<div class="col">
							  <label for="name" class="sr-only">Company or Affiliation</label>
							  <input type="text" class="form-control" id="name" placeholder="Company or Affiliation">
							</div>
						</div>
					<?php endif; ?>


					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LdK0HwUAAAAAP-mI0MT9aH8eHBCY8Xl37C_ZzEv"></div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-theme3" style="font-size: 23px;padding: 0 5%;margin-top: 3%">SIGN UP</button>
						</div>
					</div>
				</form>

				<p style="font-weight: 700">or</p>

				<a href="<?=$google_login_url?>" class="btn btn-google">SIGN UP with Google</a>

			</div>

			<div class="terms">By Signing up, you agree to FinQuor's <br><a href="#" data-toggle="modal" data-target="#termsConditionsModal">Terms of Use</a> and <a href="#" data-toggle="modal" data-target="#termsConditionsModal">Privacy Policy</a></div>
			<!-- <h4><i>If you already have an account, <a href="">LOG IN HERE</a></i></h4> -->
		</div>
	</div>
</section>