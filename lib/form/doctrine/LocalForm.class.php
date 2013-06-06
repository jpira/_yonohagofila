<?php

/**
 * Local form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LocalForm extends BaseLocalForm {

    protected function doUpdateObject($values) {
        if ($this->isNew()) {
            $values['fecha_creacion'] = date('Y-m-d G:i:s');
            $values['fecha_actualizacion'] = date('Y-m-d G:i:s');
        } else {
            $values['fecha_actualizacion'] = date('Y-m-d G:i:s');
        }
        $sf_user = sfContext::getInstance()->getUser();
        $values['id_usuario'] = $sf_user->getAttribute('Usuario')->get('id');
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_actualizacion', new sfWidgetFormInputHidden());

        $this->setWidget('imagen', new sfWidgetFormInputFileEditable(array(
                    'edit_mode' => !$this->isNew(),
                    'is_image' => true,
                    // TODO Revisar rutas de imagenes a mostrar
                    'file_src' => '#' . $this->getObject()->imagen,
                )));

        $this->setValidator('imagen', new sfValidatorFile(array(
                    'max_size' => 50000,
                    'mime_types' => 'web_images',
                    'path' => sfConfig::get('sf_upload_dir') . '/inventories',
                    'required' => false,
                    'validated_file_class' => 'sfResizedFile'
                )));
        $this->getWidget('nombre')->setAttributes(array('placeholder' => 'Nombre Establecimiento', 'required' => 'required'));
    }

}
