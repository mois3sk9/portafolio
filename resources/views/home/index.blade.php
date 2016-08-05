@extends('master')

@section('contenido')

<section class="seccion_principal">

	@include('sections.seccion_principal')	
</section>
<section class="segunda_seccion">
	
	@include('sections.segunda_seccion')
</section>
<section class="tercera_seccion pad-ding" id="proyectos">
	@include('sections.tercera_seccion')
</section>

<section class="curriculum pad-ding">
  <h1 align="center" class="letra_grande"> Curriculum </h1>
  @include('sections.time_line')

</section>
<section class="contacto pad-ding" id="contacto">
	
	@include('home.contact_form')

</section>
@stop