<?php
if (isset($mensaje_)):
    echo $mensaje_;
endif
?>
<!--<form class="busqueda-avanzada filtro2 height-auto" action="" method="POST">-->
<?php echo jq_form_remote_tag(array('url' => '@reserved', 'update' => 'contenido_a_mostrar' . $i)) ?>    
<?php echo $form; ?>
<div>

    <input type="hidden" name="ide" value="<?php echo $i ?>" />
    <button class="btn-filtro-local2" onclick="$this.submit()" title="">¡Reservar!</button>
 </div>
</form>