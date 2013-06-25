<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <META http-equiv="Page-Enter" content="blendTrans(Duration=0.2)">
        <META http-equiv="Page-Exit" content="blendTrans(Duration=0.2)">
        <title>4104 - Bird - Admin Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="css/images/favicon.png">
        <!-- Le styles -->
        <link href="css/twitter/bootstrap.css" rel="stylesheet">
        <link href="css/base.css" rel="stylesheet">
        <link href="css/twitter/responsive.css" rel="stylesheet">
        <link href="css/jquery-ui-1.8.23.custom.css" rel="stylesheet">
        <script src="js/plugins/modernizr.custom.32549.js"></script>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

    </head>

    <body>

        <div id="loading">
            <!-- Login page -->
            <div id="error404" class="other_pages" >



                <div class="row-fluid container spacer fluid">
                    <div class="content span6">

                        <img src="../web/img/404-fry.png" width="210" height="294" align="left">
                    </div>
                    <div class="span6">
                        <h2>Not sure if</h3>
                            <h1>404 Page</h2>
                        <h3 class="bottom-line">Or I don`t get the joke</h3>
                    </div>
                </div><!-- End .container -->
                


            </div> <!-- End #error404 -->
              <!-- <img src="img/ajax-loader.gif"> -->
        </div> <!-- End #loading -->


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->

        <script src="js/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="js/plugins/jquery.sparkline.min.js"></script>
        <script src="js/plugins/excanvas.compiled.js"></script>

        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
        <script src="js/fileinput.jquery.js"></script>
        <script src="js/jquery-ui-1.8.23.custom.min.js"></script>
        <script src="js/jquery.touchdown.js"></script>


        <script language="javascript" type="text/javascript" src="js/jnavigate.jquery.min.js"></script>




        <script type='text/javascript'>
 
            $(window).load(function() {
                $('#loading1').fadeOut();
            });
            $(document).ready(function() {

                $('body').css('display', 'none');
                $('body').fadeIn(500);

                $("#logo a, #sidebar_menu a:not(.accordion-toggle), a.ajx").click(function() {
                    event.preventDefault();
                    newLocation = this.href;
                    $('body').fadeOut(500, newpage);
                });
                function newpage() {
                    window.location = newLocation;
                }
            });
      
    

        </script>

    </body>
</html>
