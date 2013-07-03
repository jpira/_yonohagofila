<script src="js/plugins/modernizr.custom.32549.js"></script>
<div class="sf_admin_list">
    <div id="main_container">
        <!--<div class="row-fluid">-->
        <div class="span12">
            <div class="box paint color_18">
                <!-- End .title -->
                <div class="content top">
                    [?php use_helper('I18N', 'Date') ?]
                        [?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?] 
                        <h1>[?php echo <?php echo $this->getI18NString('new.title') ?> ?]</h1>

                        [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

                        <div id="sf_admin_header">
                            [?php include_partial('<?php echo $this->getModuleName() ?>/form_header', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
                        </div>

                        <div id="sf_admin_content">
                            [?php include_partial('<?php echo $this->getModuleName() ?>/form', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?]
                        </div>

                        <div id="sf_admin_footer">
                            [?php include_partial('<?php echo $this->getModuleName() ?>/form_footer', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>, 'form' => $form, 'configuration' => $configuration)) ?]
                        </div>
                </div>
                <!-- End row-fluid --> 
            </div>
            <!-- End .content --> 
        </div>
        <!-- End box --> 
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

