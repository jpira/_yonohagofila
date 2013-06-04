<?php

/**
 * Eventos_Local form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class Eventos_LocalForm extends BaseEventos_LocalForm {

    protected function doUpdateObject($values) {
        if ($this->isNew()) {
            $values['fecha_creacion'] = date('Y-m-d G:i:s');
        }
        $sf_user = sfContext::getInstance()->getUser();
        $values['id_usuario'] = $sf_user->getAttribute('Usuario')->get('id');
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->getWidget('nombre')->setAttributes(array('placeholder' => 'Nombre Para Evento', 'required' => 'required'));
        $this->getWidget('fecha_actualizacion')->setAttributes(array('type' => 'text', 'placeholder' => '31-12-1000', 'required' => 'required'));
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_creacion', new sfWidgetFormInputHidden());
    }

}
