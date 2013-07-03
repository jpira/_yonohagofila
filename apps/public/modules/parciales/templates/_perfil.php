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
    <div class="element about width2 height2">
        <input type="hidden" class="order" value="8">
        <small>
            What I can do for you.
        </small>
        <h2 class="title">Skills
        </h2>
        <strong class="dark">HTML</strong>
        <div class="progress">
            <div class="bar" style="width: 90%"></div>
        </div>
        <strong class="dark">CSS3</strong>
        <div class="progress">
            <div class="bar" style="width: 50%"></div>
        </div>
        <strong class="dark">JQuery</strong>
        <div class="progress">
            <div class="bar" style="width: 60%"></div>
        </div>
        <strong class="dark">UI Design</strong>
        <div class="progress">
            <div class="bar" style="width: 70%"></div>
        </div>
        <strong class="dark">Photoshop</strong>
        <div class="progress">
            <div class="bar" style="width: 55%"></div>
        </div>
        <strong class="dark">Wordpress</strong>
        <div class="progress">
            <div class="bar" style="width: 50%"></div>
        </div>
        <strong class="dark">Communication</strong>
        <div class="progress">
            <div class="bar" style="width: 90%"></div>
        </div>
    </div>  -->

    <?php echo include_partial('parciales/reservasvigentes') ?>
    
    <?php echo include_partial('parciales/historialreservas') ?>
        
    </div>  
<?php endif; ?>