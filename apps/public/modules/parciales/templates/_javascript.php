<script>
    window.onload = function(){
<?php
$locales = Doctrine_Query::create()->from('local')
        ->count();
for ($i = 1; $i <= $locales; $i++):
    ?>
    <?php echo 'gauge' . $i ?> = new JustGage({
                id: "gauge<?php echo $i ?>", 
                value: <?php echo rand(0, 100) ?>, 
                min: 0,
                max: 100,
                title: "Disponibilidad",
                titleFontColor: "#ccc"
                //                label: '%'
            });
<?php endfor; ?>
<?php for ($i = 1; $i <= $locales; $i++): ?>
        setInterval(function() {
    <?php echo 'gauge' . $i ?>.refresh(getRandomInt(0, 100));          
            }, 60000);
<?php endfor; ?>

};
$(function(){
      
    var $container = $('#container');

    $container.isotope({
        itemSelector : '.element'
    });
      
      
    var $optionSets = $('#options .option-set'),
    $optionLinks = $optionSets.find('a');

    $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
        key = $optionSet.attr('data-option-key'),
        value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
            // changes in layout modes need extra logic
            changeLayoutMode( $this, options )
        } else {
            // otherwise, apply new options
            $container.isotope( options );
        }
        
        return false;
    });      
});           
    
$(document).ready(function() {
    // servira para editar los de tipo input text.
    //                        $('.text').editable('<?php // echo url_for('@editaru?id=' . $sf_user->getAttribute('Usuario')->get('id'))   ?>', {
    //                            indicator : 'Saving...', 
    //                            submit : 'OK'
    //                        });
    //                        $('.select').editable('<?php // echo url_for('@cancelarr?id=' . $sf_user->getAttribute('Usuario')->get('id'))   ?>', { 
    //                            data   : " {'1':'Cancelar'}",
    //                            type   : 'select',
    //                            submit : 'OK'
    //                        });     

    $('#reservass, #reservasss, #historialr, #historialrr, #alerta').dataTable(
    {
        "bScrollInfinite": true,
        "bScrollCollapse": true,
        "sScrollY": "200px"
       
    }    
);
    $(".search").keyup(function() 
    {
        var busqueda = $(this).val();
        var dataString = 'busqueda='+ busqueda;
        if(busqueda=='')
        {}
        else
        {
            $.ajax({
                type: "POST",
                url: "<?php echo url_for('@busqueda_sencilla') ?>",
                data: dataString,
                cache: false,
                success: function(html)
                {
                    $("#display").html(html).show();
                }
            });
        }return false; 
    });
    $("#enviar").click(function(){
        var formulario = $("#falerta").serializeArray();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "<?php echo url_for('@alarma') ?>",
            data: formulario
        });
    });
});
</script>
