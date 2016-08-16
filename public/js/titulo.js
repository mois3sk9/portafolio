


function quienSoy() {

	$("#presentacion_div").addClass('animated').removeClass('bounceIn').addClass('bounceOut');
	setTimeout(function() {
		$("#presentacion_div").hide();
		$("#quien_soy_container").show().addClass('animated').removeClass('bounceOut').addClass('bounceIn');
	}, 1000);
	 	
	return false;
}

function volver() {
	$("#quien_soy_container").removeClass('bounceIn').addClass('bounceOut');
	setTimeout(function() {
		$("#quien_soy_container").hide();
		$("#presentacion_div").show().removeClass('bounceOut').addClass('bounceIn');
		$('html, body').animate({
	    scrollTop: $("#segunda_seccion").offset().top
		}, 1000);	
	}, 1000);
	

	return false;
}