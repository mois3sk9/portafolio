
jQuery(document).ready(function($){
var $efecto = $('.efecto');

//hide timeline blocks which are outside the viewport
$efecto.each(function() {
	$(this).addClass('animated');
	$(this).addClass('bounceOut');
});
$(window).on('scroll', function() { 

	$efecto.each(function() {
		console.log("agregado");
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			//$(this).addClass('hide');
			//$(this).removeClass('animated');
			$(this).addClass('bounceOut');
		}
	});
});


//on scolling, show/animate timeline blocks when enter the viewport
$(window).on('scroll', function() {
$efecto.each(function(){
	console.log("scrolling");
	console.log($(this).offset().top);
	console.log($(window).scrollTop()+$(window).height()*0.75);
	console.log();
	if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).hasClass('bounceOut')) {
		//console.log("agregado");
		
		$(this).removeClass('bounceOut').addClass('bounceIn');
	}
});
});
});
