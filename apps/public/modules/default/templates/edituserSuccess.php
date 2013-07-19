<script src="js/plugins/modernizr.custom.32549.js"></script>
<div class="sf_admin_list">
    <div id="main_container">
        <!--<div class="row-fluid">-->
                <!-- End .title -->
                <div class="content top">
                    <?php use_helper('I18N', 'Date') ?>
                    <?php include_partial('usuario/assets') ?>
                    <h1><?php echo __('Editar Usuario', array(), 'messages') ?></h1>

                    <?php include_partial('usuario/flashes') ?>

                    <div id="sf_admin_content">
                        <?php include_partial('usuario/form', array('usuario' => $usuario, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
                    </div>
                </div>
            <!-- End .content --> 
        </div>
    <!-- End .span12 --> 
</div>
<script type="text/javascript">
    /* <![CDATA[ */
    function checkAll()
    {
        var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
    }
    /* ]]> */
</script>

