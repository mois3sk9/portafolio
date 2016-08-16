
@extends('master')

@section('contenido')
<style>
	#contenedor {
		height: 100%;
		max-height: 100%;
		background-image: url("{{ asset('img/shattered.png') }}");
		background-repeat: repeat;
	}

	html {
   		height: 100%;
	}

	body {
	   min-height: 100%;
	}
</style>
<h1 class="color_secundario letra_grande" align="center"><span class="color_negro">Error</span> 404</h1>
<h1 align="center" class="color_secundario">No<span class="color_negro"> se ha podido encontrar la página que buscas...</span></h1>
<h2 align="center"><i class="fa fa-caret-left" style="font-size:2.5rem" aria-hidden="true"></i><a href="{{ route('principal') }}"class="color_negro" align="center"> Volver a la página principal</a></h2>

<h1 class="letra_estil color_secundario animated bounceIn" style="margin-top:1rem" id="titulo_landing" align="center">MsepulvedA</h1>


@stop

@section('footer')

@stop
@section('nav')

@stop