       <script type="text/javascript">
            $(function() {
                var Page = (function() {

                    var config = {
                        $bookBlock: $( '#bb-bookblock' ),
                        $navNext  : $( '#bb-nav-next' ),
                        $navPrev  : $( '#bb-nav-prev' ),
                        $navJump  : $( '#bb-nav-jump' ),
                        bb        : $( '#bb-bookblock' ).bookblock( {
                            speed       : 800,
                            shadowSides : 0.8,
                            shadowFlip  : 0.7
                        } )
                    },
                    init = function() {

                        initEvents();
              
                    },
                    initEvents = function() {

                        var $slides = config.$bookBlock.children(),
                        totalSlides = $slides.length;

                        // add navigation events
                        config.$navNext.on( 'click', function() {
                            $("#arrow_register").fadeOut();
                            $(".not-member").slideUp();
                            $(".already-member").slideDown();
                            config.bb.next();
                            return false;

                        } );

                        config.$navPrev.on( 'click', function() {

                            $(".not-member").slideDown();
                            $(".already-member").slideUp();
                            config.bb.prev();
                            return false;

                        } );

                        config.$navJump.on( 'click', function() {
                
                            config.bb.jump( totalSlides );
                            return false;

                        } );
              
                        // add swipe events
                        $slides.on( {

                            'swipeleft'   : function( event ) {
                
                                config.bb.next();
                                return false;

                            },
                            'swiperight'  : function( event ) {
                
                                config.bb.prev();
                                return false;
                  
                            }

                        } );

                    };

                    return { init : init };

                })();

                Page.init();

            });
        </script> 
        <script type='text/javascript'>
 
            $(window).load(function() {
                $('#loading1').fadeOut();
            });
            $(document).ready(function() {
                $("input:checkbox, input:radio, input:file").uniform();


                $('[rel=tooltip]').tooltip();
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
