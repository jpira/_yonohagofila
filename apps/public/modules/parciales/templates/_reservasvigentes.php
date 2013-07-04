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
    
    <h2 class="title">Estas son tus reservas vigentes<span>Desde aquí puedes consultar el estado las reservas hechas hasta el momento en tus lugares favoritos.</span></h2>
<!--    <div class="filtro-buscador">
        <form class="busqueda-avanzada filtro2" action="<?php echo url_for('@filtrar') ?>" method="POST" >
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

    <table id="reservass" class="table reservas-vigentes">
        <thead>
            <tr>
                <th class=" blanco">Establecimiento</th>
                <th class=" blanco">Fecha reserva</th>
                <th class=" blanco">Estado</th>
                <th class=" blanco">QR Code</th>
                <th class=" blanco">Cancelar</th>
            </tr>   
        </thead>
        <tbody>
            <?php foreach ($reservas as $r): ?>
                <tr>
                    <td><?php echo $r->get('Local')->get('nombre') ?></td>
                    <td><?php echo $r->get('fecha_reserva') ?></td>
                    <td><?php echo $r->get('estado') ?></td>                    
                    <?php // QRcode::png($r->get('slug'));  ?>
                    <td><a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><img class="img-perfil-usuario" src="../img/icon-ver.png"/></a></td>
                    <!--<td><a href="<?php // echo url_for('@cancelarr?id=' . $r->get('id')) ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>-->
                    <td><a href="#" onclick="alert('Construyendo proceso de cancelacion')"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
                                                                    <!--            <td><h4 class="primary-color">Senior Web Designer
                                                                                <br/><small>Company Name</small>
                                                                            </h4>
                                                                            <p>Talk about your job duties and accomplishments here. Tell the world about all the great work you did!
                                                                            </p>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="no-wrap">2012 - 2013
                                                                        </th>
                                                                        <td><h4 class="primary-color">Front-End Engineer
                                                                                <br/><small>Company Name</small>
                                                                            </h4>
                                                                            <p>Talk about your job duties and accomplishments here. Tell the world about all the great work you did!
                                                                            </p>
                                                                            <p>Sagittis in nam leo fringilla quis tortor consectetur adipiscing fringilla quis sagittis in. Nam leo tortor Vivamus, consectetur adipiscingVivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla tortor consectetur adipiscing quis sagittis in.
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th class="no-wrap">2010 - 2012
                                                                        </th>
                                                                        <td><h4 class="primary-color">Graphic Designer
                                                                                <br/><small>Company Name</small>
                                                                            </h4>
                                                                            <p>Talk about your job duties and accomplishments here. Tell the world about all the great work you did!
                                                                            </p>
                                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in.
                                                                            </p>
                                                                        </td>
                                                                    </tr>-->
    </table>
    </br></br>

    <!-- fin tabla reservas vigentes -->