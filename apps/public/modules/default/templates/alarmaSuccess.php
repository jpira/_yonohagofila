<?php

$alarma = new Alarma();
$alarma->setOpcion($opcion);
$alarma->setReservaId($reserva);
$alarma->setDescripcion($comentario);
$alarma->setIdUsuario($usuario);
$alarma->setFechaCreacion(date('Y-m-d G:i:s'));
if ($alarma->isValid()) {
    $alarma->save();
} else {
    echo -1;
    exit;
}exit;
