// JavaScript Document
$(document).ready(function() {
	 
    // ambos procesaran en save.php
	 
    // servira para editar los de tipo input text.
    $('.text').editable('save.php', {
        submit : 'OK'
    });
	 
    // servira para editar el cuadro combinado de paises
    $('.select').editable('save.php', { 
        data   : " {'1':'Argentina','2':'Bolivia','3':'Peru', '4':'Chile'}",
        type   : 'select',
        submit : 'OK'
    });
	 
    // servira para editar el textarea.
    $('.textarea').editable('save.php', { 
        type     : 'textarea',
        submit   : 'OK'
    });
	 	 
});
function muestra_oculta(id){
    if (document.getElementById){ //se obtiene el id
        var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
        el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
    }
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    muestra_oculta('contenido_a_mostrar');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}
