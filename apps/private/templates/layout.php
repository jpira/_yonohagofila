<!DOCTYPE html>
<html class="sidebar_default  no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <title>Admin <?php echo $sf_response->getTitle() ?></title>
        <link rel="shortcut icon" href="/favicon.ico" />     
        <?php include_stylesheets() ?>
        <?php echo javascript_include_tag('plugins/modernizr.custom.32549.js') ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <?php echo javascript_include_tag('html5.js') ?>
        <![endif]-->
    </head>
    <body>

        <div id="loading"><img src="../img/ajax-loader.gif"></div>
        <div id="responsive_part">
            <div class="logo"> <a href="<?php echo url_for('@homepage') ?>"><span>Start</span><span class="icon"></span></a> </div>            
            <ul class="nav responsive">
                <li>
                    <button class="btn responsive_menu icon_item" data-toggle="collapse" data-target=".overview"> <i class="icon-reorder"></i> </button>
                </li>
            </ul>
        </div>
        <!-- Responsive part -->

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
                        <li class="accordion-group "> <a class="dashboard " href="<?php echo url_for('@homepage') ?>"><img src="../img/menu_icons/dashboard.png"><span>Home Page</span></a> </li>
                        <?php if($sf_user->hasCredential('ALL ACCESS')):?>
                        <li class="accordion-group color_7"> <a class="accordion-toggle widgets collapsed " data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse1"> <img src="../img/menu_icons/settings.png"><span>Admin</span></a>
                            <ul id="collapse1" class="accordion-body collapse">
                                <li><a href="<?php echo url_for('@usuario') ?>">Usuarios</a></li>
                                <li><a href="<?php echo url_for('@perfil') ?>">Perfiles</a></li>
                                <li><a href="<?php echo url_for('@credencial') ?>">Credenciales</a></li>
                                <li><a href="#">Logs</a></li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <li class="accordion-group color_24"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse2"> <img src="../img/menu_icons/docs.png"><span>Tablas Maestras</span></a>
                            <ul id="collapse2" class="accordion-body collapse">
                                <?php if($sf_user->hasCredential('ALL ACCESS')):?>
                                <li><a href="<?php echo url_for('@local') ?>">Locales</a></li>
                                <li><a href="<?php echo url_for('@parametro') ?>">Parametros</a></li>
                                <li><a href="<?php echo url_for('@promedio') ?>">Promedios Consumo</a></li>
                                <?php endif;?>
                                <li><a href="<?php echo url_for('@tipos_eventos') ?>">Tipos de Eventos</a></li>
                            </ul>
                        </li>
                        <li class="accordion-group color_13"> <a class="accordion-toggle widgets collapsed" data-toggle="collapse" data-parent="#sidebar_menu" href="#collapse3"> <img src="../img/menu_icons/files.png"><span>Procesos</span></a>
                            <ul id="collapse3" class="accordion-body collapse"> 
                                
                                <li><a href="<?php echo url_for('@alarma') ?>">Alertas</a></li>
                                <li><a href="<?php echo url_for('@eventos_local') ?>">Eventos</a></li>
                                <li><a href="<?php echo url_for('@horario_atencion') ?>">Horarios</a></li>
                                <?php if($sf_user->hasCredential('ALL ACCESS')):?>
                                <li><a href="<?php echo url_for('@ranking') ?>">Rankings</a></li>
                                <li><a href="<?php echo url_for('@reserva') ?>">Reservas</a></li>
                                <?php endif;?>
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
        <div id="main">
            <div class="container">
                <div class="header row-fluid">
                    <div class="logo"> <a href="<?php echo url_for('@homepage') ?>"><span>Start</span><span class="icon"></span></a> </div>
                    <div class="top_right">
                        <ul class="nav nav_menu">
                            <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                    <div class="title"><span class="name">George</span><span class="subtitle">Future Buyer</span></div>
                                    <span class="icon"><img src="../img/thumbnail_george.jpg"></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="<?php echo url_for('@logout') ?>"><i class=" icon-lock"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End top-right --> 
                </div>
                <?php echo $sf_content ?>
                <div id="footer">
                    <p> &copy; Yonohagofila.com </p>
                    <?php echo include_partial('parciales/legales') ?>                    
                </div>
            </div>
        </div>
        <?php echo include_partial('parciales/colores') ?>
        <?php echo include_partial('parciales/script') ?>
    </body>
</html>
