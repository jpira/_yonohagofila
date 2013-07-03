<?php
$es_movil = FALSE; //Aquí se declara la variable falso o verdadero XD
$usuario = $_SERVER['HTTP_USER_AGENT']; //Con esta leemos la info de su navegador

$usuarios_moviles = "Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV"; //En esta cadena podemos quitar o agregar navegadores de dispositivos moviles, te recomiendo que hagas un echo $_SERVER['HTTP_USER_AGENT']; en otra pagina de prueba y veas la info que arroja para que despues agregues el navegador que quieras detectar

$navegador_usuario = explode(',', $usuarios_moviles);

foreach ($navegador_usuario AS $navegador) { //Este ciclo es el que se encarga de detectar el navegador y devolver un TRUE si encuentra la cadena
    if (strrpos($usuario, 'Android') !== false) { //Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV
        $es_movil = 'ES MOVIL';
    }
}
echo $es_movil;
?>

<!-- Name and Image-->
<div class="element caja-presentacion primary-bg height2">
    <input type="hidden" class="order" value="0">
    <video class="video-presentacion" width="480" poster="images/preview-video.jpg" controls="controls" preload="auto">
        <source src="../video/yonohagofilacom_mp4.mp4" type="video/mp4" />
        <source src="../video/yonohagofilacom_ogg.ogg" type="video/ogg" />
        <source src="../video/yonohagofilacom_webm.webm" type="video/webm" />
        <embed src="../video/yonohagofilacom_swf.swf" type="application/x-shockwave-flash" width="480" height="360"></embed>
    </video>
    <h1 class="main-name">Aliquam adipiscing<br/>sem a quam eleifend<br/>vel dignissim metus<br/>ultrices volutpat.</h1>
<!--<img src="http://placehold.it/900x950" class="full" alt="profile image">-->
    <!--    <hr class="thick" />-->
</div>

<?php if ($sf_user->isAuthenticated()): ?>
    <div class="element about width1 round-borders caja-perfil-usuario height2">
        <div>
            <img class="img-perfil-usuario" src="../admin/img/<?php echo $sf_user->getAttribute('Usuario')->get('foto') ?>"/>
            <form class="busqueda-avanzada">
                <input class="btn-filtro-local" type="submit" value="Cambiar imagen">
            </form>
        </div>
        <p class="texto-sencillo-perfil titulo">Datos de usuario</p>
        <p class="texto-sencillo-perfil"><?php echo $sf_user->getAttribute('Usuario')->get('nombre') ?></p>
        <div class="contenido-perfil">
            <div class="texto-contenido-perfil">
                <p>Contraseña:</p>
                <p>xxxxxxxxxxxxxxxx</p>            
            </div>
        </div>
        <p class="texto-sencillo-perfil"><?php echo $sf_user->getAttribute('Usuario')->get('tipo_identificacion') . ' ' . $sf_user->getAttribute('Usuario')->get('identificacion') ?></p>
        <p class="texto-sencillo-perfil">Bogotá, Colombia</p>
        <div class="contenido-perfil">
            <!--<a href="#"><img class="img-perfil-usuario" src="../img/icon-editar.png" alt="" /></a>-->
            <div class="texto-contenido-perfil">
                <p>Tu cumpleaños:</p>
                <p><?php echo $sf_user->getAttribute('Usuario')->get('fecha_nacimiento') ?></p>                
            </div>
        </div>
        <div class="contenido-perfil">
            <a href="#"><img class="img-perfil-usuario" src="../img/icon-editar.png" alt="" /></a>
            <div class="texto-contenido-perfil">
                <p>Número telefónico:</p>
                <p class="text" id="tel" name="tel"><?php echo $sf_user->getAttribute('Usuario')->get('telefono') ?></p>             
            </div>
        </div>
        <div class="contenido-perfil">
            <a href="#"><img class="img-perfil-usuario" src="../img/icon-editar.png" alt="" /></a>
            <div class="texto-contenido-perfil">
                <p>e-mail:</p>
                <p class="text2" type="email" id="mail" name="mail"><?php echo $sf_user->getAttribute('Usuario')->get('email') ?></p>             
            </div>
        </div>

    </div>


    <!--
                                Tablas reservas
    ------------------------------------------------------------
    ------------------------------------------------------
    -->
    <!-- Tabla reservas vigentes-->
    <div class="element about width3 height4 round-borders fd-blanco">
        <!--<input type="hidden" class="order" value="11">-->
    <!--    <small>
            Where I've worked.
        </small>-->
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
//SI NO DIGO Q ES LA PRIMERA PÁGINA
            $page = 1;
        }
        $rows_per_page = 4;

        $limit = $rows_per_page . ',' . ($page - 1) * $rows_per_page;
        if (isset($_POST['bnombre']) or isset($_POST['bfecha'])) {
            if ($_POST['bnombre'] != '' and $_POST['bfecha'] != '') {
                $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                        ->where('r.id_usuario = ? AND l.nombre LIKE ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%', $_POST['bfecha'] . '%'))
                        ->orderBy('fecha_reserva desc')
                        ->limit(4)
                        ->offset(($page - 1) * $rows_per_page)
//                        ->getSqlQuery();                print_r($reservas);               die;
                        ->execute();
                $nump = Doctrine_Query::create()->from('Reserva r, r.Local l')
                        ->where('r.id_usuario = ? AND l.nombre LIKE ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%', $_POST['bfecha'] . '%'))
                        ->count();
            } else {
                if ($_POST['bnombre'] != '') {
                    $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                            ->where('r.id_usuario = ? AND l.nombre LIKE ? ', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%'))
                            ->orderBy('fecha_reserva desc')
                            ->limit(4)
                            ->offset(($page - 1) * $rows_per_page)
//                            ->getSqlQuery();                 print_r($reservas);                    die;
                            ->execute();

                    $nump = Doctrine_Query::create()->from('Reserva r, r.Local l')
                            ->where('r.id_usuario = ? AND l.nombre LIKE ? ', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%'))
                            ->count();
                } else {
                    $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                            ->where('r.id_usuario = ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), $_POST['bfecha'] . '%'))
                            ->orderBy('fecha_reserva desc')
                            ->limit(4)
                            ->offset(($page - 1) * $rows_per_page)
//                            ->getSqlQuery();                 print_r($reservas);                    die;
                            ->execute();
                    $nump = Doctrine_Query::create()->from('Reserva r, r.Local l')
                            ->where('r.id_usuario = ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), $_POST['bfecha'] . '%'))
                            ->count();
                }
            }
        } else {
            $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                    ->where('r.id_usuario = ? AND fecha_reserva > ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
                    ->orderBy('fecha_reserva desc')
                    ->limit($rows_per_page)
                    ->limit(4)
                    ->offset(($page - 1) * $rows_per_page)
//                    ->getSqlQuery();        print_r($reservas);            die;
                    ->execute();
            $nump = Doctrine_Query::create()->from('Reserva r, r.Local l')
                    ->where('r.id_usuario = ? AND fecha_reserva > ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
                    ->count();
        }
        //                ->getSqlQuery();        print_r($reservas.'----'.$_POST['bfecha']); die();
        $lastpage = ceil($nump / $rows_per_page);
        $page = (int) $page;
        if ($page > $lastpage) {
            $page = $lastpage;
        }
        if ($page < 1) {
            $page = 1;
        }
        ?>
        <h2 class="title">Estas son tus reservas vigentes<span>Desde aquí puedes consultar el estado las reservas hechas hasta el momento en tus lugares favoritos.</span></h2>
        <div class="filtro-buscador">
            <form class="busqueda-avanzada filtro2" action="<?php echo url_for('@filtrar') ?>" method="POST" >
                <input type="date" id="bfecha" name="bfecha" placeholder="Buscar por fecha de reserva" />
                <input type="text" id="bnombre" name="bnombre" placeholder="Buscar por nombre del lugar" />
                <input class="btn-filtro-local" type="submit" value="Búsqueda avanzada">
            </form>
        </div>

        <table class="table reservas-vigentes">
            <tr>
                <th class=" blanco">Fecha creacion</th>
                <th class=" blanco">Nombre lugar</th>
                <th class=" blanco">Fecha reserva</th>
                <th class=" blanco">Estado</th>
                <th class=" blanco">Ver QR reserva</th>
                <th class=" blanco">Cancelar</th>
            </tr>            
            <?php foreach ($reservas as $r): ?>
                <tr>
                    <td><?php echo $r->get('fecha_creacion') ?></td>
                    <td><?php echo $r->get('Local')->get('nombre') ?></td>
                    <td><?php echo $r->get('fecha_reserva') ?></td>
                    <td><?php echo $r->get('estado') ?></td>
                    <?php // QRcode::png($r->get('slug'));    ?>
                    <td><a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><img class="img-perfil-usuario" src="../img/icon-ver.png"/></a></td>
                    <td><a href="<?php echo url_for('@cancelarr?id=' . $r->get('id')) ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>
                </tr>
            <?php endforeach; ?>


        </table>
        <?php
        if ($nump != 0):
            $nextpage = $page + 1;
            $prevpage = $page - 1;
            ?>
            <ul id="pagination-digg">
                <?php if ($page == 1) {
                    ?>
                    <li class="previous-off">&laquo; Previous</li>
                    <li class="active">1</li>              
                    <?php
                    for ($i = $page + 1; $i <= $lastpage; $i++) {
                        if ($page + 4 > $i) {
                            ?>
                            <li><a href="<?php echo url_for('@homepage?page=' . $i) ?>"><?php echo $i; ?></a></li>
                            <?php
                        }
                    }
                    //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
                    if ($lastpage > $page) {
                        ?>       
                        <li class="next"><a href="<?php echo url_for('@homepage?page=' . $nextpage) ?>" >Next &raquo;</a></li> <?php echo 'Resultados 1 - 4 de ' . $nump; ?>
                    <?php } else {
                        ?>
                        <li class="next-off">Next &raquo;</li> <?php echo 'Resultados 1 ' . ' - ' . $nump . ' de ' . $nump; ?>
                        <?php
                    }
                } else {
                    ?>
                    <!--                    EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS-->
                    <li class="previous"><a href="<?php echo url_for('@homepage?page=' . $prevpage) ?>"  >&laquo; Previous</a></li><?php
            for ($i = 1; $i <= $lastpage; $i++) {
                //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
                if ($page == $i) {
                            ?>  <li class="active"><?php echo $i; ?></li><?php
                } else {
                    if ($page == 2) {
                        if ($page - 1 <= $i and $page + 2 >= $i) {
                                    ?>  <li><a href="<?php echo url_for('@homepage?page=' . $i) ?>" ><?php echo $i; ?></a></li><?php
                        }
                    } else {
                        if ($page - 2 <= $i and $page + 1 >= $i) {
                                    ?>  <li><a href="<?php echo url_for('@homepage?page=' . $i) ?>" ><?php echo $i; ?></a></li><?php
                        }
                    }
                }
            }
            //SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT    
            if ($lastpage > $page) {
                        ?> 
                        <li class="next"><a href="<?php echo url_for('@homepage?page=' . $nextpage) ?>">Next &raquo;</a></li><?php
                echo 'Resultados ' . (($page * 4) - 4) . ' - ' . ($page * 4) . ' de ' . $nump;
            } else {
                        ?> <li class="next-off">Next &raquo;</li><?php
                echo 'Resultados ' . (($page * 4) - 4) . ' - ' . $nump . ' de ' . $nump;
            }
        }
                ?></ul></br></br>
            <?php endif; ?>
        <!-- fin tabla reservas vigentes -->





        <!--Tabla historial -->
        <?php
        if (isset($_GET['page2'])) {
            $page2 = $_GET['page2'];
        } else {
            $page2 = 1;
        }
        $nump2 = Doctrine_Query::create()->from('Reserva r, r.Local l')
                ->where('r.id_usuario = ? AND fecha_reserva < ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
                ->count();
        $rows_per_page = 4;
        $lastpage2 = ceil($nump2 / $rows_per_page);
        $page2 = (int) $page2;
        if ($page2 > $lastpage2) {
            $page2 = $lastpage2;
        }
        if ($page2 < 1) {
            $page2 = 1;
        }
        $limit = $rows_per_page . ',' . ($page2 - 1) * $rows_per_page;
        ?>
        <h2 class="title">Estas son tus reservas anteriores<span>Desde aquí puedes consultar las reservas que has hecho con nosotros en tus lugares favoritos.</span></h2>

        <?php
        $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                ->where('r.id_usuario = ? AND fecha_reserva < ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
                ->orderBy('fecha_reserva desc')
                ->limit($rows_per_page)
                ->offset(($page2 - 1) * $rows_per_page)
//                ->getSqlQuery();        print_r($reservas);        die;
                ->execute();
        ?>
        <table class="table reservas-vigentes">
            <tr>
                <th class=" blanco">Fecha creacion</th>
                <th class=" blanco">Nombre lugar</th>
                <th class=" blanco">Fecha reserva</th>
                <th class=" blanco">Estado</th>
                <th class=" blanco">Ver QR reserva</th>
                <th class=" blanco">Cancelar</th>
            </tr>            
            <?php foreach ($reservas as $r): ?>
                <tr>
                    <td><?php echo $r->get('fecha_creacion') ?></td>
                    <td><?php echo $r->get('Local')->get('nombre') ?></td>
                    <td><?php echo $r->get('fecha_reserva') ?></td>
                    <td><?php echo $r->get('estado') ?></td>
                    <?php // QRcode::png($r->get('slug'));      ?>
                    <td><a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><img class="img-perfil-usuario" src="../img/icon-ver.png"/></a></td>
                    <td><a href="<?php echo url_for('@cancelarr?id=' . $r->get('id')) ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>
                </tr>
            <?php endforeach; ?>                                                                   
        </table>
        <?php
        if ($nump2 != 0):
            $nextpage = $page2 + 1;
            $prevpage = $page2 - 1;
            ?>
            <ul id="pagination-digg">
                <?php if ($page2 == 1) {
                    ?>
                    <li class="previous-off">&laquo; Previous</li>
                    <li class="active">1</li> 
                    <?php
                    for ($i = $page2 + 1; $i <= $lastpage2; $i++) {
                        if ($page2 + 4 > $i) {
                            ?>
                            <li><a href="<?php echo url_for('@homepage?page2=' . $i) ?>"><?php echo $i; ?></a></li>
                            <?php
                        }
                    }
                    //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
                    if ($lastpage2 > $page2) {
                        ?>       
                        <li class="next"><a href="<?php echo url_for('@homepage?page2=' . $nextpage) ?>" >Next &raquo;</a></li>  <?php echo 'Resultados 1 - 4 de ' . $nump2; ?>
                    <?php } else {
                        ?>
                        <li class="next-off">Next &raquo;</li> <?php echo 'Resultados 1 ' . ' - ' . $nump2 . ' de ' . $nump2; ?>
                        <?php
                    }
                } else {
                    ?>
                    <!--                    EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS-->
                    <li class="previous"><a href="<?php echo url_for('@homepage?page2=' . $prevpage) ?>"  >&laquo; Previous</a></li><?php
            for ($j = 1; $j <= $lastpage2; $j++) {
                //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
                if ($page2 == $j) {
                            ?>  
                            <li class="active"><?php echo $j; ?></li><?php
                } else {
                    if ($page2 == 2) {
                        if ($page2 - 1 <= $j and $page2 + 2 >= $j) {
                                    ?>  <li><a href="<?php echo url_for('@homepage?page=' . $j) ?>" ><?php echo $j; ?></a></li><?php
                        }
                    } else {
                        if ($page2 - 2 <= $j and $page2 + 1 >= $j) {
                                    ?>  <li><a href="<?php echo url_for('@homepage?page=' . $j) ?>" ><?php echo $j; ?></a></li><?php
                        }
                    }
                }
            }
            //SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT    
            if ($lastpage2 > $page2) {
                        ?> 
                        <li class="next"><a href="<?php echo url_for('@homepage?page2=' . $nextpage) ?>">Next &raquo;</a></li><?php
                echo 'Resultados ' . (($page2 * 4) - 4) . ' - ' . ($page2 * 4) . ' de ' . $nump2;
            } else {
                        ?> <li class="next-off">Next &raquo;</li><?php
                echo 'Resultados ' . (($page2 * 4) - 4) . ' - ' . $nump2 . ' de ' . $nump2;
            }
        }
                ?></ul></br>
            <?php endif; ?>
    </div>  
<?php endif; ?>

<!--
                         fin   Tablas historial reservas
------------------------------------------------------------
------------------------------------------------------
-->

<?php
if (isset($_POST['busqueda']) and $_POST['busqueda'] != '') {
    $locales = Doctrine_Query::create()->from('Parametro p, p.Local l')
            ->where('l.nombre LIKE ?', $_POST['busqueda'] . '%')
            ->execute();
} else {
    if (isset($_POST['busqueda1']) and $_POST['busqueda1'] != '') {
        $locales = Doctrine_Query::create()->from('Parametro p, p.Local l')
                ->where('l.direccion LIKE ?', $_POST['busqueda1'] . '%')
                ->execute();
    } else {
        if (isset($_POST['busqueda2']) and $_POST['busqueda2'] != '') {
            $locales = Doctrine_Query::create()->from('Parametro p, p.Local l')
                    ->where('p.descripcion LIKE ?', '%' . $_POST['busqueda2'] . '%')
                    ->execute();
        } else {
            $locales = Doctrine_Query::create()->from('Parametro p, p.Local')
                    ->execute();
        }
    }
}

$i = 1;
foreach ($locales as $local):
    ?>
    <div class="element element-portfolio portfolio height-auto width2-1 fd-blanco"> <!-- href="#" ajax-->
        <!--<input type="hidden" class="order" value="3">-->
        <div class="marca-comercio">
            <?php echo image_tag('/uploads/imagen/' . $local->get('Local')->get('imagen'), array('size' => '70x70', 'class' => 'logo-comercio')) ?>
        </div>
        <div class="disponibilidad-comercio">
            <img src="../img/barra-disponibilidad.png"/>
        </div>
        <div class="calificacion-comercio">
            <p>Calificación usuarios</p>
            <img class="estrellas-calificacion" src="../img/seccion-comercios/estrellas-calificacion.png"/>
        </div>
        <div class="redes-comercio">
            <!--<p>560</p>-->            
            <a href="#"><img  src="../img/redes-sociales-ynhf/red-facebook.png"/></a>
            <a href="#"><img  src="../img/redes-sociales-ynhf/red-youtube.png"/></a>
            <a href="#"><img  src="../img/redes-sociales-ynhf/red-twitter.png"/></a>
        </div>
        <div class="clearfix"></div>
        <div class="descripcion-local">
            <p class="nombre-comercio"><?php echo $local->get('Local')->get('nombre') ?></p>
            <p class="texto-descripcion"><?php echo $local->get('descripcion') ?></p>
            <p class="texto-descripcion"><?php echo $local->get('Local')->get('direccion') ?><br/><?php echo $local->get('Local')->get('telefono') ?></p>
            <p class="url-web-local">www.hhsitioweb.com</p>        
        </div>
        <?php $form->setDefault('local_id', $local->get('id')); ?>
        <?php if ($sf_user->isAuthenticated()): ?>
            <div class="busqueda-avanzada">
                <button class="btn-filtro-local2" onclick="muestra_oculta('contenido_a_mostrar<?php echo $i ?>')" title="">Configurar reserva</button>

            </div>
            <div id="contenido_a_mostrar<?php echo $i ?>" class="estilo-bloque" style="display:none">
                <form class="busqueda-avanzada filtro2 height-auto" action="" method="POST">
                    <?php echo $form; ?>
                    <input type="submit" value="Reservar" />
                </form>
            </div>
            <?php $i = $i + 1; ?>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<!-- Contact -->
<div class="element contact height2">
    <input type="hidden" class="order" value="7">
    <small>
        Personal details.
    </small>
    <h2 class="title">Info
    </h2>
    <table class="table">
        <tr>
            <th>Name:
            </th>
            <td>John Smithy Doe
            </td>
        </tr>
        <tr>
            <th>Birth:
            </th>
            <td>1988/01/27
            </td>
        </tr>
        <tr>
            <th>Phone:
            </th>
            <td>222-222-2222
            </td>
        </tr>
        <tr>
            <th>Email:
            </th>
            <td>contact@email.com
            </td>
        </tr>
        <tr>
            <th>Addr:
            </th>
            <td>123 University Ave
                <br/>2nd Address Line
            </td>
        </tr>
        <tr>
            <th>Website:
            </th>
            <td><a href="http://themeforest.net">www.themeforest.net</a>
            </td>
        </tr>
    </table>
    <hr/>
    <p>Feel free to shoot me an email or give me a ring anytime!
    </p>		
</div>  

<div class="element contact map width3">
    <input type="hidden" class="order" value="15">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Toronto,+ON&amp;aq=0&amp;oq=toro&amp;sll=49.303974,-84.738438&amp;sspn=15.573249,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Toronto,+Toronto+Division,+Ontario&amp;ll=43.653226,-79.383184&amp;spn=0.033721,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe>
</div>

<div class="element contact width2 height2">
    <input type="hidden" class="order" value="16">
    <small>
        Get in touch.
    </small>
    <h2 class="title">Email Me
    </h2>
    <div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
    <div id="error" class="alert alert-error" style="display:none"></div>

    <form class="contact_form" id="contact_form">

        <label class="control-label" for="fname">Name*</label>
        <input type="text" id="fname" placeholder="Name">
        <label class="control-label" for="email">Email*</label>
        <input type="text" id="email" placeholder="Email">

        <label class="control-label" for="message">Message*</label>
        <textarea id="message"></textarea>
        <br/>
        <button type="submit" id="submit_contact_info" class="btn btn-primary">Send Email <i class="icon-envelope-alt"></i></button>

    </form>
</div>


<!-- Extra non-categorized -->
<div class="element">
    <input type="hidden" class="order" value="9">
    <p class="big-text dark text-no-transform text-cursive">I promise to deliver <span class="primary-color ">innovation</span>, <span class="primary-color ">creativity</span>, and <span class="primary-color ">success</span>.
    </p>
</div>
