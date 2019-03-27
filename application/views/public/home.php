<?php defined('BASEPATH') OR exit('No direct script accesss allowed'); ?>

<section class="heading">
	<div class="hText">
		<h1>Imagine your hub <br> for real people and advisors.</h1>
		<a href="<?=base_url('signup')?>" class="btn btn-theme" style="
    font-size: 23px;">Sign up for FREE</a>
		<p>Sign up now for greater deals once we are live</p>
	</div>

	<div class="hreg-box">
		<h2><b>SIGN UP</b> as</h2>
		<div class="hreg-btn hreg-advisor">
			<i class="fa fa-user"></i> <a href="<?=base_url('form/advisor/signup')?>" class="btn btn-theme2">Advisor</a>
		</div>
		<div class="hreg-btn hreg-client">
			<i class="fa fa-user"></i> <a href="<?=base_url('form/client/signup')?>" class="btn btn-theme2">Client</a>
		</div>
		<div class="fineprint">
			<p>Once you registered, you agree to Finquor's</p>
		<p><a href="#" data-toggle="modal" data-target="#termsConditionsModal">Terms & Conditions</a> and <a href="#" data-toggle="modal" data-target="#termsConditionsModal">Privacy Policy</a></p>
		</div>
		
	</div>

	<button class="btn-explore">
		Explore More <i class="fa fa-chevron-down"></i>
	</button>
</section>

<section class="sOne">
	<div class="wrapper">
		<h1 class="title">How does FinQuor help you?</h1>
		<div class="row">
			<div class="col">
				<div class="item">
					<div class="img-wrapper">
						<img src="<?=base_url('assets/img/home-search-icon.png')?>" />
					</div>
					<h3>Search for an advisor</h3>
					<p>Find a wide range of financial advisors based on your preferred location that suits your financial needs.</p>
				</div>
			</div>

			<div class="col">
				<div class="item">
					<div class="img-wrapper">
						<img src="<?=base_url('assets/img/home-meeting-icon.png')?>" />
					</div>
					<h3>Set a meeting</h3>
					<p>Talk with your chosen advisor and start to set a meeting to discuss your financial priorities.</p>
				</div>
			</div>

			<div class="col">
				<div class="item">
					<div class="img-wrapper">
						<img src="<?=base_url('assets/img/home-plan-icon.png')?>" />
					</div>
					<h3>Engage the plan</h3>
					<p>Once you're all set, you can implement the agreed financial plan so that you can target your financial goals.</p>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="sTwo">
	<div class="wrapper">
		<h1 class="title">What is your financial priority?</h1>
		<div class="row">
			<div class="col">
				<a href="#"  data-toggle="modal" data-target="#investments">
					<div class="bg-im" style="background: #fff url(<?=base_url('assets/img/investments.jpg')?>) no-repeat 50%; background-size: 100% 100%;">
						<h2>Investments</h2>
					</div>
				</a>
				<!-- Modal -->
				<div class="modal fade" id="investments" tabindex="-1" role="dialog" aria-labelledby="investmentsLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="investmentsLabel">Investments</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle"></i>
								</button>
							</div>

							<div class="modal-body">
								<div class="inner">
									<strong>1. Stock Market</strong>
									<br> 
									Would you like to enter the complex world of Stock market investment but still afraid of the concepts and technicalities behind buying and selling of shares?
									<br> 
									Now you don’t have to worry because FINQUOR™ will help and guide you to become a smart stock market investor. Thru FINQUOR™, you will be able to connect with our top and reliable Financial Advisers and experienced investors that can help you understand the basic concepts on how to start and earn in the stock market.
									<br><br> 
									<strong>2. Mutual Fund</strong>
									<br>
									Mutual Fund is an investment vehicle made up of pooled funds from many investors. It is operated by Fund Managers who invest the pooled fund into different assets such as government bonds, securities and stocks to produce a higher rate of capital gain and income for the investors. At FINQUOR™, you will be able to connect and look for licensed mutual fund advisors that can guide you.   
									<br><br>
									<strong>3. UITF</strong>
									<br>
									A Unit Investment Trust Fund or UITF is just like a mutual fund, it is a pool of funds from many investors that are invested in different investment instruments such as stocks, government bonds and money market which are mainly operated and managed by commercial banks. Starting capital to open an account in UITF may vary depending on the bank that you will choose but some banks offer a minimum of Php10, 000.00 as initial capital. 
									<br>
									At FINQUOR™, you can seek advice from experienced investors and financial advocates to handle your concern regarding UITF investment.
									<br><br>
									<strong>4. FOREX</strong>
									<br>
									Foreign exchange market or FOREX is a global decentralized or Over the Counter Market for the trading of currencies. Here in the Philippines, FOREX is also known as one of the investment tool being used. It is a 24 hours cash market wherein currencies are paired and traded.
									<br> 
									If you consider entering the FOREX world, FINQUOR™ can connect you to individuals who have a variety of experience to share when it comes to Forex Trading. 
									<br><br>
									<strong>5. Real Estate</strong>
									<br>
									Real estate investment has plenty of opportunities in making profits and gains. You may have different goals and purpose of having this investment, maybe for personal use and ownership or rental profit. There are factors to be considered in this investment vehicle such as acquisition cost, holding costs, renovation costs and sales cost. There are also potential risks so it is important that you connect to a reliable broker or agent that could assist you with your inquiries and concerns.
									<br> 
									At FINQUOR™, we can help you connect with licensed brokers and agents from different developers or real estate companies that you can choose from.
								</div> <!-- inner div -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<a href="#"  data-toggle="modal" data-target="#financial">
					<div class="bg-im" style="background: #fff url(<?=base_url('assets/img/financial-services.jpg')?>) no-repeat 50%; background-size: 100% 100%;">
						<h2>Financial Services</h2>
					</div>
				</a>
				<!-- Modal -->
				<div class="modal fade" id="financial" tabindex="-1" role="dialog" aria-labelledby="financialLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="financialLabel">Financial Services</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle"></i>
								</button>
							</div>

							<div class="modal-body">
								<div class="inner">
									FINQUOR™ can bridge you to financial consultants for a wide range of financial services!
									<br><br>
									<strong>Tax compliance services</strong>
									<br>
									Tax compliances and deadlines give a tremendous headache and stress to start-ups and/or business owners. Tax management is a big challenge to businesses that is why at FINQUOR™, we can bridge you to tax accountants and tax auditors to provide aid and relieve worry to tax compliances. 
									<br><br>
									FINQUOR™ can partner you with a financial consultant to prepare and file the following tax returns, among others, based on your accounting records:
									<br>
									<ul>
										<li>Monthly withholding taxes and annual information returns (compensation, final and expanded)</li>
										<li>Quarterly fringe benefits tax</li>
										<li>Monthly and quarterly value-added tax</li>
										<li>Quarterly and annual corporate income tax</li>
										<li>Documentary stamp tax</li>
									</ul>
									They can also handle the following services:
									<br>
									<ul>
										<li>Payment of annual registration fee with the BIR</li>
										<li>Registration of manual books of accounts, loose leaf records or computerized accounting system</li>
										<li>Assistance in enrollment to eFPS</li>
										<li>Application for authority to print (ATP) invoices and official receipts</li>
									</ul> 
									If you are struggling in managing your company's books of accounts, stressed about the results of operation of your business and unaware of the cash position of your company, you might need to talk to a bookkeeper or accountant. Bookkeeping and accounting is a cornerstone operation in any business whether it is a new entity. Managing your books especially the ins and outs of your company's finances is crucial that's why it should be handled by skilled professionals.
									<br>
									Here at FINQUOR™, we pool accounting practitioners, bookkeepers, auditors and CPAs committed to providing accurate and helpful accounting solutions.
									<br><br>
									<strong>Accounting services</strong>
									<br>
									FINQUOR™ can bridge you to finance professionals for comprehensive accounting services which include:
									<br>
									<ul>
										<li>Bookkeeping</li>
										<li>Recording of monthly transactions in the registered books of accounts</li>
										<li>Preparation of monthly trial balance, balance sheet, income statement, cash flows, and account schedules/reconciliations</li>
										<li>Cash management</li>
										<li>Invoice and payment processing</li>
										<li>Preparation of monthly bank reconciliation</li>
										<li>Statutory audit assistance</li>
										<li>Liaising with your external auditors and answering audit queries</li>
										<li>Updating trial balances with year-end audit adjustments</li>
										<li>Statutory financial statements</li>
										<li>Preparation of draft statutory financial statements for your external auditor’s review</li>
										<li>Submission of audited statutory financial statements to the BIR, SEC, and PEZA</li>
									</ul>
									<br>
									<strong>CREDIT CARD SERVICES</strong>
									<br>
									A credit card provides you with instant access to money in case of an emergency. A credit card can also provide an instant solution to pay off many unexpected expenses. It also offers you the following:
									<br>
									<ul>
										<li>Online Purchases</li>
										<li>Emergency money</li>
										<li>Convenience when traveling</li>
									</ul>
									Although credit card carries financial risks such as possible drowning to debts due to lack of discipline, advisors can give sound financial advice on how to use your credit card properly. 
									<br>
									There are many more financial services FINQUOR™ can help you with. Try locating for your competent finance professionals now! Whether you are someone who needs service or provides service, FINQUOR™ can be your tool to answer your needs!
								</div> <!-- inner div -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<a href="#"  data-toggle="modal" data-target="#business">
					<div class="bg-im" style="background: #fff url(<?=base_url('assets/img/business_opportunities.jpg')?>) no-repeat 50%; background-size: 100% 100%;">
						<h2>Business Opportunities</h2>
					</div>
				</a>
				<!-- Modal -->
				<div class="modal fade" id="business" tabindex="-1" role="dialog" aria-labelledby="businessLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="businessLabel">Business Opportunities</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle"></i>
								</button>
							</div>

							<div class="modal-body">
								<div class="inner">
									Thinking of starting your own business? Are you actively looking for someone who can help you work out your business plans? Do you have a current business looking for the right people to partner with?
									<br><br>
									You might be amazed at how well-known people started and sustained their businesses. You might be surprised how few bucks brought entrepreneurs and businessmen millions of pesos in ROI. While we have conventional methodologies in doing business and evenly considering the vast business opportunities we have right now, only a few are sustainable and successful for years. There is no straight formula for achieving a successful business but there are guidelines you can consider.
									<br><br>
									FINQUOR™ offers a platform for determining the right advisor for you! If you are having a hard time locating for the right business advisor, FINQOUR™ answers that need by bringing you to the right one. By subscribing to the service, financial advisors can freely connect with people in business-related services and at the same time, people can directly communicate to financial advisors whatever the dire need is. FINQUOR™ will help you locate prospective business partners or consultants looking for the same line of business and passion as yours!
									<br><br>
									Whatever your need for business, FINQUOR™, your one-stop shop offers a deal for you! 
								</div> <!-- inner div -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col">
				<a href="#"  data-toggle="modal" data-target="#insurance">
					<div class="bg-im" style="background: #fff url(<?=base_url('assets/img/Insurance_and_Healthcare.jpg')?>) no-repeat 50%; background-size: 100% 100%;">
						<h2>Healthcare & Insurance</h2>
					</div>
				</a>
				<!-- Modal -->
				<div class="modal fade" id="insurance" tabindex="-1" role="dialog" aria-labelledby="insuranceLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h3 class="modal-title" id="insuranceLabel">Healthcare & Insurance</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<i class="fa fa-times-circle"></i>
								</button>
							</div>

							<div class="modal-body">
								<div class="inner">
									<strong>LIFE INSURANCE</strong>
									<br>
									Our life is where all of our financial responsibilities started. From the day we were conceived up until today but…it doesn’t end there. We will raise a family and eventually, our child will have children and when our time comes, who will take care of them?
									<br>
									Life Insurance is a contract between an insurance policy holder and an insurer, wherein the insurance company will pay a guaranteed sum of money to your beneficiary or beneficiaries upon the death of the insured in exchange for premium payments. Contracts and benefits may vary depending on the company’s policy and wide-range offers.
									<br> 
									At FINQUOR™, we can help you connect to a premier advisor that suits your need in getting an insurance policy. Take the Financial Needs Analysis now!
									<br><br>
									<strong>VARIABLE UNIVERSAL LIFE INSURANCE (VUL)</strong>
									<br>
									Having our finances protected thru Life Insurance is great! But how does an insurance policy infused with an investment component sounds? 
									<br>	 
									Variable Universal Life Insurance (often shortened to VUL) or in other terms, Unit Linked Insurance is a type of life insurance that builds fund or cash value. VUL is more likely a life insurance and mutual funds combined into one policy. The name variable component refers on your capability to invest in different accounts whose values vary – it varies because the company is investing the money in different fund types, from bond markets up to stock markets or equity that can cater your medium-to-long term goals, educational needs of your children and retirement.
									<br>
									Your Advisor can help you assess yourself on how conservative you are in investing your money.  Please don’t forget that the older you get, the lesser time you can save for rainy days; time is your friend.
									<br>
									At FINQUOR™, we can help you connect to an advisor that can assist you to address your future needs. Take that leap and connect with us today!
									<br><br>
									<strong>NON-LIFE INSURANCE</strong>
									<br>
									Other than human life, we also have other assets or properties that we want to protect such as but not limited to automobiles, house and its content and our business. General insurance or Non-life insurance policies are typically any types of insurance which are not be classified as life insurance itself.
									<br> 
									This kind of insurance covers insurance of properties against fire, burglary, theft, errors, and omissions for professionals, credit insurance and/or etc. Unlike life insurance policy, the term of this kind of insurance is normally limited. The usual term for Non-life insurance lasts for a span of a particular economic event or for a given period of time which the policy states. There are common forms of general insurance, which includes, motor, fire, home, marine cargo, commercial, travel, accident and other miscellaneous forms of general insurance.
									<br>
									At FINQUOR™, we can help you connect to an advisor who can cater to your needs. Connect with us today!
									<br><br>
									<strong>HEALTHCARE MAINTENANCE ORGANIZATION</strong>
									<br>
									Having good health is our primary tool to continue our day-to-day activities - at work, at home or even at play! Stress, lifestyle and other predisposing factors may cause medical emergencies or critical illness. Having a Healthcare Insurance policy or a benefit from a Healthcare Maintenance Organization (often shortened to HMO), can lessen your burden from financial risks, can gain peace of mind while you’re on health recovery.
									<br> 
									Most companies cover the medical and surgical expenses of the insured individual due to hospitalization from an illness. HMO often include your pre and post hospitalization expenses, ambulance charges, daily cash allowance for income replacement, etc. depending on the agreed policy. 
									<br>
									At FINQUOR™, we can help you connect with a healthcare advisor that suits your need in getting a Healthcare insurance policy. Come and connect with us today.
								</div> <!-- inner div -->
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<a href="<?=base_url('signup')?>" class="btn btn-theme">Sign up for FREE</a>
	</div>
</section>


<section class="sThree" ng-app="appHomeInquiry" ng-controller="homeInquiryCtrl">
	<div class="wrapper">
		<h1 class="title">Send us your inquiry!</h1>
		<p>*required</p>

		<form id="frm-home-inquiry" name="frmHomeInquiry" class="frm-inquiry">
			<div class="row">
				<div class="col">
					<div class="input-group mb-2">
						<label for="name">Name*</label>
						<div class="input-group-prepend">
							<div class="input-group-text"><i class="fa fa-user"></i></div>
						</div>
						<input type="text" class="form-control" name="name" placeholder="Full Name" required>
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
						<option value="clients">Clients</option><option value="services">Services</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col" style="text-align:left;">
					<label for="comments">Comments*</label>
					<textarea name="comments" placeholder="Enter Comments to help understand better..." class="form-control" name="comments" rows="5"></textarea>
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
</section>