<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portafolio</title>
	@section('css')
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
		<link rel="stylesheet" href="{{ asset('css/time_line.css') }}">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />

	@show
</head>
<body>
	<div id="contenedor">
		@include('sections.nav')
		
		<section>
			@yield('contenido')
		</section>

		@section('footer')
		<footer>
			@include('home.footer')
		</footer>
		@show
	</div>
</body>
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/jquery.scrollme.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/fancybox_home.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/contacto.js') }}"></script>
<script src="{{ asset('js/configuracion_csfr.js') }}"></script>
<script src="{{ asset('js/configuracion_toastr.js') }}"></script>
<script src="{{ asset('js/time_line.js') }}"></script>
<script src="{{ asset('js/descargar_curriculum.js') }}"></script>
<script src="{{ asset('js/owl_configuracion.js') }}"></script>
@show
</html>