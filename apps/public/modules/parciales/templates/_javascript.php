<script>
    var editor;
    
    $(document).ready(function() {
	 
        // ambos procesaran en save.php
	 
        // servira para editar los de tipo input text.
        $('.text').editable('<?php echo url_for('@editaru?id=' . $sf_user->getAttribute('Usuario')->get('id')) ?>', {
            indicator : 'Saving...', 
            submit : 'OK'
        });
                
        $('.text2').editable('<?php echo url_for('@editaru2?id=' . $sf_user->getAttribute('Usuario')->get('id')) ?>', {
            indicator : 'Saving...',                  
            submit : 'OK'
        });
        
  

        $('#reservass, #reservasss, #historialr, #historialrr').dataTable(
        {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
       
        }
    );
//        $('#historialr').dataTable(
//        {
//            "bScrollInfinite": true,
//            "bScrollCollapse": true,
//            "sScrollY": "200px"
//        });
    } );
</script>
