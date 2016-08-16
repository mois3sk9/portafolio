
{{-- El script que controla este formulario es contacto.js --}}
<h1 class="letra_grande color_blanco">Mi <span class="color_secundario letra_secret">Contacto</span></h1>
<br>
<h4 class="color_blanco">Si tienes alguna duda o algún proyecto en el que podamos trabajar, no dudes en contactarme</h4>

<form class="cf" id="formulario_contacto"  method="post" onsubmit="return enviar_contacto();">
  <div class="half left cf">
    <input type="text" id="input-name" placeholder="Nombre" required>
    <input type="email" id="input-email" placeholder="Email" required>
    <input type="text" id="input-subject" placeholder="Asunto" required>
  </div>
  <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
  <div class="half right cf">

    <textarea name="message" type="text" id="texto_contacto" placeholder="Mensaje" required></textarea>
  </div>  
  <input type="submit" value="Enviar" id="btn_contacto" style="width:100%">
</form>

<div style="width:50px;margin:0 auto" hidden id="contact_loading">
    <i class="fa fa-spinner fa-spin fa-3x fa-fw color_blanco" ></i>
</div>