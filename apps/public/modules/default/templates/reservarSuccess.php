<?php
if (isset($mensaje_)):
    echo $mensaje_;
endif
?>

<?php echo include_partial('parciales/form_local', array('form' => $form, 'i' => $i)) ?>