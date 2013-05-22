<?php

/**
 * LoginSecure form.
 *
 * @package    yonohagofila_sf1.4
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LoginSecureForm extends sfForm {

    public function configure() {
        $this->setWidgets(array(
            '_email' => new sfWidgetFormInput(array(), array('type' => 'email', 'placeholder' => 'Correo electrónico', 'required' => 'required', 'title' => 'Correo electrónico de acceso')),
            '_password' => new sfWidgetFormInputPassword(array(), array('type' => 'password', 'placeholder' => 'Contraseña', 'title' => 'Contraseña de acceso')),
        ));

        $this->setValidators(array(
            '_email' => new sfValidatorString(),
            '_password' => new sfValidatorString()
        ));

        $this->widgetSchema->setNameFormat('secure[%s]');
    }

}
