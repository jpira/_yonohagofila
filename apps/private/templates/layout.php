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
        <?php echo $sf_content ?>
    <?php echo javascript_include_tag('jquery.js') ?>
    <?php echo javascript_include_tag('jquery-ui-1.8.23.custom.min.js') ?>
    <!--[if !IE]> -->
    <!--[if !IE]> -->
    <script src="js/plugins/enquire.min.js" type="text/javascript"></script> 
    <!-- <![endif]-->
    <!-- <![endif]-->
    <!--[if lt IE 7]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
    <![endif]-->
    <?php include_javascripts() ?>
    <?php echo include_partial('parciales/script') ?>
</body>
</html>
