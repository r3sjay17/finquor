<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp sgnAdv">
	<div class="wrapper">
		<div class="cont">
			<p style="font-family: 'Montserrat', sans-serif;font-size: 18px;font-weight: 700;">REGISTER as</p>
			<a href="<?=base_url('signup')?>" class="btn btn-theme2"><?=strtoupper($type)?></a>

			<div ng-app="appSignup" ng-controller="signupCtrl">
				<form id="frm-signup" name="frmSignup" novalidate>
					<input type="hidden" name="type" value="<?=$type?>">
					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">Email Address</label>
						  	<input type="email" name="email" class="form-control" placeholder="Email" autocomplete="off" ng-model="emailModel" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?w+)*(\.\w{2,3})+$" ng-required="true">
							<!-- error message -->
							<p ng-show="frmSignup.email.$error.required" class="error-msg">This field is required</p>
							<p ng-show="frmSignup.email.$error.pattern" class="error-msg">Please enter a valid email address</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">First Name</label>
						  	<input type="text" name="fname" class="form-control" placeholder="First Name" ng-model="fnameModel" ng-required="true">
							<!-- error message -->
							<p ng-show="frmSignup.fname.$error.required" class="error-msg">This field is required</p>
						</div>
						<div class="col">
						  	<label for="name" class="sr-only">Last Name</label>
						  	<input type="text" name="lname" class="form-control" placeholder="Last Name" ng-model="lnameModel" ng-required="true">
							<!-- error message -->
							<p ng-show="frmSignup.lname.$error.required" class="error-msg">This field is required</p>
						</div>
					</div>

					<div class="row">
						<div class="col-8">
					  		<label for="name" class="sr-only">Birthdate</label>
					  		<div class="input-group mb-2">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
								<input type="date" name="bdate" class="form-control" max="<?=date('Y-m-d')?>" placeholder="Full Name" ng-model="bdateModel" ng-required="true">
					  		</div>
							<!-- error message -->
							<p ng-show="frmSignup.bdate.$error.required" class="error-msg">This field is required</p>
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
									<option>Investments</option>
									<option>...</option>
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
							<button type="submit" class="btn btn-theme3" ng-disabled="frmSignup.email.$invalid || frmSignup.fname.$invalid || frmSignup.lname.$invalid || frmSignup.bdate.$invalid" style="font-size: 23px;padding: 0 5%;margin-top: 3%">REGISTER</button>
						</div>
					</div>
				</form>

				<p style="font-weight: 700">or</p>

				<a href="<?=$google_login_url?>" class="btn btn-google">REGISTER with Google</a>

			</div>

			<div class="terms">By Signing up, you agree to Canva's <br><a href="#" data-toggle="modal" data-target="#termsConditionsModal">Terms of Use</a> and <a href="#" data-toggle="modal" data-target="#termsConditionsModal">Privacy Policy</a></div>
			<!-- <h4><i>If you already have an account, <a href="">LOG IN HERE</a></i></h4> -->
		</div>
	</div>
</section>

<script type="text/javascript">
	angular.module('appSignup', []).controller('signupCtrl', function() {})
</script>