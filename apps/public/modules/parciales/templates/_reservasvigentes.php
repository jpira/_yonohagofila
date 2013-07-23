<!--
                                Tablas reservas
    ------------------------------------------------------------
    ------------------------------------------------------
    -->
<!-- Tabla reservas vigentes-->
<div class="element home3 width3 height-auto round-borders fd-blanco border-element">
    <!--<input type="hidden" class="order" value="11">-->
<!--    <small>
        Where I've worked.
    </small>-->

    <h2 class="title">Estas son tus reservas vigentes<span>Desde aquí puedes consultar el estado las reservas hechas hasta el momento en tus lugares favoritos.</span></h2>
    <!--    <div class="filtro-buscador">
            <form class="busqueda-avanzada filtro2" action="<?php //echo url_for('@filtrar') ?>" method="POST" >
                <input type="date" id="bfecha" name="bfecha" placeholder="Buscar por fecha de reserva" />
                <input type="text" id="bnombre" name="bnombre" placeholder="Buscar por nombre del lugar" />
                <input class="btn-filtro-local" type="submit" value="Búsqueda avanzada">
            </form>
        </div>-->
    <?php
    $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
            ->where('r.id_usuario = ? AND fecha_reserva > ?', array($sf_user->getAttribute('Usuario')->get('id'), date('Y-m-d')))
            ->orderBy('fecha_reserva desc')
//            ->limit($rows_per_page)
//            ->offset(($page - 1) * $rows_per_page)
//                ->getSqlQuery();print_r($reservas); die;
            ->execute();
    ?>

    <div class="tabla">
        <table id="reservass" class="table reservas-vigentes">
            <thead>
                <tr>
                    <th class=" blanco">Establecimiento</th>
                    <th class=" blanco">Fecha reserva</th>
                    <th class=" blanco">Estado</th>
                    <th class=" blanco">QR Code</th>
                    <!--<th class=" blanco">Cancelar</th>-->
                </tr>   
            </thead>
            <tbody>
                <?php foreach ($reservas as $r): ?>
                    <tr>
                        <td><?php echo $r->get('Local')->get('nombre') ?></td>
                        <td><?php echo $r->get('fecha_reserva') ?></td>
                        <td class="select" id="<?php echo $r->get('id') ?>"><?php echo $r->get('estado') ?></td>                    
                        <?php //echo QRcode::png($r->get('slug'));  ?>
                        <!--<td><a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><?php echo image_tag('/img/icon-ver.png', array('class' => 'img-perfil-usuario')) ?></a></td>-->
                        <td><a href="<?php echo url_for('@qr?id='. $r->get('id')) ?>" target="_new" rel="facebox"><?php echo image_tag('/img/icon-ver.png', array('class' => 'img-perfil-usuario')) ?></a></td>
                        <!--<td><a href="<?php //echo url_for('@cancelarr?id=' . $r->get('id'))       ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>-->
                        <!--<td><a href="#" onclick="alert('Construyendo proceso de cancelacion');return false;"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>-->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Tabla para dispositivos moviles -->
    <div class="tabla2" style="display: none">
        <table id="reservasss" class="table reservas-vigentes">
            <thead>
                <tr>
                    <th class=" blanco">Datos reserva</th>
                    <th class=" blanco">Opciones</th>
                </tr>   
            </thead>
            <tbody>
                <?php foreach ($reservas as $r): ?>
                    <tr>
                        <td><?php echo $r->get('Local')->get('nombre') . '<br/>Fecha: ' . $r->get('fecha_reserva') . '<br/>Estado:' . $r->get('estado') ?></td>                    
                        <td>
                            <a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><?php echo image_tag('/img/icon-ver.png', array('class' => 'img-perfil-usuario')) ?></a>
                            <!--<td><a href="<?php // echo url_for('@cancelarr?id=' . $r->get('id'))      ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>-->
                            <a href="#" onclick="alert('Construyendo proceso de cancelacion');return false;"><?php echo image_tag('/img/icon-cancelar.png', array('class' => 'img-perfil-usuario')) ?></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </br></br>

    <!-- fin tabla reservas vigentes -->
