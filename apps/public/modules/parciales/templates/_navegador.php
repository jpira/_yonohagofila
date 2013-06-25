<div class="navbar navbar-fixed-top">
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
                    <li><a href="#show-all" data-option-value="*" class="selected"><span>Inicio</span></a></li>
<!--                    <li><a href="#contact" data-option-value=".contact"><span>Contáctenos</span></a></li>
                    <li><a href="#portfolio" data-option-value=".portfolio"><span>Terminos Y Condiciones</span></a></li>-->
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <li><a href="#about" data-option-value=".about"><span>Perfil</span></a></li>                        
                        <li><a href="#contact" data-option-value=".contact"><span>Alertas</span></a></li>
                    <?php endif; ?>

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
                    <a href="<?php echo url_for("@logout") ?>"><span>Salir</span></a>
                <?php else: ?>
                    <div class="form-ingreso-login">
                        <form class="busqueda-sencilla" action="<?php echo url_for("@login") ?>" method="POST">
                            <input class="input-filtro-local" type="text" id="nombre" name ="nombre" placeholder="Nombre" required>
                            <input class="input-filtro-local" type="password" id="password" name="password" placeholder="Contraseña" required>
                            <input type="submit" value="Entrar" />
                        </form></br>
                        <a href="<?php echo url_for('@nuevou') ?>" ><span>Aun no estas registrado ?</span></a>
                    </div>
                <?php endif; ?>
            </div><!--/.nav-collapse -->

        </div>
    </div>
    <div class="filtro-tipo-local">
        <form class="busqueda-avanzada">
            <input class="input-filtro-local" type=“search” name=“busqueda” placeholder="Buscar">
            <input class="btn-filtro-local" type="submit" value="Búsqueda">
        </form>
    </div>
</div>