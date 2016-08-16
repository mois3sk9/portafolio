
jQuery(document).ready(function($){
var $efecto = $('.efecto');
$(".habilidades").skill();
//hide timeline blocks which are outside the viewport
$efecto.each(function() {
	$(this).addClass('animated');
	$(this).addClass('bounceOut');
});
$(window).on('scroll', function() { 

	$efecto.each(function() {
		
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {

			$(this).addClass('bounceOut');
		}
	});
});


//on scolling, show/animate timeline blocks when enter the viewport
$(window).on('scroll', function() {
$efecto.each(function(){
	
	if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).hasClass('bounceOut')) {
		
		$(this).removeClass('bounceOut').addClass('bounceIn');
	}
});
});
});
