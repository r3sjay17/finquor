<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<section class="sgnUp sgnAdv">
	<div class="wrapper">
		<div class="cont">
			<h1>SIGN UP with</h1>

			<div ng-app="appAPISignup" ng-controller="signupAPICtrl">
				<form id="frm-api-signup" name="frmAPISignup">
					<input type="hidden" name="email" value="<?=$email?>">
					<input type="hidden" name="fname" value="<?=$fname?>">
					<input type="hidden" name="lname" value="<?=$lname?>">

					<div class="row">
						<div class="col">
						  	<label for="type" class="sr-only">Type</label>
						  	<select name="type" class="form-control" required>
						  		<option value="1">Client</option>
						  		<option value="2">Advisor</option>
						  	</select>
						</div>
					</div>

					<div class="row">
						<div class="col-8">
					  		<label for="name" class="sr-only">Birthdate</label>
					  		<div class="input-group mb-2">
								<div class="input-group-prepend">
								  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
								</div>
								<input type="date" name="bdate" class="form-control" max="<?=date('Y-m-d')?>" required>
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

					<div class="row type-grp" style="display: none;">
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

					<div class="row">
						<div class="col-md-12">
							<div class="g-recaptcha" data-sitekey="6LdK0HwUAAAAAP-mI0MT9aH8eHBCY8Xl37C_ZzEv"></div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<button type="submit" class="btn btn-theme">SIGNUP</button>
						</div>
					</div>
				</form>
			</div>

			<div class="terms">By Signing up, you agree to Canva's <br><a href="#" data-toggle="modal" data-target="#termsConditionsModal">Terms of Use</a> and <a href="#" data-toggle="modal" data-target="#termsConditionsModal">Privacy Policy</a></div>
			<!-- <h4><i>If you already have an account, <a href="">LOG IN HERE</a></i></h4> -->
		</div>
	</div>
</section>

<script type="text/javascript">
	$('#frm-api-signup').on('change', 'select[name=type]', function(e) {
		e.preventDefault();

		if($(this).val() == 1) {
			$('#frm-api-signup .type-grp').slideUp(800);
		} else {
			$('#frm-api-signup .type-grp').slideDown(800);
		}
	});
</script>