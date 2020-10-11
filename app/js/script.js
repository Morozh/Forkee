// Плавный scroll
$(function(){
    $('#topArrow').on('click', function(e){
        $('html,body').stop().animate({ 
            scrollTop: $('#header').offset().top 
        }, 1000);
        e.preventDefault();
    });
});