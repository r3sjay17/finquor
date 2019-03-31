jQuery(function($) {

	var ndate = new Date();

	$('.datepicker').datepicker({
		autoclose: true, 
      	format: "mm/dd/yyyy", 
        maxDate: ndate
	});

	$('.heading').on('click', '.btn-explore', function() {
 		$('html, body').animate({scrollTop: $('.sOne').offset().top}, 'slow');
	});

	/* signup form */
	$('#frm-signup .passEye').on('click', 'button', function(e) {
		e.preventDefault();
		if($(this).find('.fa').hasClass('fa-eye-slash')) {
			$('#frm-signup input[name=pwd]').attr('type', 'text');
			$(this).find('.fa').removeClass('fa-eye-slash');
			$(this).find('.fa').addClass('fa-eye');
		} else {
			$('#frm-signup input[name=pwd]').attr('type', 'password');
			$(this).find('.fa').addClass('fa-eye-slash');
			$(this).find('.fa').removeClass('fa-eye');
		}
	});

	$('#frm-signup, #frm-api-signup').on('submit', function(e) {
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$(this).find('button[type=submit]').append(' <i class="fa fa-spinner fa-spin"></i>');
		$(this).find('button').attr('disabled', true);

		$.ajax({
			method: "POST",
			url: base_url + "/actions/signup",
			contentType: false,
			cache: false,
			processData: false,
			data: formData,
			success: function(response) {
				var data = JSON.parse(response);
				if(data.status) {
					$('.modal#signupalert').addClass('success');
					$('.modal#signupalert').modal('show');
					setTimeout(function() {
						window.location = base_url;
					}, 3000);
				} else {
					$('.modal#erroralert').addClass('error');
					$('.modal#erroralert .modal-body p').html(data.response);
					$('.modal#erroralert').modal('show');
				}
		
			grecaptcha.reset();
			$('#frm-signup button[type=submit], #frm-api-signup button[type=submit]').html('SIGNUP');
			$('#frm-signup button, #frm-api-signup button').attr('disabled', false);
			}
		});
	});


	/* contact form */
	$('#frm-contact, #frm-home-inquiry').on('submit', function(e) {
		e.preventDefault();
		var formData = new FormData($(this)[0]);
		$(this).find('button[type=submit]').append(' <i class="fa fa-spinner fa-spin"></i>');
		$(this).find('button').attr('disabled', true);

		$.ajax({
			method: "POST",
			url: base_url + "/actions/sendMessage",
			contentType: false,
			cache: false,
			processData: false,
			data: formData,
			success: function(response) {
				var data = JSON.parse(response);
				if(data.status) {
					$('.modal#contactalert').addClass('success');
					$('.modal#contactalert .modal-body p').html(data.response);
					$('.modal#contactalert').modal('show');
					setTimeout(function() {
						window.location.reload();
					}, 3000);
				} else {
					$('.modal#erroralert').addClass('error');
					$('.modal#erroralert .modal-body p').html(data.response);
					$('.modal#erroralert').modal('show');
				}
		
			grecaptcha.reset();
			$('.frm-inquiry button[type=submit]').html('SIGNUP');
			$('.frm-inquiry button').attr('disabled', false);
			}
		});
	});
	
});