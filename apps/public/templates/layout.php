<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <title><?php echo $sf_response->getTitle() ?></title>
        <link rel="shortcut icon" href="favicon.ico" />
        <?php include_stylesheets() ?>

        <!-- fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <?php echo javascript_include_tag('vendor/html5-3.6-respond-1.1.0.min.js'); ?>
        <![endif]-->

        <?php echo javascript_include_tag('jquery.js'); ?>
    </head>
    <body>
        <div id="loading"><?php echo image_tag("/admin/img/ajax-loader.gif") ?></div>
        <?php echo include_partial('parciales/navegador') ?>

        <!-- Ajax Content Load -->
        <div class="container container-top">
            <?php echo image_tag('/img/luces.png', array('class' => 'luces')) ?>
            <div id="container-ajax" class="element">
                <a href="#" class="close-ajax"><span class="x-button">&#10006;</span></a>
                <div class="ajax-content"></div>
            </div>
        </div>
        <input type="hidden" class="last-scroll" value="0">

        <div id="container-isotope" class="super-list variable-sizes clearfix">
            <?php echo $sf_content ?>
        </div>
        <?php echo include_partial('parciales/footer') ?>
        <?php include_javascripts() ?>
        <?php echo include_partial('parciales/javascript') ?>
    </body>
</html>
