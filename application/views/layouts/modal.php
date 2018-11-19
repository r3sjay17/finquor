<?php defined('BASEPATH') OR exit('No direct script access allowed') ?>

<!-- alert modal -->
<div class="fq-modal fq-alert">
	<div class="close"></div>
	<div class="modal-wrpr">
		<div class="fq-modal-header">
			<button class="close"><i class="fa fa-times-circle"></i></button>
		</div>
		<div class="fq-modal-content">
			
		</div>
	</div>
</div>

<!-- about member modal -->
<div class="fq-modal fq-members">
	<div class="close"></div>
	<div class="modal-wrpr">
		<div class="fq-modal-header">
			<button class="close"><i class="fa fa-times-circle"></i></button>
		</div>
		<div class="fq-modal-content">
			<h3>Team member info</h3>
		</div>
	</div>
</div>

<!-- signup modal -->
<div class="fq-modal" id="get-started-modal">
	<div class="close"></div>
	<div class="modal-wrpr">
		<div class="fq-modal-header">
		</div>
		<div class="fq-modal-content">
			<div class="signup-main">
				<div class="main">
					<h4>You are on the right track,</h4>
					<h1>SIGN UP as</h1>
					<button type="button" class="fq-btn btn-su-advisor">Advisor</button>
					<button type="button" class="fq-btn btn-su-advisor">Client</button>
				</div>

				<div class="sub">
					<div class="sub-main">
						<h2>SIGN UP as</h2>
						<button type="button" class="fq-btn btn-su-back">
							<i class="fa fa-chevron-left"></i>
							<span>Advisor</span>
						</button>
						<h1>SIGN UP with</h1>
						<button type="button" class="fq-btn btn-su-email">Sign up with Email</button>
						<button type="button" class="fq-btn fq-btn-fb btn-su-fb">
							<i class="fa fa-facebook-square"></i>
							Sign up with Facebook
						</button>    
						<div class="g-signin2" data-onsuccess="onSignIn"></div>
					</div>

					<div class="sub-form">
						<h2>SIGN UP as</h2>
						<button type="button" class="fq-btn btn-su-back">
							<i class="fa fa-chevron-left"></i>
							<span>Advisor</span>
						</button>
						<h2>SIGN UP with</h2>
						<form method="POST" id="frm-signup">
							<div class="form-group row justify-content-md-center">
								<div class="col-md-10">
									<input type="email" name="email" class="form-control" placeholder="Email Address" required>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-10">
									<div class="row">
										<div class="col-md-6 fq-col">
											<input type="text" name="fname" class="form-control" placeholder="First Name" required>
										</div>
										<div class="col-md-6 fq-col">
											<input type="text" name="lname" class="form-control" placeholder="Last Name" required>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-10">
									<div class="row">
										<div class="col-md-7 fq-col input-group">
											<div class="input-group-prepend">
											    <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
											 </div>
											<input type="date" name="bdate" class="form-control">
										</div>
										<div class="col-md-5 fq-col text-left">
											<label><input type="radio" name="gender" value="female">FEMALE</label>
											<label><input type="radio" name="gender" value="male">MALE</label>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-10">
									<input type="text" name="number" class="form-control" placeholder="Contact Number" required>
								</div>
							</div>

							<div class="form-group row justify-content-md-center advisor-frm-row">
								<div class="col-md-10">
									<div class="row">
										<div class="col-md-5 fq-col">
											<select name="service" class="form-control">
												<option value=""></option>
												<option value="investments">Investments</option>
											</select>
										</div>
										<div class="col-md-7 fq-col">
											<input type="text" name="company" class="form-control" placeholder="Company or Affiliation">
										</div>
									</div>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-10 input-group">
									<input type="password" name="pword" class="form-control" placeholder="Password" required>
									<div class="input-group-prepend">
									    <span class="input-group-text" id="icn-pword"><i class="fa fa-eye"></i></span>
									 </div>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-10">
									<input type="password" name="cpword" class="form-control" placeholder="Confirm Password" required>
									<span class="err-msg">Password not match!</span>
								</div>
							</div>

							<div class="form-group row justify-content-md-center">
								<div class="col-md-12">
									<button type="submit">SIGN UP</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="terms">
					By signing up, you agree to Canva's <br>
					<a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>
				</div>
				<div class="user">If you already have an account, <a href="#">LOG IN HERE.</a></div>
			</div>

			<div class="">
				
			</div>
		</div>
	</div>
</div>