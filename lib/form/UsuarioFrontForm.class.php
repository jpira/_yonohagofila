<?php

/**
 * Usuario Front form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioFrontForm extends BaseUsuarioForm {

    public function configure() {
        $this->getWidget('email')->setAttributes(array('type' => 'email', 'maxlength' => '50', 'placeholder' => 'Tu Email', 'required' => 'required', 'readonly' => 'true'));
        $this->getWidget('nombre')->setAttributes(array('placeholder' => 'Nombre Completo', 'required' => 'required'));
//        $this->getWidget('tipo_identificacion')->setAttributes(array('type' => 'text', 'placeholder' => '', 'required' => 'required'));
        $this->getWidget('identificacion')->setAttributes(array('placeholder' => 'N° Identificacion', 'required' => 'required', 'readonly' => 'true'));
//        $this->setWidget('foto', new sfWidgetFormInputFileEditable(array(
//                    'edit_mode' => !$this->isNew(),
//                    'is_image' => true,
//                    // TODO Revisar rutas de imagenes a mostrar
//                    'file_src' => '/' . sfConfig::get('app_route_web_default') . '/uploads/imagen' . $this->getObject()->foto
//                )));
//        $this->setValidator('foto', new sfValidatorFile(array(
//                    'max_size' => 50000,
//                    'mime_types' => 'web_images',
//                    'path' => sfConfig::get('sf_upload_dir') . '/imagen',
//                    'required' => false,
//                    'validated_file_class' => 'sfResizedFile'
//                )));
        $this->setWidget('fecha_nacimiento', new sfWidgetFormInputText());
        $this->getWidget('fecha_nacimiento')->setAttributes(array('type' => 'text', 'required' => 'required'));

        $this->setWidget('perfil_id', new sfWidgetFormInputHidden());
        $this->setWidget('estado', new sfWidgetFormInputHidden());
        $this->setWidget('token', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_creacion', new sfWidgetFormInputHidden());
        $this->setWidget('contrasena', new sfWidgetFormInputHidden());
        $this->setWidget('foto', new sfWidgetFormInputHidden());
        $this->setWidget('tipo_identificacion', new sfWidgetFormInputHidden());
        unset($this['slug'], $this['id']);
    }

}
