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
        <!--        <div class="filtro-buscador">
                    <form class="busqueda-avanzada filtro2" action="<?php echo url_for('@filtrar') ?> " method="POST" >
                        <input type="date" id="bfecha" name="bfecha" placeholder="Buscar por fecha de reserva" />
                        <input type="text" id="bnombre" name="bnombre" placeholder="Buscar por nombre del lugar" />
                        <input class="btn-filtro-local" type="submit" value="Búsqueda avanzada">
                    </form>
                </div>-->
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
                    <?php // QRcode::png($r->get('slug'));   ?>
                    <td><a href="http://www.codigos-qr.com/qr/php/qr_img.php?d=<?php echo $r->get('slug') ?>&s=10&e=" target="_new"><img class="img-perfil-usuario" src="../img/icon-ver.png"/></a></td>
                    <td><a href="<?php echo url_for('@cancelarr?id=' . $r->get('id')) ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>
                </tr>
            <?php endforeach; ?>

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
                    <?php for ($i = $page2 + 1; $i <= $lastpage2; $i++) { ?>
                        <li><a href="<?php echo url_for('@homepage?page2=' . $i) ?>"><?php echo $i; ?></a></li>
                        <?php
                    }
                    //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
                    if ($lastpage2 > $page2) {
                        ?>       
                        <li class="next"><a href="<?php echo url_for('@homepage?page2=' . $nextpage) ?>" >Next &raquo;</a></li>
                    <?php } else {
                        ?>
                        <li class="next-off">Next &raquo;</li>
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
                            ?>  <li><a href="<?php echo url_for('@homepage?page2=' . $j) ?>" ><?php echo $j; ?></a></li><?php
                }
            }
            //SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT    
            if ($lastpage2 > $page2) {
                        ?> 
                        <li class="next"><a href="<?php echo url_for('@homepage?page2=' . $nextpage) ?>">Next &raquo;</a></li><?php
            } else {
                        ?> <li class="next-off">Next &raquo;</li><?php
            }
        }
                ?></ul></br>
        <?php endif; ?>