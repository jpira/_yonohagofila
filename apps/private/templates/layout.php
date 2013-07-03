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
        <?php echo javascript_include_tag('jquery.js') ?>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <?php echo javascript_include_tag('html5.js') ?>
        <![endif]-->
    </head>
    <body>        
        <div id="loading"><?php echo image_tag("/img/ajax-loader.gif") ?></div>
        <div id="responsive_part">
            <div class="logo"> <a href="<?php echo url_for('@homepage') ?>"><span>Start</span><span class="icon"></span></a> </div>            
            <ul class="nav responsive">
                <li>
                    <button class="btn responsive_menu icon_item" data-toggle="collapse" data-target=".overview"> <i class="icon-reorder"></i> </button>
                </li>
            </ul>
        </div>
        <!-- Responsive part -->
        <?php echo include_partial('parciales/menu') ?>  
        <div id="main">
            <div class="container">
                <?php echo include_partial('parciales/menuusuario') ?> 
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
