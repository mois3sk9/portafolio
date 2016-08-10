<!--<div>

	<h1 align="center" class="letra_grande color_blanco " style="padding-bottom:0.5em;">Proyectos</h1>
	
	<div class="pad-ding centrar">
		<ul class="portafolio">
			<li>
				<div class="item_portafolio">
					<a class="various fancybox.ajax" href="{{ route('proyecto') }}">
						
						<img src="{{ asset('img/dmf_logo.jpg') }}" alt="">
						<h3 class="color_blanco" align="center">DMF Construcciones</h3>
					</a>
					
				</div>
			</li>
			<li>
				<div class="item_portafolio">
					
					<a class="various fancybox.ajax" href="{{ route('proyecto_mythra') }}">
						<img src="{{ asset('img/icono_mythra.png') }}" alt="">
						<h3 class="color_blanco" align="center">MythRA</h3>
					</a>
				</div>
			</li>
		</ul>
		
	</div>
</div>-->
<h1 align="center" class="letra_grande color_secundario" style="padding-bottom:0.5em;">Proyectos</h1>
<div id="owl-example" class="owl-carousel" style="width:256px;margin:0 auto">

  <div class="item">
  	<div class="item_portafolio en_linea" style="width:256px">
					<a class="various fancybox.ajax" href="{{ route('proyecto') }}">
						
						<img src="{{ asset('img/dmf_2.png') }}" alt="">
						<h3 class="" style="color:black" align="center">DMF Construcciones</h3>
					</a>
					
				</div>
  </div>
  <div class="item"> 
	<div class="item_portafolio en_linea" style="width:256px">
					
					<a class="various fancybox.ajax" href="{{ route('proyecto_mythra') }}">
						<img src="{{ asset('img/myth.png') }}" alt="">
						<h3 class="" style="color:black" align="center">MythRA</h3>
					</a>
				</div>
   </div>

   <div class="item"> 
	<div class="item_portafolio en_linea" style="width:256px">
					
					<a class="" href="https://github.com/mois3sk9/skills" target="_blank">
						<img src="{{ asset('img/skills.png') }}" alt="">
						<h3 class="" style="color:black" align="center">Skills JQuery plugin</h3>
					</a>
				</div>
   </div>
 
  
</div>