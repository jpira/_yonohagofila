<?php

class escribenosForm extends sfForm {

    public function configure() {
        $this->setWidgets(array(
            'Nombre*' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "text", 'placeholder' => 'Nombre', 'maxlength' => 50)),
            'Correo_electronico*' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "email", 'placeholder' => 'Correo electronico', 'maxlength' => 75)),
            'Mensaje*' => new sfWidgetFormTextarea(array(), array('required' => 'required', 'type' => "textarea", 'maxlength' => 500, 'rows' => 5, 'cols' => 70)),
        ));

        $this->setValidators(array(
            'Nombre*' => new sfValidatorString(),
            'Correo_electronico*' => new sfValidatorEmail(),
            'Mensaje*' => new sfValidatorString(),
        ));

         sfWidgetFormSchema::setDefaultFormFormatterName('ac2009');

//        $this->widgetSchema->setNameFormat('secure[%s]');
    }

}
?>
