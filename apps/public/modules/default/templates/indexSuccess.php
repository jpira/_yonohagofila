<?php
$es_movil = FALSE; //Aquí se declara la variable falso o verdadero XD
$usuario = $_SERVER['HTTP_USER_AGENT']; //Con esta leemos la info de su navegador

$usuarios_moviles = "Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV"; //En esta cadena podemos quitar o agregar navegadores de dispositivos moviles, te recomiendo que hagas un echo $_SERVER['HTTP_USER_AGENT']; en otra pagina de prueba y veas la info que arroja para que despues agregues el navegador que quieras detectar

$navegador_usuario = explode(',', $usuarios_moviles);

foreach ($navegador_usuario AS $navegador) { //Este ciclo es el que se encarga de detectar el navegador y devolver un TRUE si encuentra la cadena
    if (strrpos($usuario, $navegador) !== false) { //Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV
        $es_movil = 'ES MOVIL';
    }
}
echo $es_movil;
?>
<div class="home">
    <?php
    if (!$sf_user->isAuthenticated()) {
        echo include_partial('parciales/video');
    }
    ?>
    <?php
    $locales = Doctrine_Query::create()->from('Parametro p, p.Local')
            ->execute();

    $i = 1;
    foreach ($locales as $local):

        $res = '';
        $palabras = $local->get('descripcion');
        $palabras_claves = 'comida, cine, bar, fiesta';
        $palabra_usuario = explode(',', $palabras_claves);
        foreach ($palabra_usuario as $clave) {
            if (strrpos($palabras, $clave)) {
                $res = $res . '' . $clave;
            }
        }
//    $cadena = str_replace(" ", "", $local->get('Local')->get('nombre'));
//    $cadena1 = str_replace(" ", "", $local->get('Local')->get('direccion'));
//    $res = $res . ' ' . $cadena . ' ' . $cadena1;
        ?>
        <div class="element <?php echo $res ?> element-portfolio portfolio height-auto width2-1 fd-blanco" data-category="<?php echo $res ?>">
                <!--<input type="hidden" class="order" value="3">-->
            <div class="contenedor-logo-disponibilidad">
                <div class="marca-comercio">
                    <?php echo image_tag('/uploads/imagen/' . $local->get('Local')->get('imagen'), array('size' => '120x0', 'class' => 'logo-comercio')) ?>
                </div>
                <div class="disponibilidad-comercio">
                    <div id="gauge<?php echo $i ?>" class="row-fluid gauge" style="height:50px"></div>
                    <p>Ocupado</p>

                </div>
            </div>
            <!--        <div class="disponibilidad-comercio">
            <?php //echo image_tag('/img/barra-disponibilidad.png')   ?>
                    </div>-->
            <div class="contenedor-mensaje-evento-local">
                <?php
                $eventos = Doctrine_Query::create()->from('Eventos_local')
                        ->where('local_id = ? AND fecha_evento = ?', array($local->get('Local')->get('id'), date('Y-m-d')))
                        ->fetchOne();
                ?>
                <?php if ($eventos): ?>
                    <a class="mensaje-evento-local" href="<?php $eventos->get('link') ?>" onclick="this.target='_blank'"><?php echo image_tag('/img/bg-btn-nuevo-evento.png', array('title' => 'Evento')) ?></a>
                    <!--<a href="http://www.google.com" onclick="this.target='_blank'"><?php echo image_tag('/img/estrella.jpg', array('title' => 'Evento')) ?></a>-->
                <?php endif; ?>
            </div> 
            <div class="calificacion-comercio">
                <p>Calificación usuarios</p>
                <?php echo image_tag('/img/seccion-comercios/estrellas-calificacion.png', array('class' => 'estrellas-calificacion')) ?>
            </div>
            <div class="redes-comercio">
                    <!--<p>560</p>-->            
                <a href="https://www.facebook.com/<?php //echo $local->get('Local')->get('facebook')                  ?>" target="_blank"><?php echo image_tag('/img/redes-sociales-ynhf/red-facebook.png') ?></a>
                <a href="http://www.youtube.com/<?php //echo $local->get('Local')->get('youtube')                  ?>" target="_blank"><?php echo image_tag('/img/redes-sociales-ynhf/red-youtube.png') ?></a>
                <a href="https://twitter.com/<?php //echo $local->get('Local')->get('twitter')                  ?>" target="_blank"><?php echo image_tag('/img/redes-sociales-ynhf/red-twitter.png') ?></a>
            </div>
            <div class="clearfix"></div>
            <div class="descripcion-local">
                <p class="nombre-comercio"><?php echo $local->get('Local')->get('nombre') ?></p>
                <p class="texto-descripcion"><?php echo $local->get('descripcion') ?></p>
                <p class="texto-descripcion"><?php echo $local->get('Local')->get('direccion') ?><br/><?php echo $local->get('Local')->get('telefono') ?></p>
                <p class="url-web-local"><a href="<?php echo $local->get('Local')->get('web') ?>" target="_blank"><?php echo $local->get('Local')->get('web') ?></a></p> 
            </div>
            <?php $form->setDefault('local_id', $local->get('id')); ?>
            <?php if ($sf_user->isAuthenticated()): ?>
                <div class="busqueda-avanzada">
                    <button class="btn-filtro-local2" id="btn-<?php echo $i ?>" onclick="muestra_oculta('<?php echo $i ?>')" title="">Configurar reserva</button>
                </div>

                <div id="contenido_a_mostrar<?php echo $i ?>" class="estilo-bloque" style="display:none">
                    <?php echo include_partial('parciales/form_local', array('form' => $form, 'i' => $i)) ?>
                </div>
            <?php endif; ?>
    <!--<img src="http://placehold.it/490x531" class="portfolio-image" alt="portfolio image"/>-->
    <!--    <span class="portfolio-title"><i class="icon-play"></i>Whale Ship
    </span>-->
        </div>
        <?php $i = $i + 1; ?>
    <?php endforeach; ?>
</div>
<?php
if ($sf_user->isAuthenticated()) {
    echo include_partial('parciales/alerta');
    echo include_partial('parciales/perfil');
}
?>
<!--
<div class="element about height2 width2">
    <input type="hidden" class="order" value="12">
    <small>
        Where I studied.
    </small>
    <h2 class="title">Education
    </h2>
    <table class="table">
        <tr>
            <th class="no-wrap">2008
            </th>
            <td><h4 class="primary-color">Academic Degree
                    <br/><small>Tech University</small>
                </h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing. Vivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in.
                </p>
                <ul class="list">
                    <li>Graduated Honors Program
                    </li>
                    <li>Dean's List
                    </li>
                    <li>Leader of Art Club
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <th class="no-wrap">2004
            </th>
            <td><h4 class="primary-color">Graduation
                    <br/><small>Art School</small>
                </h4>
                <p>Sagittis in nam leo tortor consectetur adipiscing fringilla quis sagittis in. Nam leo tortor Vivamus, consectetur adipiscingVivamus amet ligula non lectus cursus egestas. Cras erat lorem, fringilla quis sagittis in.
                </p>
            </td>
        </tr>
    </table>
</div>  -->


<!--- 

                    Listado comercios
--------------------------------------------------
-------------------------------------------------
-->

<!--<a href="project_video_1.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="2">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-play"></i>Sword and Shield
    </span>
</a>-->


<!--
<a href="project_image_1.html"  class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="4">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Lunheim
    </span>
</a>
<a href="project_image_2.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="5">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Afro Unicorn
    </span>
</a>

<a href="project_image_3.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="6">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Dodo Bot
    </span>
</a>

<a href="project_image_4.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="10">
    <img src="http://placehold.it/490x531" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Concept Sketches
    </span>
</a>

<a href="project_image_5.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="13">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Oak Village
    </span>
</a>

<a href="project_video_3.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="14">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Skyward Cove
    </span>
</a>

<a href="project_image_6.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="18">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Yettu Gettu
    </span>
</a>-->

<!-- fin listado comercios -->

<!-- Portfolio Items -->
<!--
<a href="project_video_1.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="2">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-play"></i>Sword and Shield
    </span>
</a>

<a href="project_video_2.html" class="element element-portfolio portfolio height2 width2 ajax">
    <input type="hidden" class="order" value="3">
    <img src="http://placehold.it/490x531" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-play"></i>Whale Ship
    </span>
</a>

<a href="project_image_1.html"  class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="4">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Lunheim
    </span>
</a>
<a href="project_image_2.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="5">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Afro Unicorn
    </span>
</a>

<a href="project_image_3.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="6">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Dodo Bot
    </span>
</a>

<a href="project_image_4.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="10">
    <img src="http://placehold.it/490x531" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Concept Sketches
    </span>
</a>

<a href="project_image_5.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="13">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Oak Village
    </span>
</a>

<a href="project_video_3.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="14">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Skyward Cove
    </span>
</a>

<a href="project_image_6.html" class="element element-portfolio portfolio ajax">
    <input type="hidden" class="order" value="18">
    <img src="http://placehold.it/240x262" class="portfolio-image" alt="portfolio image"/>
    <span class="portfolio-title"><i class="icon-picture"></i>Yettu Gettu
    </span>
</a>-->

<!-- Contact -->
<!--<div class="element contact height2">
    <input type="hidden" class="order" value="7">
    <small>
        Personal details.
    </small>
    <h2 class="title">Info
    </h2>
    <table class="table">
        <tr>
            <th>Name:
            </th>
            <td>John Smithy Doe
            </td>
        </tr>
        <tr>
            <th>Birth:
            </th>
            <td>1988/01/27
            </td>
        </tr>
        <tr>
            <th>Phone:
            </th>
            <td>222-222-2222
            </td>
        </tr>
        <tr>
            <th>Email:
            </th>
            <td>contact@email.com
            </td>
        </tr>
        <tr>
            <th>Addr:
            </th>
            <td>123 University Ave
                <br/>2nd Address Line
            </td>
        </tr>
        <tr>
            <th>Website:
            </th>
            <td><a href="http://themeforest.net">www.themeforest.net</a>
            </td>
        </tr>
    </table>
    <hr/>
    <p>Feel free to shoot me an email or give me a ring anytime!
    </p>		
</div>  -->

<!--<div class="element contact map width3">
    <input type="hidden" class="order" value="15">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Toronto,+ON&amp;aq=0&amp;oq=toro&amp;sll=49.303974,-84.738438&amp;sspn=15.573249,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Toronto,+Toronto+Division,+Ontario&amp;ll=43.653226,-79.383184&amp;spn=0.033721,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe>
</div>-->

<div class="element conozcanos width4 height-auto fd-blanco">
    <div class="info-conozcanos">
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
        <div class="texto-conozcanos">
            <p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br /></span>Aenean ut posuere sapien, nec blandit lorem. Sed non orci commodo magna elementum tincidunt. Donec tincidunt ligula diam, viverra vulputate mauris dictum a. Quisque ac commodo ligula. Etiam viverra, orci ultricies sagittis tincidunt</p>
            <p><span>Teléfono<br /></span>781 25 59 / 320 425 45 78</p>
        </div>        
    </div>
    <div class="element contact-2 width2 fd-blanco height-auto">
        <input type="hidden" class="order" value="16">
        <small>
            Ponte en contacto.
        </small>
        <h2 class="title">Escríbenos
        </h2>
        <div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
        <div id="error" class="alert alert-error" style="display:none"></div>

        <form class="contact_form" id="contact_form">

            <?php $x = new escribenosForm();
                  echo $x; ?>
            <br/>
            <button type="submit" id="submit_contact_info" class="btn btn-primary">Enviar <i class="icon-envelope-alt"></i></button>

        </form>
    </div>
</div>
<div class="element contact width2 height2 fd-blanco">
    <!--<input type="hidden" class="order" value="16">-->
    <div>
        <small>
            Ponte en contacto.
        </small>
        <h2 class="title">Escríbenos
        </h2>
        <div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
        <div id="error" class="alert alert-error" style="display:none"></div>

        <form class="contact_form" id="contact_form">

            <?php $x = new escribenosForm();
                  echo $x; ?>
            <br/>
            <button type="submit" id="submit_contact_info" class="btn btn-primary">Enviar <i class="icon-envelope-alt"></i></button>
        </form>
    </div>
</div>
<div class="element contact width2 height2 fd-blanco">
    <input type="hidden" class="order" value="16">
    <div>
        <small>
            Ponte en contacto.
        </small>
        <h2 class="title">¿Estás Interesado?
        </h2>
        <div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
        <div id="error" class="alert alert-error" style="display:none"></div>

        <form class="contact_form" id="contact_form">

            <?php $x = new interesadoForm();
                  echo $x; ?>

            <br/><br/>
            <button type="submit" id="submit_contact_info" class="btn btn-primary">Enviar <i class="icon-envelope-alt"></i></button>
        </form>
    </div>
</div>

<!--<div class="element contact height2">
    <input type="hidden" class="order" value="17">
    <small>
        Work Address
    </small>
    <h2 class="title">Office
    </h2>
    <p>
        <strong>Office Building Name</strong><br>
        1st Line of Address<br/>
        2nd Line of Address
    </p>
    <br/>
    <small>Follow me</small>
    <h2 class="title">Networks
    </h2>
    <p>
        <a href="#">
            <i class="foundicon-twitter pad-right"></i> Follow me on Twitter
        </a><br/>
        <a href="#">
            <i class="foundicon-facebook pad-right"></i> View my Facebook page
        </a><br/>
        <a href="#">
            <i class="foundicon-linkedin pad-right"></i> Professional LinkedIn profile
        </a><br/>
        <a href="#">
            <i class="foundicon-dribbble pad-right"></i> Browse my Dribbble
        </a><br/>
        <a href="#">
            <i class="foundicon-rss pad-right"></i> Subscribe to my RSS feed
        </a><br/>
        <a href="#">
            <i class="foundicon-github pad-right"></i> See my work on Github
        </a><br/>
    </p>
</div>-->
<!--<div class="element contact">
    <input type="hidden" class="order" value="19">
    <small>
        Latest from my Twitter.
    </small>
    <h2 class="title">Twitter
    </h2>
    <blockquote class="twitter-content">
    </blockquote>
    <a href="http://www.twitter.com/envato" class="btn btn-primary">@twitter_account <i class="icon-twitter"></i></a>
</div>-->

<!-- Extra non-categorized -->
<!--<div class="element">
    <input type="hidden" class="order" value="9">
    <p class="big-text dark text-no-transform text-cursive">I promise to deliver <span class="primary-color ">innovation</span>, <span class="primary-color ">creativity</span>, and <span class="primary-color ">success</span>.
    </p>
</div>-->

<!--<div class="element">
    <input type="hidden" class="order" value="20">
    <blockquote>John Doe is a great guy to work with. Constantly reliable and efficient. A++.
        <small>Bob Smith</small>
    </blockquote>
    <blockquote>Delivered results immediately. Impeccable attention to detail.
        <small>Jane Smith</small>
    </blockquote>
</div>   -->
