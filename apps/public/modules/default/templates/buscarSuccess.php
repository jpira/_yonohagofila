<!-- Name and Image-->
<div class="element caja-presentacion primary-bg height2 width4">
<!--    <input type="hidden" class="order" value="0">-->
    <video class="video-presentacion" width="480" poster="images/preview-video.jpg" controls="controls" preload="auto">
        <source src="video/yonohagofilacom_mp4.mp4" type="video/mp4" />
        <source src="video/yonohagofilacom_ogg.ogg" type="video/ogg" />
        <source src="video/yonohagofilacom_webm.webm" type="video/webm" />
        <embed src="video/yonohagofilacom_swf.swf" type="application/x-shockwave-flash" width="480" height="360"></embed>
    </video>
    <h1 class="main-name">Aliquam adipiscing<br/>sem a quam eleifend<br/>vel dignissim metus<br/>ultrices volutpat.</h1>
<!--<img src="http://placehold.it/900x950" class="full" alt="profile image">-->
    <!--    <hr class="thick" />-->
</div>
<div class="mano-acceso">
    <img src="../img/mano-acceso.png" alt="Tu no haces fila">    
</div>

<!-- About -->
<!--<div class="element about width3">
    <input type="hidden" class="order" value="1">
    <small>
        Nice to meet you.
    </small>
    <h2 class="title">About Me
    </h2>
    <p>My name is <strong>Johnny</strong> and I am a web <strong>designer and developer</strong>. I possess a passion for building innovative and functional products.   
    </p>
    <p>You can put a description of yourself here as an introduction. Click around the navigation to see how content is presented.
    </p>
</div>-->
<div class="element about width1 round-borders caja-perfil-usuario height4">
    <?php if ($sf_user->isAuthenticated()): ?>
        <div>
            <img class="img-perfil-usuario" src="../img/thumbnail_george.jpg"/>
        </div>

        <p>Datos de usuario</p>
        <p><?php echo $sf_user->getAttribute('Usuario')->get('nombre') ?></p>
        <div>
            <p>Contraseña:</p>
            <p>xxxxxxxxxxxxxxxx</p>
        </div>
        <p><?php echo $sf_user->getAttribute('Usuario')->get('tipo_identificacion') . ' ' . $sf_user->getAttribute('Usuario')->get('identificacion') ?></p>
        <p>Bogotá, Colombia</p>
        <div>
            <p>Tu cumpleaños:</p>
            <p><?php echo $sf_user->getAttribute('Usuario')->get('fecha_nacimiento') ?></p>
        </div>
        <div>
            <p>Email:</p>
            <p><?php echo $sf_user->getAttribute('Usuario')->get('email') ?></p>
        </div>
        <div>
            <p>Número telefónico:</p>
            <p>315 456 7895</p>
        </div>
        <a href="#"><img class="img-perfil-usuario" src="../img/icon-editar.png" alt="" /></a>
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

    <div class="element about width3 height4">
        <!--<input type="hidden" class="order" value="11">-->
    <!--    <small>
            Where I've worked.
        </small>-->

        <!-- Tabla reservas viegentes-->



        <h2 class="title">Estas son tus reservas vigentes<span>Desde aquí puedes consultar el estado las reservas hechas hasta el momento en tus lugares favoritos.</span></h2>
        <div class="filtro-buscador">
            <form class="busqueda-avanzada filtro2" action="<?php echo url_for('@filtrar') ?> " method="POST" >
                <input type="date" id="bfecha" name="bfecha" placeholder="Buscar por fecha de reserva" />
                <input type="text" id="bnombre" name="bnombre" placeholder="Buscar por nombre del lugar" />
                <input class="btn-filtro-local" type="submit" value="Búsqueda avanzada">
            </form>
        </div>
        <?php
        if ($_POST['bnombre'] != '') {
            $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                    ->where('r.id_usuario = ? AND l.nombre LIKE ? ', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%'))
                    ->orderBy('fecha_reserva desc')
                    ->execute();
        } else {
            $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                    ->where('r.id_usuario = ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), $_POST['bfecha'] . '%'))
                    ->orderBy('fecha_reserva desc')
                    ->execute();
            if ($_POST['bnombre'] != '' and $_POST['bfecha'] != '') {
                $reservas = Doctrine_Query::create()->from('Reserva r, r.Local l')
                        ->where('r.id_usuario = ? AND l.nombre LIKE ? AND r.fecha_reserva LIKE ?', array($sf_user->getAttribute('Usuario')->get('id'), trim($_POST['bnombre']) . '%', $_POST['bfecha'] . '%'))
                        ->orderBy('fecha_reserva desc')
                        ->execute();
            }
        }

//                ->getSqlQuery();        print_r($reservas.'----'.$_POST['bfecha']); die();
        ?>
        <table class="table reservas-vigentes">
            <tr>
                <th class=" blanco">Fecha creacion</th>
                <th class=" blanco">Nombre lugar</th>
                <th class=" blanco">Fecha reserva</th>
                <th class=" blanco">Estado</th>
                <th class=" blanco">Ver reserva</th>
                <th class=" blanco">Cancelar</th>
            </tr>            
            <?php foreach ($reservas as $r): ?>
                <tr>
                    <th><?php echo $r->get('fecha_creacion') ?></th>
                    <th><?php echo $r->get('Local')->get('nombre') ?></th>
                    <th><?php echo $r->get('fecha_reserva') ?></th>
                    <th><?php echo $r->get('estado') ?></th>
                    <td><center><a href="../img/qr_img.png" target="_new" rel="facebox" ><img class="img-perfil-usuario" src="../img/icon-ver.png"/></a></center></td>
                    <td><a href="<?php echo url_for('@cancelarr?id='.$r->get('id')) ?>"><img class="img-perfil-usuario" src="../img/icon-cancelar.png"/></a></td>
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
    <?php endif; ?>
</div>  

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

<!-- Portfolio Items -->

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
</a>

<!-- Contact -->
<div class="element contact height2">
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
</div>  

<div class="element contact map width3">
    <input type="hidden" class="order" value="15">
    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Toronto,+ON&amp;aq=0&amp;oq=toro&amp;sll=49.303974,-84.738438&amp;sspn=15.573249,43.286133&amp;ie=UTF8&amp;hq=&amp;hnear=Toronto,+Toronto+Division,+Ontario&amp;ll=43.653226,-79.383184&amp;spn=0.033721,0.084543&amp;t=m&amp;z=14&amp;output=embed"></iframe>
</div>

<div class="element contact width2 height2">
    <input type="hidden" class="order" value="16">
    <small>
        Get in touch.
    </small>
    <h2 class="title">Email Me
    </h2>
    <div id="success" class="alert alert-success" style="display:none">Your email has been sent. Thank you, I will get back to you soon.</div>
    <div id="error" class="alert alert-error" style="display:none"></div>

    <form class="contact_form" id="contact_form">

        <label class="control-label" for="fname">Name*</label>
        <input type="text" id="fname" placeholder="Name">
        <label class="control-label" for="email">Email*</label>
        <input type="text" id="email" placeholder="Email">

        <label class="control-label" for="message">Message*</label>
        <textarea id="message"></textarea>
        <br/>
        <button type="submit" id="submit_contact_info" class="btn btn-primary">Send Email <i class="icon-envelope-alt"></i></button>

    </form>
</div>

<div class="element contact height2">
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

</div>
<div class="element contact">
    <input type="hidden" class="order" value="19">
    <small>
        Latest from my Twitter.
    </small>
    <h2 class="title">Twitter
    </h2>
    <blockquote class="twitter-content">
    </blockquote>
    <a href="http://www.twitter.com/envato" class="btn btn-primary">@twitter_account <i class="icon-twitter"></i></a>
</div>

<!-- Extra non-categorized -->
<div class="element">
    <input type="hidden" class="order" value="9">
    <p class="big-text dark text-no-transform text-cursive">I promise to deliver <span class="primary-color ">innovation</span>, <span class="primary-color ">creativity</span>, and <span class="primary-color ">success</span>.
    </p>
</div>

<div class="element">
    <input type="hidden" class="order" value="20">
    <blockquote>John Doe is a great guy to work with. Constantly reliable and efficient. A++.
        <small>Bob Smith</small>
    </blockquote>
    <blockquote>Delivered results immediately. Impeccable attention to detail.
        <small>Jane Smith</small>
    </blockquote>
</div>