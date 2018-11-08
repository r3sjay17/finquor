<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

		</div>
	</div>
	<!-- ./end header -->

	<div class="fq-content">

		<!-- financial priority -->
		<div class="priority-row">
			<div class="container">
				<h3 class="row-title">What is your financial priority?</h3>
				<div class="inner-hldr">
					<div class="row">
						<div class="col-md-3 fq-col inv-col">
							<div class="content">
								<h2>Investments</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 fq-col fin-ser-col">
							<div class="content">
								<h2>Financial Services</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 fq-col bus-opp-col">
							<div class="content">
								<h2>Business Opportunities</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
						</div>
						
						<div class="col-md-3 fq-col hlth-ins-col">
							<div class="content">
								<h2>Healthcare & Insurance</h2>
								<div class="icn-hldr">
									<i class="fa fa-chevron-down"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 btn-hldr">
							<a href="#" class="btn-get-started">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- ./end body content -->


	<!-- modal -->
	<div class="fq-modal" id="investments-modal" <?=($service == 'investments') ? 'style="display: block"' : ''?>>
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
				<h2 class="header">Investments</h2>
				<button class="close"><i class="fa fa-times-circle"></i></button>
			</div>
			<div class="fq-modal-content">
				Stock Market
				<br><br>
				Would you like to enter the complicated world of stock market investment? Are you still afraid of the concepts and  technicalities behind buying and selling of shares? Now you don't have to worry because FINQUOR will help and guide you to become a smart stock market investor. Thru FINQUOR you will be able to connect with our top and reliable Financial Advisers and experienced investors that could help you easily understand the basics, how to start and earn in the stock market.  
				<br><br>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>

	<div class="fq-modal" id="bus-opp-modal" <?=($service == 'business-opportunities') ? 'style="display: block"' : ''?>>
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
				<h2 class="header">Business Opportunities</h2>
				<button class="close"><i class="fa fa-times-circle"></i></button>
			</div>
			<div class="fq-modal-content">
				Thinking of starting your own business? Are you actively looking for someone who can help you work out your business plans? Do you have a current business looking for the right people to partner with? Are you strategically looking for expansion and you need business partners worldwide? Whatever your need for business, FINQUOR&trade;, your one stop shop offers a deal for you!
				<br><br>
				You might be amazed at how well-known people started and sustained their businesses. You might be surprised how few bucks brought entrepreneurs and businessmen millions of pesos in ROI. 
			</div>
		</div>
	</div>

	<div class="fq-modal fq-slick" id="fin-ser-modal" <?=($service == 'financial-services') ? 'style="display: block"' : ''?>>
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
				<h2 class="header">Financial Services</h2>
				<button class="close"><i class="fa fa-times-circle"></i></button>
			</div>
			<div class="fq-modal-content">
				<div class="fq-slider-wrapper">
					<div class="fq-slider-holder">
						Tax Compliance Services
						<br><br>
						Tax compliances and deadlines give a tremendous headache and stress to start-ups and/or business owners. Tax management is a big challenge to businesses that is why at FINQUOR&trade;, we can bridge you to tax accountants and tax auditors to provide aid and relive worry to tax compliances. 
						<br><br>
						FINQUOR&trade; can partner you with a financial consultant to prepare and file the following tax returns, among others, based on your accounting records:
					</div>
					<div class="fq-slider-holder">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						<br><br>
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fq-modal" id="hlth-ins-modal" <?=($service == 'healthcare-and-insurance') ? 'style="display: block"' : ''?>>
		<div class="close"></div>
		<div class="modal-wrpr">
			<div class="fq-modal-header">
				<h2 class="header">Healthcare & Insurance</h2>
				<button class="close"><i class="fa fa-times-circle"></i></button>
			</div>
			<div class="fq-modal-content">
				Life Insurance
				<br><br>
				Our life is where all finances started, from the day we were born up until today but it doesn't end here. We still have our loved ones up to the next generation who will need our help if our time comes - where death is inevitable. Protecting it can prolong and secure not only our financial stability and growth but also for the people surrounding you.
				<br><br>
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
			</div>
		</div>
	</div>

<?php if(!empty($service)) : ?>
	<script type="text/javascript">
		$('.fq-slider-wrapper').slick({
			slidesToShow: 1,
		    slidesToScroll: 1,
		    arrows: false,
		    dots: true,
		    adaptiveHeight: true,
		    appendDots: $('.fq-slick .fq-modal-content'),
		});
		$('.slick-dots li:first-child').addClass('slick-active');
		
		$('.slick-dots').on('click', 'li button', function() {
			$('.slick-dots li').each(function() {
				$(this).removeClass('slick-active');
			});
			$(this).parent().addClass('slick-active');
		});
	</script>
<?php endif; ?>