// Плавный scroll
$(function(){
    $('#topArrow').on('click', function(e){
        $('html,body').stop().animate({ 
            scrollTop: $('#header').offset().top 
        }, 1000);
        e.preventDefault();
    });
});

// Модальное окно регистрации
$(document).ready(function($) {
	$('.popup-reg-open').click(function() {
		$('.popup-fade').fadeIn();
		return false;
	});	
	
	$('.popup-close').click(function() {
		$(this).parents('.popup-fade').fadeOut();
		return false;
	});		
 
	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.popup-fade').fadeOut();
		}
	});
	
	$('.popup-fade').click(function(e) {
		if ($(e.target).closest('.popup').length == 0) {
			$(this).fadeOut();					
		}
	});
});