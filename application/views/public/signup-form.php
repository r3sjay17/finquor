<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp sgnAdv">
	<div class="wrapper">
		<div class="cont">
			<h1>SIGN UP as</h1>
			<a href="<?=base_url('signup/' . $type)?>" class="btn btn-theme2"><?=strtoupper($type)?></a>
			<h1>SIGN UP with</h1>

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
						<div class="col">
						  	<label for="name" class="sr-only">Contact Number</label>
						  	<input type="text" name="mobile" class="form-control"  placeholder="Contact Number" ng-model="contactModel" ng-required="true">
							<!-- error message -->
							<p ng-show="frmSignup.mobile.$error.required" class="error-msg">This field is required</p>
						</div>
					</div>

					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">Password</label>
						  	<div class="input-group mb-2">
						  		<input type="password" name="pwd" class="form-control" ng-model="pwdModel" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$" ng-minlength="6" ng-maxlength="10" ng-required="true">
								<div class="input-group-prepend passEye">
							  		<div class="input-group-text"><button><i class="fa fa-eye"></i></button></div>
								</div>
						  	</div>
							<!-- error message -->
							<p ng-show="frmSignup.pwd.$error.required" class="error-msg">This field is required</p>
							<p ng-show="frmSignup.pwd.$error.minlength" class="error-msg">Please enter at least 6 characters</p>
							<p ng-show="frmSignup.pwd.$error.maxlength" class="error-msg">Maximum of 10 characters only</p>
							<p ng-show="frmSignup.pwd.$error.pattern" class="error-msg">Password should be a combination of an uppercase, lowercase and alphanumeric characters</p>
						  
						</div>
					</div>

					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">Confirm Password</label>
						  	<input type="password" name="cpwd" class="form-control"  placeholder="Confirm Password" ng-model="cpwdModel" pattern="{{pwdModel}}" ng-required="true">
							<!-- error message -->
							<p ng-show="frmSignup.cpwd.$error.required" class="error-msg">This field is required</p>
							<p ng-show="frmSignup.cpwd.$error.pattern" class="error-msg">Password not match</p>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LdK0HwUAAAAAP-mI0MT9aH8eHBCY8Xl37C_ZzEv"></div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-theme" ng-disabled="frmSignup.email.$invalid || frmSignup.fname.$invalid || frmSignup.lname.$invalid || frmSignup.bdate.$invalid || frmSignup.mobile.$invalid || frmSignup.pwd.$invalid || frmSignup.cpwd.$invalid">SIGNUP</button>
						</div>
					</div>
				</form>
			</div>

			<div class="terms">By Signing up, you agree to Canva's <br><a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></div>
			<!-- <h4><i>If you already have an account, <a href="">LOG IN HERE</a></i></h4> -->
		</div>
	</div>
</section>

<script type="text/javascript">
	angular.module('appSignup', []).controller('signupCtrl', function() {})
</script>