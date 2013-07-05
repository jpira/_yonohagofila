<div class="navbar navbar-fixed-top">
    <div class="filtro-tipo-local">
        <div class="bloque-filtros">
            <form id="ui_element" class="sb_wrapper busqueda-avanzada" action="<?php echo url_for('@filtrar') ?>" method="POST">
                <!--<p>-->
                <!--<botton > Búsqueda avanzada</button>-->
                <!--<a href="#" class="sb_input blanco btn-filtro-local2" style="border: 10px">Busqueda avanzada</a>-->
                    <!--<input class="sb_input" type="text"/>-->
                <!--</p>-->
                <input class="sb_input btn-filtro-local2" type="button" value="Búsqueda avanzada"></input>
                <ul class="sb_dropdown" style="display:none">  
                    <li><label>Buscar por nombre</label><input class="sb_input" id="busqueda0" type="search" name="busqueda" placeholder="Buscar"></li>
                    <li><label>Buscar por dirección</label><input class="sb_input" id="busqueda1" type="search" name="busqueda1" placeholder="Buscar"></li>
                    <li><label>Bucar por palabras claves</label><input class="sb_input" id="busqueda2" type="search" name="busqueda2" placeholder="Buscar"></li>
                    <li><input class="btn-filtro-local2" type="submit" value="Buscar" onclick="alert('Construyendo proceso de búsqueda');return false;" /></li>
                </ul>
            </form>
            <form class="busqueda-sencilla" action="<?php echo url_for('@filtrar') ?>" method="POST" >
                <input class="input-filtro-local" id="busqueda" type="search" name="busqueda" placeholder="Buscar" />
                <input class="btn-lupa" type="submit" value=" " onclick="alert('Construyendo proceso de búsqueda');return false;" />
            </form>
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

                    <li><a href="#portfolio" data-option-value=".portfolio"><span>Comercios</span></a></li>
                    <li><a href="#contact" data-option-value=".contact"><span>Contáctenos</span></a></li>
                    <li class="show-title">
                    </li>
<!--                    <li><a href="#show-all" data-option-value="*" class="selected"> <i class="icon-home"></i> <span class="name">Inicio</span></a></li>
                    <li><a href="#about" data-option-value=".about"><i class="icon-user"></i> <span class="name">Conózcanos</span></a></li>
                    <li><a href="#portfolio" data-option-value=".portfolio"><i class="icon-tablet"></i> <span class="name">Políticas y condiciones de uso</span></a></li>
                    <li><a href="#contact" data-option-value=".contact"><i class="icon-envelope-alt"></i> <span class="name">Contáctenos</span></a></li>
                    <li class="show-title">
                    </li>-->
                </ul>

                    <?php if ($sf_user->isAuthenticated()): ?>
                        <li><a href="<?php echo url_for("@logout") ?>"><span class="btn-salir">Salir</span></a></li>
                    <?php endif ?>
                <div class="bloque-redes-ynhf">
                    <ul>
                        <li><strong>Conoce más:</strong></li>
                        <li>
                            <a class="red-twitter-ynhf" href="#" onclick="alert('Falta por definir link red social');return false;" ><?php echo image_tag('/img/redes-sociales-ynhf/red-twitter.png') ?></a>                    
                        </li>
                        <li>
                            <a class="red-youtbe-ynhf" href="#" onclick="alert('Falta por definir link red social');return false" ><?php echo image_tag('/img/redes-sociales-ynhf/red-youtube.png') ?></a>
                        </li>
                        <li>
                            <a class="red-face-ynhf" href="#" onclick="alert('Falta por definir link red social');return false;"><?php echo image_tag('/img/redes-sociales-ynhf/red-facebook.png') ?></a>                          
                        </li>
                    </ul>
                </div>
                <?php // if ($sf_user->isAuthenticated()): ?>
                        <!--<li><a href="#about" data-option-value=".about"><span>Perfil</span></a></li>-->
                <?php // endif; ?>
            </div><!--/.nav-collapse --> 
            <?php if ($sf_user->isAuthenticated()): ?>
            <div class="nav option-set btn-perfil-usuario" data-option-key="filter" >
                <p>Bienvenido <span>Juan Fernando Lopez</span></p>
                <a href="#about" data-option-value=".about"><?php echo image_tag('/img/icono-btn-perfil.png') ?></a>                          
            </div>

            

                <button class="btn-alarma" href="#" onclick="alert('Construyendo proceso de alarma');return false;">Generar alarma de uso</button>
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
                    <a class="mensaje-registrase" href="<?php echo url_for('@nuevou') ?>" ><span>¿Aún no estás registrado?</span></a>
                </div>                
            <?php endif; ?>
        </div>

    </div>

</div>
