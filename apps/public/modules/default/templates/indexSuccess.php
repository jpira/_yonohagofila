<?php
$locales = Doctrine_Query::create()->from('Local')
        ->limit(5)
        ->execute();
$i = 0;
?>
<?php foreach ($locales as $local): ?>
    <?php
    $parametros = Doctrine_Query::create()->from('Parametro')
            ->where('local_id = ?', $local->get('id'))
            ->fetchOne();
    ?>
    <?php if ($i == 0): ?>
        <div style="padding: 10px; float: left; width: 50%; text-align: justify;">
            <table  border="2" width="45%" heigh="50%">
                <tr>
                    <td rowspan="2"><?php echo image_tag('/uploads/imagen/' . $local->get('imagen'), array('size' => '120x80')) ?></td>
                </tr>
                <tr>
                    <td>
                        <h3><center><?php echo $local->get('nombre'); ?></center></h3>
                        <?php echo $parametros->get('descripcion'); ?><br>
                        <a href="#" target="_new" rel="facebox">Configurar Reserva</a>
                    </td>
                </tr>
            </table>
        </div>
        <?php $i = 1; ?>
    <?php else: ?>
        <?php $i = 0; ?>
        <div style="padding: 10px; float: right; width: 50%; text-align: justify;">
            <table  border="2" width="45%" heigh="50%">
                <tr>
                    <td rowspan="2"><?php echo image_tag('/uploads/imagen/' . $local->get('imagen'), array('size' => '120x80')) ?></td>
                </tr>
                <tr>
                    <td>
                        <h3><center><?php echo $local->get('nombre'); ?></center></h3>
                        <?php echo $parametros->get('descripcion'); ?><br>
                        <button>Configurar Reserva</button>
                    </td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
<?php endforeach; ?>