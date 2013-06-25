<?php

/**
 * Usuario form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioForm extends BaseUsuarioForm {

    protected function doUpdateObject($values) {
        if ($values['contrasena'] != NULL && $values['email'] != NULL) {
            $values['contrasena'] = Usuario::encode($values['contrasena'], $values['email']);
        }
        if ($this->isNew()) {
            $values['fecha_creacion'] = date('Y-m-d G:i:s');
        }
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->getWidget('email')->setAttributes(array('type' => 'email', 'maxlength' => '50', 'placeholder' => 'Tu Email', 'required' => 'required'));
        $this->getWidget('contrasena')->setAttributes(array('type' => 'password', 'maxlength' => '15', 'placeholder' => 'Contraseña', 'required' => 'required'));
        $this->getWidget('nombre')->setAttributes(array('placeholder' => 'Nombre Completo', 'required' => 'required'));
        $this->getWidget('tipo_identificacion')->setAttributes(array('type' => 'text', 'placeholder' => '', 'required' => 'required'));
        $this->getWidget('identificacion')->setAttributes(array('placeholder' => 'N° Identificacion', 'required' => 'required'));
        $this->setWidget('foto', new sfWidgetFormInputFileEditable(array(
                    'edit_mode' => !$this->isNew(),
                    'is_image' => true,
                    // TODO Revisar rutas de imagenes a mostrar
                    'file_src' => '#' . $this->getObject()->foto,
                )));

        $this->setValidator('foto', new sfValidatorFile(array(
                    'max_size' => 50000,
                    'mime_types' => 'web_images',
                    'path' => sfConfig::get('sf_upload_dir') . '/inventories',
                    'required' => false,
                    'validated_file_class' => 'sfResizedFile'
                )));
        $this->setWidget('fecha_nacimiento', new sfWidgetFormInputText());
        $this->getWidget('fecha_nacimiento')->setAttributes(array('type' => 'date', 'placeholder' => '31-12-1000', 'required' => 'required'));
       
        $this->setWidget('perfil_id', new sfWidgetFormInputHidden());
        $this->setWidget('estado', new sfWidgetFormInputHidden());
        $this->setWidget('token', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_creacion', new sfWidgetFormInputHidden());
        $this->setWidget('slug', new sfWidgetFormInputHidden());
    }

}
