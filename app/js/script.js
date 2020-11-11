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

$(window).scroll(function () {
	let searchHeight = $('.search-block').innerHeight();
	let contentHeight = $('#content-container').innerHeight();
	let filterHeight = $('.filters-box').height();
	let filterBottomPos = contentHeight - filterHeight + 100; 
	let trigger = $(window).scrollTop() - searchHeight;

      	if ($(window).scrollTop() >= searchHeight + 100) {
          	$('.filters-box').addClass('fixed');
      	} else {
          	$('.filters-box').removeClass('fixed');
      	}

      	if (trigger >= filterBottomPos) {
          	$('.filters-box').addClass('bottom');
      	} else {
          	$('.filters-box').removeClass('bottom');
      	}
});

$(function() {
	let list = $('.js-dropdown-list');
	let link = $('.js-link');
	link.click(function(e) {
	  e.preventDefault();
	  list.slideToggle(200);
	});
	list.find('li').click(function() {
	  let text = $(this).html();
	  link.html(text);
	  list.slideToggle(200);
	  $('input[name="city"]').val(text);
	});
  });

  