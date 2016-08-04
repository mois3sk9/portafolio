
@extends('master')

@section('footer')
	
@show


<style>
	.curriculum *{
		margin:0;
		padding: 0;
	}
	.medio {
		width: 50%;
		height: 100px;
		float: left;
		box-sizing: border-box;
		margin:0;
	}
	.linea_temporal_r {
		border-right: 0.8em solid black;
	}
	.linea_temporal_l {
		border-left: 0,8em solid black;
	}
	.curriculum h1 {
		display: inline-block;
		border-bottom: 2px solid black;
		
	}
	.rotar {
		transform: rotate(-3deg);
	}
	.curriculum h1:after{
		content: ' ';

		border-bottom: 2px solid black;
	}
	.float_left {
		float: left;
	}
	.float_right {
		float: right;
	}
	.funciones {
		margin-top: 15px;
		border: 2px solid black;
	}
</style>

<div class="curriculum">
	<div class="item_curriculum">
		<div class="medio linea_temporal_r">
			<div>
				<h1 class="float_right">Abc Din </h1>
				<div class="clear"></div>
			</div>
			
			<div class="funciones float_right">
				<h2>Funciones</h2>
				<ul>
					<li>Atencion mesa ayuda</li>
					<li>Soporte a equipos basados en linux</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="medio">
			<div>
				<div>
					<h1 class="float_left">2012-2014</h1>
				</div>
				<div class="clear"></div>
				<div>
					<h2 align="center">Técnologias usadas</h2>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="item_curriculum">
		<div class="medio linea_temporal_r">
			<div>
				<h1 class="float_right">Abc Din </h1>
				<div class="clear"></div>
			</div>
			
			<div class="funciones float_right">
				<h2>Funciones</h2>
				<ul>
					<li>Atencion mesa ayuda</li>
					<li>Soporte a equipos basados en linux</li>
				</ul>
			</div>
		</div>
		<div class="medio">
			<div>
				<div>
					<h1 class="float_left">2012-2014</h1>
				</div>
				<div class="clear"></div>
				<div>
					<h2 align="center">Técnologias usadas</h2>
				</div>
				
			</div>
		</div>
	</div>

	
	
	<div class="medio linea_temporal_r">
		hola
	</div>
	<div class="medio">
		hola
	</div>
</div>

<div class="clear"></div>