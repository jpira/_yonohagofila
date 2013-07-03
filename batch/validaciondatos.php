<?php

require_once(dirname(__FILE__) . '/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('private', 'dev', true);
sfContext::createInstance($configuration);
date_default_timezone_set("America/Bogota");

// Borra las dos líneas siguientes si no utilizas una base de datos
$databaseManager = new sfDatabaseManager($configuration);
$databaseManager->loadConfiguration();

// Se configuran las variables globales
$request = sfContext::getInstance()->getRequest();
if ($request->isMethod('GET')) {
    switch ($request->getParameter('action_request')) {
        case "1":
            $password = Usuario::encode($request->getParameter('password'), $request->getParameter('username'));
            $usuario = Doctrine_Query::create()->from('Usuario')
                    ->where('email = ? AND contrasena = ? ', array($request->getParameter('username'), $password))
                    ->fetchOne();

            if ($usuario) { /* esta informacion se envia solo si la validacion es correcta */
                echo 1;
                exit();
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
        case "2":
            $verificacion = Doctrine_Query::create()->from('Reserva r, r.Promedio p')
                    ->where('slug = ? ', array($request->getParameter('slug')))
                    ->fetchOne();
            if ($verificacion) { /* esta informacion se envia solo si la validacion es correcta */
                $usuario = Doctrine_Query::create()->from('Usuario')
                        ->where('id = ? ', array($verificacion->get('id_usuario')))
                        ->fetchOne();
                echo json_encode(array(
                    'id' => $verificacion->get('id'),
                    'usuario' => $usuario->get('nombre'),
                    'cc' => $usuario->get('identificacion'),
                    'fechac' => $verificacion->get('fecha_creacion'),
                    'fecha' => $verificacion->get('fecha_reserva'),
                    'num' => $verificacion->get('numero_personas'),
                    'promedio' => $verificacion->get('Promedio')->get('promedio'),
                    'estado' => $usuario->get('estado')
                ));
                exit();
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
        case "3":
            $validacion = Doctrine_Query::create()
                    ->update('Reserva r')
                    ->set('r.estado', '?', 'Aprobada')
                    ->where('r.id = ?', $request->getParameter('id'))
                    ->execute();
            if ($validacion) { /* esta informacion se envia solo si la validacion es correcta */
                echo 1;
                exit();
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
        case "4":
            $reservast = array();
            $local = Doctrine_Query::create()->from('Local')
                    ->where('usuario_asociado = ? ', array($request->getParameter('user')))
                    ->fetchOne();
            if ($local) { /* esta informacion se envia solo si la validacion es correcta */
                $reservas = Doctrine_Query::create()->from('Reserva r, r.Promedio p')
                        ->where('local_id = ? AND estado = ?', array($local->get('id'), "Pendiente"))
//                        ->orderBy('fecha_reserva desc')
                        ->limit(15)
                        ->execute();
                if ($reservas) {
                    foreach ($reservas as $l) {                        
                        $nombre = Doctrine_Query::create()->from('Usuario')
                                ->where('id = ? ', array($l->get('id_usuario')))
                                ->fetchOne();
                        $reservast[] = array(
                            'id' => $l->get('id'),
                            'usuario' => $nombre->get('nombre'),
                            'fecha' => $l->get('fecha_reserva'),
                            'promedio' => $l->get('Promedio')->get('promedio'),
                            'num' => $l->get('numero_personas')
                        );
                    }
                    echo json_encode(array('r' => $reservast));
                      exit();
                } else {
//                    echo 2;
                    exit();
                }
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
        case "5":
            $validacion = Doctrine_Query::create()
                    ->update('Reserva r')
                    ->set('r.estado', '?', 'Rechazada')
                    ->where('r.id = ?', $request->getParameter('id'))
                    ->execute();
            if ($validacion) { /* esta informacion se envia solo si la validacion es correcta */
                echo 1;
                exit();
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
        case "6":
            $reservasu = array();
            $buscar = Doctrine_Query::create()->from('Usuario')
                    ->where('identificacion = ? ', array($request->getParameter('cc')))
                    ->fetchOne();
            if ($buscar) {
                $reservas = Doctrine_Query::create()->from('Reserva r, r.Promedio p')
                        ->where('r.id_usuario = ?', $buscar->get('id'))
                        ->orderBy('fecha_reserva desc')
                        ->limit(15)
                        ->execute();
                if ($reservas) {
                    foreach ($reservas as $l) {
                        $reservasu[] = array(
                            'id' => $l->get('id'),
                            'fecha' => $l->get('fecha_reserva'),
                            'promedio' => $l->get('Promedio')->get('promedio'),
                            'num' => $l->get('numero_personas')
                        );
                    }
                    echo json_encode(array('r2' => $reservasu));
                    exit();
                } else {
                    echo 2;
                    exit();
                }
            } else { /* esta informacion se envia si la validacion falla */
                echo 0;
                exit();
            }
            break;
    }
} else {
    echo -1;
    exit();
}
?>