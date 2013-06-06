        <div id="sidebar" class="">
            <div class="scrollbar">
                <div class="track">
                    <div class="thumb">
                        <div class="end"></div>
                    </div>
                </div>
            </div>
            <div class="viewport ">
                <div class="overview collapse">
                    <div class="search row-fluid container">
                        <h2>Search</h2>
                        <form class="form-search">
                            <div class="input-append">
                                <input type="text" class=" search-query" placeholder="">
                                <button class="btn_search color_4">Search</button>
                            </div>
                        </form>
                    </div>                    
                    <ul id="sidebar_menu" class="navbar nav nav-list container full">
                        <li class="accordion-group "> <a class="dashboard " href="<?php echo url_for('@homepage') ?>"><?php echo image_tag("/img/menu_icons/dashboard.png") ?><span>Home Page</span></a> </li>
                        <?php if ($sf_user->hasCredential('ALL ACCESS')): ?>
                            <li class="accordion-group color_7"> <a class="accordion-toggle widgets collapsed " data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse1"><?php echo image_tag("/img/menu_icons/settings.png") ?><span>Admin</span></a>
                                <ul id="collapse1" class="accordion-body collapse">
                                    <li><a href="<?php echo url_for('@usuario') ?>">Usuarios</a></li>
                                    <li><a href="<?php echo url_for('@perfil') ?>">Perfiles</a></li>
                                    <li><a href="<?php echo url_for('@credencial') ?>">Credenciales</a></li>
                                    <li><a href="#">Logs</a></li>
                                </ul>
                            </li>
                        <?php endif; ?>
                        <li class="accordion-group color_24"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse2"><?php echo image_tag("/img/menu_icons/docs.png") ?><span>Tablas Maestras</span></a>
                            <ul id="collapse2" class="accordion-body collapse">
                                <?php if ($sf_user->hasCredential('ALL ACCESS')): ?>
                                    <li><a href="<?php echo url_for('@local') ?>">Locales</a></li>
                                    <li><a href="<?php echo url_for('@parametro') ?>">Parametros</a></li>
                                    <li><a href="<?php echo url_for('@promedio') ?>">Promedios Consumo</a></li>
                                <?php endif; ?>
                                <li><a href="<?php echo url_for('@tipos_eventos') ?>">Tipos de Eventos</a></li>
                            </ul>
                        </li>
                        <li class="accordion-group color_13"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse3"><?php echo image_tag("/img/menu_icons/files.png") ?> <span>Procesos</span></a>
                            <ul id="collapse3" class="accordion-body collapse"> 

                                <li><a href="<?php echo url_for('@alarma') ?>">Alertas</a></li>
                                <li><a href="<?php echo url_for('@eventos_local') ?>">Eventos</a></li>
                                <li><a href="<?php echo url_for('@horario_atencion') ?>">Horarios</a></li>
                                <?php if ($sf_user->hasCredential('ALL ACCESS')): ?>
                                    <li><a href="<?php echo url_for('@ranking') ?>">Rankings</a></li>
                                    <li><a href="<?php echo url_for('@reserva') ?>">Reservas</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu_states row-fluid container ">
                        <h2 class="pull-left">Menu Settings</h2>
                        <div class="options pull-right">
                            <button id="menu_state_1" class="color_4" rel="tooltip" data-state ="sidebar_icons" data-placement="top" data-original-title="Icon Menu">1</button>
                            <button id="menu_state_2" class="color_4 active" rel="tooltip" data-state ="sidebar_default" data-placement="top" data-original-title="Fixed Menu">2</button>
                            <button id="menu_state_3" class="color_4" rel="tooltip" data-placement="top" data-state ="sidebar_hover" data-original-title="Floating on Hover Menu">3</button>
                        </div>
                    </div>
                    <!-- End sidebar_box --> 

                </div>
            </div>
        </div>
