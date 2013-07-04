<?php

class sfWidgetFormSchemaFormatterAc2009 extends sfWidgetFormSchemaFormatter {

  protected
          $rowFormat = "<div class='campo-formulario'>
                        %label% %field% %error%
                        %help% %hidden_fields%</div>\n",
          $errorRowFormat = "<div>%errors%</div>",
          $helpFormat = '<div class="form_help">%help%</div>',
          $decoratorFormat = "<div>\n  %content%</div>";

}