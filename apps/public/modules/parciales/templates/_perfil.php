<?php if ($sf_user->isAuthenticated()): ?>
    <div class="element home3 width1 round-borders caja-perfil-usuario height-auto">
        <div class="avatar-usuario">
            <?php echo image_tag('/admin/img/'.$sf_user->getAttribute('Usuario')->get('foto'), array('class' => 'img-avatar-usuario')) ?>
            <form class="busqueda-avanzada centrar">
                <!--<button class="btn-filtro-local" onclick="alert('Construyendo proceso cambio de imagen');return false;">Cambiar imagen</button>-->
                <input class="btn-filtro-local" type="submit" value="Cambiar imagen" >
            </form>
        </div>
        <p class="estatus-perfil-usuario">Estatus <?php echo $sf_user->getAttribute('Usuario')->get('estado') ?> <span>Puntuación:53</span></p>
        <div class="info-perfil">
            <p class="titulo">Datos de usuario</p>
            <p class="nombre-usuario"><?php echo $sf_user->getAttribute('Usuario')->get('nombre') ?></p>
            
            <a href="<?php echo url_for('@nuevou') ?>" target="_new" rel="facebox"><?php echo image_tag('/img/icon-editar.png', array('class' => 'img-perfil-usuario')) ?></a>
                
            <div class="contenido-perfil">
                <div class="texto-contenido-perfil">
                    <p>Documento identidad:</p>
                    <p><?php echo $sf_user->getAttribute('Usuario')->get('tipo_identificacion') . ' ' . $sf_user->getAttribute('Usuario')->get('identificacion') ?></p>
                </div>
            </div>
            <div class="contenido-perfil">
                <div class="texto-contenido-perfil">
                    <p>Ciudad:</p>
                    <p>Bogotá, Colombia</p>
                </div>
            </div>
            <div class="contenido-perfil">
                <!--<a href="#"><img class="img-perfil-usuario" src="../img/icon-editar.png" alt="" /></a>-->
                <div class="texto-contenido-perfil">
                    <p>Tu cumpleaños:</p>
                    <p><?php echo $sf_user->getAttribute('Usuario')->get('fecha_nacimiento') ?></p>                
                </div>
            </div>
            <div class="contenido-perfil">
                <!--<a href="#" onclick="return false;"><?php echo image_tag('/img/icon-editar.png', array('class' => 'img-perfil-usuario')) ?></a>-->
                <div class="texto-contenido-perfil">
                    <p>Número telefónico:</p>
                    <p  id="tel" name="tel"><?php echo $sf_user->getAttribute('Usuario')->get('telefono') ?></p>             
                </div>
            </div>
            <div class="contenido-perfil">
                <!--<a href="#" onclick="return false;"><?php echo image_tag('/img/icon-editar.png', array('class' => 'img-perfil-usuario')) ?></a>-->
                <div class="texto-contenido-perfil">
                    <p>e-mail:</p>
                    <p type="email" id="mail" name="mail"><?php echo $sf_user->getAttribute('Usuario')->get('email') ?></p>             
                </div>
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