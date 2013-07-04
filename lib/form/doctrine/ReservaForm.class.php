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
        $values['slug'] = uniqid(sha1($values['slug']));
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->setWidget('local_id', new sfWidgetFormInputHidden());
        $this->setWidget('estado', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_creacion', new sfWidgetFormInputHidden());
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('local_id', new sfWidgetFormInputHidden());
        $this->setWidget('slug', new sfWidgetFormInputHidden());
        $this->setWidget('numero_personas', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'number', 'min' => '0', 'max' => '7', 'placeholder' => 'Numero de Acompañantes')));
//        $this->setWidget('fecha_reserva', new sfWidgetFormDateJQueryUI());
        $this->setWidget('fecha_reserva', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'date', 'placeholder' => 'Fecha reserva','title' => 'Debe Agregar Fecha y Hora')));

        $this->getWidget('promedio_id')->setAttributes(array('required' => 'required'));
        $this->getWidgetSchema()->setLabels(array(
            'numero_personas' => 'N&uacute;mero acompa&ntilde;antes',
            'fecha_reserva' => 'Fecha reserva',
            'hora_reserva' => 'Hora reserva',
            'promedio_id' => 'Promedio consumo'
        ));
        
        sfWidgetFormSchema::setDefaultFormFormatterName('ac2009');
    }

}
