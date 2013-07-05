<?php
$reserva = Doctrine_Query::create()->from('Reserva r, r.Local l')
        ->where('id = ?', $x)
        ->fetchOne();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Reserva Yonohagofila.com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
            <base target="_blank">
                </head>
                <body>
                    <div>
                        <p> 
                            <img src="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $reserva->get('slug') ?>&s=4&e="/>
                        </p>
                        <h2><?php echo $sf_user->getAttribute('Usuario')->get('nombre') ?></h2></br>
                        <h5><span> <?php echo $sf_user->getAttribute('Usuario')->get('estado') ?></span></h5>
                        <h3>Informacion de su reserva </h3>
                        <h5>FECHA EN LA REALIZO LA RESERVA </h5>
                        <h4><?php echo $reserva->get('fecha_creacion') ?> </h4>
                        <h5>NOMBRE BAR / RESTAURANTE </h5>
                        <h4> <?php echo $reserva->get('Local')->get('nombre') ?> </h4>
                        <h5>ESTADO DE RESERVA: <?php echo $reserva->get('estado') ?> </h5>
                        <h4>Fecha de reserva: <?php echo $reserva->get('fecha_reserva') ?> </h4>
                        <center>Presente este codigo QR para validar su reserva y hacer compras en el bar / restaurante </br>
                            Terminos Y Condicones de la Reserva </br>
                            xxxxx xxxxx xxxx xxxxx xxxx xxxxxxxxx xxx</center>
                    </div>
                </body>
                </html>
