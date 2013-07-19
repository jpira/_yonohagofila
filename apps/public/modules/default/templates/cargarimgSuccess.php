<?php

$ruta = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.'imagen/';
print_r($ruta);
foreach ($_FILES as $key) {
    if ($key['error'] == UPLOAD_ERR_OK) {//Verificamos si se subio correctamente
        $name = $key['name'];
        $ext = explode('.', $name);
        $extension = end($ext);
        $nombre = sprintf("%s." . $extension, str_replace(".", "", microtime(true))); //Obtenemos el nombre del archivo
        $temporal = $key['tmp_name']; //Obtenemos el nombre del archivo temporal
        move_uploaded_file($temporal, $ruta . $nombre); //Movemos el archivo temporal a la ruta especificada
        //El echo es para que lo reciba jquery y lo ponga en el div "cargados"
//			echo "
        echo 'files/'.$nombre;
        exit;
//				<div id='subido'>
//					<h12><strong>Nombre del archivo: $nombre</strong></h2><br />
//					<h12><strong>Tama?o del archivo: $tamano</strong></h2><br />
//					<h12><strong>Texto: $texto</strong></h2><br />
//					<hr>
//				</div>
//				";
    } else {
        echo $key['error']; //Si no se cargo mostramos el error
    }
}
?>