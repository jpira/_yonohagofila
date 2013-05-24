<?php

require_once dirname(__FILE__) . '/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration {

    public function setup() {
        $this->enablePlugins('sfDoctrinePlugin');

        // Mensajes por defecto de los formularios
        sfValidatorSchema::setDefaultMessage('required', 'Campo obligatorio');
        sfValidatorSchema::setDefaultMessage('invalid', 'Campo inválido');
    }

}
