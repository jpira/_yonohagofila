function muestra_oculta(id){
    $('.btn-filtro-local2-inactivo').addClass('btn-filtro-local2');
    $('.ebtn-filtro-local2-inactivo').removeClass('btn-filtro-local2-inactivo');
    $('.estilo-bloque').hide('slow', function() {
        $('#container-isotope').isotope({
            masonry: {
                columnWidth: 5
            }
        })
    });
    
    if ($('#contenido_a_mostrar'+id).css('display') == 'none') {
        $('#btn-'+id).addClass('btn-filtro-local2-inactivo');
        $('#btn-'+id).removeClass('btn-filtro-local2');
        
        $('#contenido_a_mostrar'+id).toggle('slide', function(){
            $('#container-isotope').isotope({
                masonry: {
                    columnWidth: 5
                }
            })
        });
    } else {
        $('#btn-'+id).addClass('btn-filtro-local2');
        $('#btn-'+id).removeClass('btn-filtro-local2-inactivo');
        $('#contenido_a_mostrar'+id).hide('slow', function(){
            $('#container-isotope').isotope({
                masonry: {
                    columnWidth: 5
                }
            })
        });
        
    }
}
window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
    muestra_oculta('contenido_a_mostrar');/* "contenido_a_mostrar" es el nombre que le dimos al DIV */
}


$(function() {
    /**
				* the element
				*/
    var $ui 		= $('#ui_element');
				
    /**
				* on focus and on click display the dropdown, 
				* and change the arrow image
				*/
                               
    $ui.find('.sb_input').bind('focus click',function(){
        $ui.find('.sb_down')
        .addClass('sb_up')
        .removeClass('sb_down')
        .andSelf()
        .find('.sb_dropdown')
        .show('slow');
    });
				
    /**
				* on mouse leave hide the dropdown, 
				* and change the arrow image
				*/
    //    if($ui.find('.sb_input').show == true){
    $ui.bind('mouseleave',function(){
        $ui.find('.sb_up')
        .addClass('sb_down')
        .removeClass('sb_up')
        //            .fadeOut('slow')
        .andSelf()
        .find('.sb_dropdown')
        .hide('slow');
    });
				
    /**
				* selecting all checkboxes
				*/
    $ui.find('.sb_dropdown').find('label[for="all"]').prev().bind('click',function(){
        $(this).parent().siblings().find(':checkbox').attr('checked',this.checked).attr('disabled',this.checked);
    });
});	

