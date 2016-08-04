@extends('master')

@section('contenido')

<section class="seccion_principal">

	@include('sections.seccion_principal')	
</section>
<section class="segunda_seccion">
	
	@include('sections.segunda_seccion');
</section>
<section class="tercera_seccion pad-ding">
	@include('sections.tercera_seccion');
</section>
<section class="contacto pad-ding">
	
	@include('home.contact_form')

</section>
@stop