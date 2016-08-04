
function enviar_contacto() {

        nombre = document.getElementById('input-name').value;
        email = document.getElementById('input-email').value;
        asunto = document.getElementById('input-subject').value;
        texto = document.getElementById('texto_contacto').value;

        $.post('contacto', {nombre:nombre,email:email,asunto:asunto,texto:texto}, function(respuesta) {
            
                if(respuesta.estado == 1) {
                
                    toastr.success('Mensaje Enviado, te contactaré a la brevedad!');
                    limpiar_formulario();
            
                    
                } 
            
        },'json').fail(function(respuesta) {

                toastr.error('Existen campos no validos, favor verificar');
        });

        return false;
}

function limpiar_formulario() {
    $("#formulario_contacto input, #texto_contacto").each(function() {
        if($(this).val() != 'Enviar') {
            $(this).val("");
        }
        
    });
}   