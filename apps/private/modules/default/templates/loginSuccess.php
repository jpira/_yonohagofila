<!DOCTYPE html>
<html class="no-js login" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Start Login - Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="css/images/favicon.png">
    </head>

    <body>
        <div id="login_page"> 
            <!-- Login page -->
            <div id="login">
                <div class="row-fluid fluid">
                    <div class="span5"> <img src="../../img/logo-ynhf-01.png" /> </div>
                    <div class="span7">
                        <div class="title">
                            <!--<span class="name">George</span>-->
                            <span class="subtitle">Locked</span>
                        </div>
                        <div class="content ">
                            <form class="bs-docs-example form-horizontal" action="" method="POST">
                                <div class="control-group row-fluid">
                                    <div class="controls span9 input-append">
                                        <?php echo $form ?>
                                    </div>
                                </div>
                                <div class="control-group row-fluid">
                                    <div class="span3 visible-desktop"></div>
                                    <div class="controls span5">
                                        <button type="submit" class="btn color_4">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script> 
        <script type="text/javascript" src="js/plugins/jquerypp.custom.js"></script> 
        <script type="text/javascript" src="js/plugins/jquery.bookblock.js"></script> 
        <?php echo include_partial('parciales/script2') ?>
    </body>
</html>