<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script language="javascript" src="jquery-1.3.2.min.js">
        </script>
        <script language="javascript">
            $(document).ready(function(){
                estado=0;						   
                $(".oculta").click(function () { 
                    if(estado==0) {
                        $('#paraocultar').slideUp('fast');
                        //                        $('#oculta').html('Reservar');
                        estado=1;
                    } else {
                        $('#paraocultar').slideDown('fast');
                        //                        $('#oculta').html('Reservar');
                        estado=0;
                    }
                });
            });
        </script>
        <style type="text/css">
            <!--
            body,td,th {
                font-family: Verdana, Geneva, sans-serif;
                font-size:11px;
                color:#333;
            }
            a {
                color:#06C;
            }
            #paraocultar {
                padding:10px;
                /*border:1px solid #d4d4d4;*/
            }
            -->
        </style>
    </head>

    <body>
        <?php
        $reservas = Doctrine_Query::create()->from('Reserva r')
                ->orderBy('fecha_creacion desc')
                ->execute();
        
        
        
        $locales = Doctrine_Query::create()->from('Local l')
                ->limit(3)
                ->execute();
        $j = 0;
        ?>
        
        <?php foreach ($reservas as $reserva): ?>
        <table border="2" align="center">
            <tr>
                <td>Nombre Lugar</td>
                <td>Fecha Reserva</td>
                <td>Estado</td>
            </tr>
            <tr>
                <td><?php echo $reserva->get('local_id') ?></td>
                <td><?php echo $reserva->get('fecha_reserva') ?></td>
                <td> </td>
            </tr>
        </table>
        <?php endforeach; ?>
        <br><br><br>
        <?php foreach ($locales as $local): ?>
            <?php
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
                            <button class="oculta">Reservar</button></td>
                </tr>
            </table>
        <?php endforeach; ?>
        <br>
            <div id="paraocultar" align="center" data-role="panel"> <br>
                    <p>
                        <form action="" method="POST">
                            <h4>Datos de Reserva</h4>
                            <?php echo $form; ?>
                            <input type="submit" value="Reservar" />
                        </form>
                    </p>
            </div>
    </body>
</html>