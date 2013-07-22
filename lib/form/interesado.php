<?php

class interesadoForm extends sfForm {

    public function configure() {
        $this->setWidgets(array(
            'Comercio_interesado*' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "text", 'placeholder' => 'Nombre comercio', 'maxlength' => 50, 'class' => 'control-label')),
            'Nombre_responsable*' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "text", 'placeholder' => 'Nombre responsable', 'maxlength' => 75)),
//            'Numero_telefonico' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "text", 'placeholder' => 'Numero telefonico', 'maxlength' => 75)),
            'Correo_electronico*' => new sfWidgetFormInput(array(), array('required' => 'required', 'type' => "email", 'placeholder' => 'Correo electronico', 'maxlength' => 75)),
        ));

        $this->setValidators(array(
            'Comercio_interesado*' => new sfValidatorString(),
            'Nombre_responsable*' => new sfValidatorString(),
            'Correo_electronico*' => new sfValidatorEmail(),
            'Numero_telefonico' => new sfValidatorString(),
        ));

         sfWidgetFormSchema::setDefaultFormFormatterName('ac2009');

//        $this->widgetSchema->setNameFormat('secure[%s]');
    }

}
?>

