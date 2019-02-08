<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp sgnAdv">
	<div class="wrapper">
		<div class="cont">
			<h1>SIGN UP with</h1>

			<div ng-app="appAPISignup" ng-controller="signupAPICtrl">
				<form id="frm-api-signup" name="frmAPISignup" novalidate>
					<input type="hidden" name="email" value="<?=$email?>">
					<input type="hidden" name="fname" value="<?=$fname?>">
					<input type="hidden" name="lname" value="<?=$lname?>">
					<input type="hidden" name="pwd" value="<?=$pwd?>">

					<div class="row">
						<div class="col">
						  	<label for="type" class="sr-only">Type</label>
						  	<select name="type" class="form-control" ng-model="typeModel" ng-required="true">
						  		<option value="1">Client</option>
						  		<option value="2">Advisor</option>
						  	</select>
							<!-- error message -->
							<p ng-show="frmAPISignup.type.$error.required" class="error-msg">This field is required.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-8">
					  		<label for="name" class="sr-only">Birthdate</label>
					  		<div class="input-group mb-2">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
								<input type="date" name="bdate" class="form-control" placeholder="Full Name" ng-model="bdateModel" ng-required="true">
					  		</div>
							<!-- error message -->
							<p ng-show="frmAPISignup.bdate.$error.required" class="error-msg">Please enter your birthdate</p>
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

					<div class="row type-grp" style="display: none;">
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

					<div class="row">
						<div class="col">
						  	<label for="name" class="sr-only">Contact Number</label>
						  	<input type="text" name="mobile" class="form-control"  placeholder="Contact Number" ng-model="contactModel" ng-required="true">
							<!-- error message -->
							<p ng-show="frmAPISignup.mobile.$error.required" class="error-msg">This field is required.</p>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LdK0HwUAAAAAP-mI0MT9aH8eHBCY8Xl37C_ZzEv"></div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-theme" ng-disabled="frmAPISignup.bdate.$invalid || frmAPISignup.mobile.$invalid">SIGNUP</button>
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
	angular.module('appAPISignup', []).controller('signupAPICtrl', function() {});

	$('#frm-api-signup').on('change', 'select[name=type]', function(e) {
		e.preventDefault();

		if($(this).val() == 1) {
			$('#frm-api-signup .type-grp').slideUp(800);
		} else {
			$('#frm-api-signup .type-grp').slideDown(800);
		}
	});
</script>