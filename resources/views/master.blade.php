<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device−width, initial−scale=1.0" />
	<title>Portafolio</title>
	@section('css')
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	@show
</head>
<body>
	<div id="contenedor">
		@include('sections.nav')
		<section class="seccion_principal">
		
			@include('sections.seccion_principal')	
		</section>
		<section class="segunda_seccion">
			
			@include('sections.segunda_seccion');
		</section>
		<section class="tercera_seccion pad-ding">
			@include('sections.tercera_seccion');
		</section>
		<section>
			
			@yield('contenido')
		</section>
	</div>
</body>
@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/jquery.scrollme.min.js') }}"></script>
@show
</html>