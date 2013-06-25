<?php

/**
 * Reserva form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ReservaForm extends BaseReservaForm {

    protected function doUpdateObject($values) {
        $values['estado'] = 'Pendiente';
        $values['fecha_creacion'] = date('Y-m-d G:i:s');
        $sf_user = sfContext::getInstance()->getUser();
        $values['id_usuario'] = $sf_user->getAttribute('Usuario')->get('id');
        $values['slug'] = sha1($values['slug']);
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->setWidget('local_id', new sfWidgetFormInputHidden());
        $this->setWidget('estado', new sfWidgetFormInputHidden());
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('slug', new sfWidgetFormInputHidden());
        $this->setWidget('numero_personas', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'number', 'min' => '0', 'placeholder' => 'Numero de Acompañantes')));
        
        $this->setWidget('fecha_reserva', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'datetime-local', 'title' => 'Debe Agregar Fecha y Hora')));

        $this->getWidget('promedio_id')->setAttributes(array('required' => 'required'));
    }

}
