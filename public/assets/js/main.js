define([
	'parallax',
	'bootstrap'
],function(skrollr){

	$("body").on('click', '.contact', function(event) {
			$('html, body').stop().animate({
				'scrollTop': parseInt($("#contact").offset().top)
			}, 600, function(){
				document.getElementById("name").focus();
			});

			//$("#contact").find("form").find('input[name="name"]').focus();
	}).on('click', '.features', function(event) {
		var $target = $("#features-section");

		if ($target.length > 0) {
			$('html, body').stop().animate({
				'scrollTop': parseInt($target.offset().top) - 100
			}, 800, 'swing');
		}
	});

	$('#navbar').affix({
		offset: {
			top: 100
		}
	}).on('click', '#bt-cel', function(event) {
		event.preventDefault();		
		$("#navbar").toggleClass('mobile-menu-active');
	}).find('.links').on('click', 'a', function(event) {
		$("#navbar").removeClass('mobile-menu-active');
	});


	var validate = {
		empty: function(id)
		{
			var e = document.getElementById(id);

			if (e) {
				if (e.value.length > 0) {
					return false;
				}
			};

			return true;
		},
		email: function(id)
		{
			var e = document.getElementById(id),
			filter  = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			
			if (e) {
				return (filter.test(e.value));
			}

			return false;
		}
	};

	var messages = {
		clean: function(target)
		{
			var e = document.getElementById(target);

			if (e) {
				e.innerHTML = '';
			};
		},
		warning: function(target, msg)
		{
			var e = document.getElementById(target);

			if (e) {
				e.innerHTML = '<div class="alert alert-warning"><strong>Error</strong> '+msg+'</div>';
			};
		},
		error: function(target, msg)
		{
			var e = document.getElementById(target);

			if (e) {
				e.innerHTML = '<div class="alert alert-danger"><strong>Error</strong> '+msg+'</div>';
			};
		},
		success: function(target, msg)
		{
			var e = document.getElementById(target);

			if (e) {
				e.innerHTML = '<div class="alert alert-success"><strong>Error</strong> '+msg+'</div>';
			};
		}
	}


	$("#contact").on('submit', 'form', function(event) {
		event.preventDefault();

		messages.clean("errors");
		messages.clean("captchaError");

		if (validate.empty('name')) {
			messages.warning("errors", "The Name field is required.");
			return true;
		} else if(validate.email('email') == false) {
			messages.warning("errors", "Please input a valid email adress.");
			return true;
		} else if (validate.empty('message')) {
			messages.warning("errors", "The Message is required.");
			return true;
		};

		var response = grecaptcha.getResponse(),
		self         = $(this);

		if (response.length > 0) {
			$.ajax({
				url: self.attr('action'),
				type: 'POST',
				dataType: 'json',
				data: {
					name: document.getElementById('name').value,
					email: document.getElementById('email').value,
					message: document.getElementById('message').value
				},
			})
			.done(function() {
				messages.success("errors", "Your query has been sent.");
			})
			.fail(function(response) {
				console.log(response)
				console.log("error");
			})
			.always(function() {
				console.log("complete");
			});
			
		} else {
			messages.warning("captchaError", 'Please validate the captcha');
		}
	});

	var s = skrollr.init();
	if (s.isMobile()) {
		s.destroy();
	}
	
})