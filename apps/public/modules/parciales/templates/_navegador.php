<div class="navbar navbar-fixed-top">
    <div class="filtro-tipo-local">
        <div class="bloque-filtros">
            <form id="ui_element" class="sb_wrapper busqueda-avanzada" action="" method="POST">
                <!--<p>-->
                <!--<botton > Búsqueda avanzada</button>-->
                <!--<a href="#" class="sb_input blanco btn-filtro-local2" style="border: 10px">Busqueda avanzada</a>-->
                    <!--<input class="sb_input" type="text"/>-->
                <!--</p>-->
                <input class="sb_input btn-filtro-local2" type="button" value="Búsqueda avanzada"></input>
                <ul class="sb_dropdown option-set clearfix" style="display:none" id="filters" data-option-key="filter"> 
                    <!--                    <li><a href="#filter" data-option-value=".bar">bares</a></li>
                                        <li><a href="#filter" data-option-value=".comida">comida</a></li>
                                        <li><a href="#filter" data-option-value=".fiesta">fiesta</a></li>
                                        <li><a href="#filter" data-option-value=".cine">cine</a></li>
                                    </ul>-->
                    <li><label>Buscar por nombre</label><input class="sb_input" id="busqueda0" type="search" name="busqueda" placeholder="Buscar"></li>
                    <li><label>Buscar por dirección</label><input class="sb_input" id="busqueda1" type="search" name="busqueda1" placeholder="Buscar"></li>
                    <li><label>Bucar por palabras claves</label><input class="sb_input" id="busqueda2" type="search" name="busqueda2" placeholder="Buscar"></li>
                    <li><input class="btn-filtro-local2" type="submit" value="Buscar" onclick="alert('Construyendo proceso de búsqueda');return false;" /></li>
                </ul>
            </form>      
            <form class="busqueda-sencilla" action="<?php echo url_for('@filtrar') ?>" method="POST" >
                <input class="input-filtro-local" id="busqueda" type="text" name="busqueda" placeholder="Buscar" />
                <input class="btn-lupa" type="submit" value=" " onclick="alert('Construyendo proceso de búsqueda');return false;" />
            </form>
            <!--            <section >
                            <ul id="filters" class="option-set clearfix" data-option-key="filter">
                                <li><a href="#filter" data-option-value=".bar">bares</a></li>
                                <li><a href="#filter" data-option-value=".comida">comida</a></li>
                                <li><a href="#filter" data-option-value=".fiesta">fiesta</a></li>
                                <li><a href="#filter" data-option-value=".cine">cine</a></li>
                            </ul>            
                        </section>-->



            <!--                <form class="busqueda-avanzada">
                                <input class="btn-filtro-local" type="submit" value="Búsqueda avanzada">
                            </form>                -->
        </div>
    </div>
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"></a>

            <div class="nav-collapse collapse">
                <ul class="nav option-set" data-option-key="filter">
                    <!--                    	Uncomment this to filter elements for homepage 
                                        <li><a href="#home" data-option-value="home" class="selected">home</a></li>
                    -->
                    <li><a href="#home" data-option-value=".home" class="selected"><span>Inicio</span></a></li>
<!--                    <li><a href="#home2" data-option-value=".home2"><span>Psanico</span></a></li>-->
                    <li><a href="#home" data-option-value=".conozcanos"><span>Conozcanos</span></a></li>

<!--<li><a href="#portfolio" data-option-value=".portfolio"><span>Comercios</span></a></li>-->
                    <li><a href="#contact" data-option-value=".contact"><span>Contáctenos</span></a></li>
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <li><a href="#home3" data-option-value=".home3"><span>Perfil</span></a></li>
                        <li><a href="<?php echo url_for("@logout") ?>" onclick="window.location=this"><span>Salir</span></a></li>
                    <?php endif ?>
                    <li><a href="#ingreso" data-option-value=".ingreso"><span>Login</span></a></li>
                    <li class="show-title"></li>
<!--                    <li><a href="#show-all" data-option-value="*" class="selected"> <i class="icon-home"></i> <span class="name">Inicio</span></a></li>
                    <li><a href="#about" data-option-value=".about"><i class="icon-user"></i> <span class="name">Conózcanos</span></a></li>
                    <li><a href="#portfolio" data-option-value=".portfolio"><i class="icon-tablet"></i> <span class="name">Políticas y condiciones de uso</span></a></li>
                    <li><a href="#contact" data-option-value=".contact"><i class="icon-envelope-alt"></i> <span class="name">Contáctenos</span></a></li>
                    <li class="show-title">
                    </li>-->
                </ul>
            </div><!--/.nav-collapse --> 
            <?php if ($sf_user->isAuthenticated()): ?>
                <div class="nav option-set btn-panico" data-option-key="filter">

                    <a href="#home2" data-option-value=".home2" onclick="$(this).removeClass('selected');"><?php echo image_tag('/img/btn-panico.png') ?></a>
                    <!--<button class="btn-alarma" href="#" onclick="muestra_oculta('x')"><?php echo image_tag('/img/btn-panico.png') ?></button>-->
                </div>
                <div class="btn-perfil-usuario" data-option-key="filter" >
                    <p>Bienvenido <span><?php echo $sf_user->getAttribute('Usuario')->get('nombre') ?></span><span class="estatus-btn-perfil">Estatus <?php echo $sf_user->getAttribute('Usuario')->get('estado') ?></span></p>
                    <ul>
                        <li class="dropdown"> <a id="dLabel" role="button" data-toggle="dropdown">
                                <?php echo image_tag('/img/icono-btn-perfil.png') ?></a>                          
                            <ul class="dropdown-menu option-set" data-option-key="filter">
                                <li><a href="#home3" data-option-value=".home3" onclick="$(this).removeClass('selected');"><i class="icon-user"></i>Perfil</a></li>
                                <li><a href="<?php echo url_for("@logout") ?>" onclick="window.location=this"><i class="icon-lock"></i>Log Out</a></li>
                            </ul>
                        </li>

                    </ul>

                </div>

                <!--                    <div >
                                        <ul class="nav option-set" data-option-key="filter">
                                            <li>
                                                <p>Bienvenido <span>Juan Fernando Lopez</span></p>
                                                
                                            </li>
                                            <li>
                                                <a href="#about" data-option-value=".about"><img src="../img/icono-btn-perfil.png"/></a>                          
                                               
                                            </li>
                                            <li>
                                                <a href="#show-all" data-option-value="*"><img src="../img/icono-btn-perfil.png"/></a>                          
                                               
                                            </li>
                                        </ul>
                                    </div>-->

            <?php else: ?>
                <div class="form-ingreso-login">                    
                    <form class="busqueda-sencilla" action="<?php echo url_for("@login") ?>" method="POST">
                        <input class="input-filtro-local" type="text" id="nombre" name ="nombre" placeholder="Nombre" required>
                        <input class="input-filtro-local" type="password" id="password" name="password" placeholder="Contraseña" required>
                        <input class="btn-filtro-local2" type="submit" value="Entrar" />
                    </form></br>                
                    <a class="mensaje-registrase" href="<?php echo url_for('@nuevou') ?>" >¿Aún no estás registrado?</a>
                </div>                
            <?php endif; ?>
        </div>

    </div>

</div>
