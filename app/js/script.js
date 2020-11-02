// Плавный scroll
$(function(){
    $('#topArrow').on('click', function(e){
        $('html,body').stop().animate({ 
            scrollTop: $('#header').offset().top 
        }, 1000);
        e.preventDefault();
    });
});

$("body").on('click', '[href*="#header"]', function(e){
	let fixed_offset = 90;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
	e.preventDefault();
});

$("body").on('click', '[href*="#about-us"]', function(e){
	let fixed_offset = 90;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
	e.preventDefault();
});

$("body").on('click', '[href*="#expertise"]', function(e){
	let fixed_offset = 90;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
	e.preventDefault();
});

$("body").on('click', '[href*="#our-team"]', function(e){
	let fixed_offset = 90;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
	e.preventDefault();
});

$("body").on('click', '[href*="#contact"]', function(e){
	let fixed_offset = 90;
	$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
	e.preventDefault();
});

// Модальное окно регистрации
$(document).ready(function($) {
	$('.popup-reg-open').click(function() {
		$('.popup-reg').fadeIn();
		return false;
	});	
	
	$('.popup-close').click(function() {
		$(this).parents('.popup-reg').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-reg').fadeOut();
		}
	});
	
	$('.popup-reg').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});
});

// Модальное окно авторизации
$(document).ready(function($) {
	$('.popup-log-open').click(function() {
		$('.popup-log').fadeIn();
		return false;
	});	
	
	$('.popup-close').click(function() {
		$(this).parents('.popup-log').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-log').fadeOut();
		}
	});
	
	$('.popup-log').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});
});

//Валидация регистрации
// $(document).ready(function() {
// 	$('#reg-form').submit(function(e) {
// 	  e.preventDefault();
// 	  let first_name = $('#fname').val();
// 	  let last_name = $('#lname').val();
// 	  let email = $('#user_email').val();
// 	  let password = $('#psword').val();
// 	  let c_password = $('#c_psword').val();
   
// 	  $(".error").removeClass('.error');
   
// 	  if (first_name.length < 1) {
// 		$('#fname').addClass('error');
// 	  }

// 	  if (last_name.length < 1) {
// 		$('#lname').addClass('error');
// 	  }

// 	  if (email.length < 1) {
// 		$('#user_email').addClass('error');
// 	  } else {
// 		let regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}.){1,125}[A-Z]{2,63}$/;
// 		let validEmail = regEx.test(email);
// 		if (!validEmail) {
// 		  $('#email').addClass('error');
// 		}
// 	  }

// 	  if (password.length < 8) {
// 		$('#psword').addClass('error');
// 	  }

// 	  if (c_password !== password || c_password.length < 8) {
// 		$('#c_psword').addClass('error');
// 	  }

// 	});
// });