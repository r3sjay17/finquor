jQuery(function($) {

	function stickyEvent() {
		var scroll = $(window).scrollTop();

		if(scroll > 30) {
			$('.fq-landing .fq-header .lnk-wrpr').addClass('fq-sticky');
		} else {
			$('.fq-landing .fq-header .lnk-wrpr').removeClass('fq-sticky');
		}

		//for back to top button
		if(scroll > 150) {
			$('.back-to-top').fadeIn(800);
		} else {
			$('.back-to-top').fadeOut(800);
		}

		//for share button
		if(scroll > 1000) {
			$('.home-page .social-links.fq-sticky').fadeOut(800);
		} else {
			$('.home-page .social-links.fq-sticky').fadeIn(800);
		}
	}

	$(window).on('scroll', function() {
		stickyEvent();
	});

	$(window).on('load', function() {
		stickyEvent();
	});


	//header 
	$('.icn-hldr').on('click', '.menu-icon', function() {
		$('.fq-header .lnk-wrpr .right-panel').css('right', 0);
	});
	$('.fq-landing .fq-header .right-panel').on('click', '.close-menu-btn', function() {
		$('.fq-header .lnk-wrpr .right-panel').css('right', '-100%');
	});


	$('.fq-landing').on('click', '.btn-explore button', function() {
 		$('html, body').animate({scrollTop: $('.fq-landing.home-page .btn-explore').offset().top}, 'slow');
	});

	$('.fq-modal').on('click', '.close', function() {
		$(this).closest('.fq-modal').fadeOut(800);
	});

	$('body').on('click', '.back-to-top', function() {
		$("html, body").animate({scrollTop: 0}, 1500);
	});
	
	/*$('.fq-menu .menu-item .btn-login, #get-started-modal .fq-modal-content .user a').on('click', function(e) {
		e.preventDefault();
		if($(this).hasClass('drop')) {
			$('.login-wrapper').fadeOut(800);
			$('.login-wrapper:before').fadeOut(800);
			$(this).removeClass('drop');
		} else {
			$('.login-wrapper').fadeIn(800);
			$('.login-wrapper:before').fadeIn(800);
			$(this).addClass('drop');
		}
		$('.fq-modal').hide();
	});*/
	
	$('.fq-menu .menu-item').on('click', '.btn-user', function(e) {
		e.preventDefault();
		if($(this).hasClass('drop')) {
			$('.settings-wrpr').fadeOut(800);
			$('.settings-wrpr:before').fadeOut(800);
			$(this).removeClass('drop');
		} else {
			$('.settings-wrpr').fadeIn(800);
			$('.settings-wrpr:before').fadeIn(800);
			$(this).addClass('drop');
		}
	});

	/*Signup form events*/
	var type = '';
	var signuphldr = $('#get-started-modal .signup-main');
	signuphldr.on('click', '.main .fq-btn', function() {
		type = $(this).html();
		signuphldr.find('.sub .sub-main .btn-su-back span').html(type);
		signuphldr.find('.main').hide();
		signuphldr.find('.sub').show();
	});

	signuphldr.on('click', '.sub .sub-main .btn-su-back', function() {
		signuphldr.find('.main').show();
		signuphldr.find('.sub').hide();
	});

	signuphldr.on('click', '.sub .sub-main .btn-su-email', function() {
		signuphldr.find('.sub .sub-main').hide();
		signuphldr.find('.sub .sub-form').show();
		signuphldr.find('.sub .sub-form .btn-su-back span').html(type);

		if(type == 'Client') {
			signuphldr.find('.sub .sub-form .advisor-frm-row').hide();
		} else {
			signuphldr.find('.sub .sub-form .advisor-frm-row').show();
		}
	});

	signuphldr.on('click', '.sub .sub-form .btn-su-back', function() {
		signuphldr.find('.sub .sub-main').show();
		signuphldr.find('.sub .sub-form').hide();
	});


	/* pages function */
	//home
	$('.fq-header .content-wrpr .btn-get-started, .priority-row .btn-get-started, .btn-no-account, .services-page .btn-get-started, .subscription-row .fq-client, .subscription-row .fq-advisor, .fq-header #login-item .btn-login').on('click', function(e) {
		e.preventDefault();
		$('.login-wrapper').fadeOut(800);
		$('.login-wrapper:before').fadeOut(800);
		$('#get-started-modal').fadeIn(800);
	});

	//about
	$('.team-wrpr .inner-hldr').slick({
		slidesToShow: 1,
	    slidesToScroll: 1,
	    //arrows: true,
	    nextArrow: "<span class='slick-next pull-right carousel-btns'></span>"
	});
	$('.team-wrpr').on('click', '.btn-member-read-more', function() {
		$('.fq-modal.fq-members').fadeIn(800);
	});

	//services
	function servicesSlider() {
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
	}

	$('.services-page .priority-row').on('click', '.inv-col', function() {
		$('#investments-modal').fadeIn(800);
		servicesSlider();
	});

	$('.services-page .priority-row').on('click', '.bus-opp-col', function() {
		$('#bus-opp-modal').fadeIn(800);
		servicesSlider();
	});

	$('.services-page .priority-row').on('click', '.fin-ser-col', function() {
		$('#fin-ser-modal').fadeIn(800);
		servicesSlider();
	});

	$('.services-page .priority-row').on('click', '.hlth-ins-col', function() {
		$('#hlth-ins-modal').fadeIn(800);
		servicesSlider();
	});

	//signup
	$('#frm-signup').on('submit', function(e) {
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		var pwd = $('#frm-signup input[name=pword]').val();
		var cpwd = $('#frm-signup input[name=cpword]').val();
		var type = $('.signup-main .sub-form .btn-su-back span').html();
		formData.append('type', type);

		if(pwd != '' && pwd != cpwd) {
			$('#frm-signup input[name=cpword]').focus();
			$('.err-msg').slideDown(800);
			setTimeout(function() {
				$('.err-msg').slideUp(800);
			}, 2000);
		} else {
			$(this).find('button[type=submit]').prepend('<i class="fa fa-spinner fa-spin"></i> ');
			$.ajax({
				method: "POST",
				url: site + "actions/signup",
				contentType: false,
				cache: false,
				processData: false,
				data: formData,
				success: function(response) {
					console.log(response)
					/*var data = JSON.parse(response);
					if(data.status) {
						signuphldr.find('.main').show();
						signuphldr.find('.sub').hide();
						signuphldr.find('.sub .sub-main').show();
						signuphldr.find('.sub .sub-form').hide();
						$('#frm-signup').trigger('reset');
						$('#get-started-modal').fadeOut(800);
						$('.fq-modal.fq-alert .fq-modal-content').html('<h3>Kindly check your email for confirmation</h3>');
						$('.fq-modal.fq-alert .fq-modal-content').html('<DIV>'+ data.response +'</DIV>');
						$('.fq-modal.fq-alert').fadeIn(800);
					} else {
						$('#frm-signup .error-msg').html(data.response);
						$('#frm-signup .error-msg').slideDown(800);
						setTimeout(function() {
							$('#frm-signup .error-msg').slideUp(800);
						}, 3000);
					}*/
					grecaptcha.reset();
					$('#frm-signup button[type=submit]').html('SIGN UP');
				}
			});
		}
	});

	$('.login-wrapper').on('click', '.fq-btn-advisor, .fq-btn-client', function() {
		//authenticate({'name': 'Resty Jay'}, 'email');
	});

	$('#frm-signup').on('click', '#icn-pword', function() {
		if($('#frm-signup input[name=pword]').attr('type') == 'password') {
			$('#frm-signup input[name=pword]').attr('type', 'text');
		} else {
			$('#frm-signup input[name=pword]').attr('type', 'password')
		}
	});

	$('#frm-signup').on('blur', 'input[name=cpword]', function() {
		var pwd = $('#frm-signup input[name=pword]').val();
		if(pwd != '' && pwd != $(this).val()) {
			$('#frm-signup input[name=cpword]').focus();
			$('.err-msg').slideDown(800);
		}
		setTimeout(function() {
			$('.err-msg').slideUp(800);
		}, 2000);
	});

	$('#frm-inquiry, #frm-contact').on('submit', function(e) {
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$(this).find('button[type=submit]').html('Submit <i class="fa fa-spinner fa-spin"></i>');

		$.ajax({
			method: "POST",
			url: site + "main/sendMessage",
			contentType: false,
			cache: false,
			processData: false,
			data: formData,
			success: function(response) {
				var data = JSON.parse(response);
				if(data.status) {
					$('#frm-inquiry, #frm-contact').trigger('reset');
				}
				grecaptcha.reset();
				$('.fq-modal.fq-alert .fq-modal-content').html(data.response);
				$('.fq-modal.fq-alert').fadeIn(800);
				$('#frm-inquiry, #frm-contact').find('button[type=submit]').html('Submit <i class="fa fa-chevron-right"></i>');
			}
		});
	});

});



/**
* Send API data
*/
function authenticate(data, provider) {
	$.ajax({
		method: "POST",
		url: site + "authenticate",
		data: {data: data, provider: provider},
		success: function(response) {
			var data = JSON.parse(response);
			if(data.status) {
				window.location = data.response;
			}
		}
	});
}
function unsetSession() {
	$.ajax({
		method: "POST",
		url: site + "main/logout",
		data: {logout: 1},
		success: function(response) {
			//window.location = response;
		}
	});
}

/* Google API */
function onSignIn(googleUser) {
  	var profile = googleUser.getBasicProfile();
  	authenticate(profile, 'google');
}

//logout user from google
function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function() {
    	var site = "https://accounts.google.com/logout";
    	document.getElementById('googlelogoutframe').src = site;
    	unsetSession();
  		window.location.reload();
    });
}
// Called when Google Javascript API Javascript is loaded
function HandleGoogleApiLibrary() {
	// Load "client" & "auth2" libraries
	gapi.load('client:auth2',  {
		callback: function() {
			// Initialize client & auth libraries
			gapi.client.init({
		    	apiKey: 'website-dev-api-1537885616579',
		    	clientId: '471011139323-rap0mihmqg6nscouhhg2m7ve0iccd08r.apps.googleusercontent.com',
		    	scope: 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me'
			}).then(
				function(success) {
			  		// Libraries are initialized successfully
		  			// You can now make API calls
				}, 
				function(error) {
					// Error occurred
					// console.log(error) to find the reason
			  	}
			);
		},
		onerror: function() {
			// Failed to load libraries
		}
	});
}