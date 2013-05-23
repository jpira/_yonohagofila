<script>

    function muestra_oculta(id){
        if (document.getElementById){ //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }
    window.onload = function(){/*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
        muestra_oculta('contenido_a_mostrar');/* "contenido_a_mostrar" es el nombre de la etiqueta DIV que deseamos mostrar */
    }
</script>

<?php
$locales = Doctrine_Query::create()->from('Local l')
        ->limit(3)
        ->execute();
$j = 0;
?>
<?php foreach ($locales as $local): ?>
    <?php
    $ids = array();
    $ids[] = $local->get('id');
    $parametros = Doctrine_Query::create()->from('Parametro')
            ->where('local_id = ?', $local->get('id'))
            ->fetchOne();
    ?>
    <?php $j = $j + 1; ?>
    <table  border="2" width="45%" heigh="50%" align="center">
        <tr>
            <td rowspan="2"><?php echo image_tag('/uploads/imagen/' . $local->get('imagen'), array('size' => '120x80')) ?></td>
        </tr>
        <tr>
            <td>
                <h3><center><?php echo $local->get('nombre'); ?></center></h3>
                <?php echo $parametros->get('descripcion'); ?><br>
                <button onclick="muestra_oculta('contenido_a_mostrar<?php echo $j ?>')">Configurar Reserva</button></td>
        </tr>
    </table>
    <div id="contenido_a_mostrar<?php echo $j ?>">
        <form action="" method="POST">
            <?php echo $form ?>
            <input type="submit" value="Reservar" />
        </form>
    </div>
<?php endforeach; ?>