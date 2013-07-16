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
        $time = explode(":", $values['hora_reserva']);
        $horas = $time[0];
        $minutos = $time[1];
        $segundos = $time[2];
        $minutos = ((int) $minutos) + (7);
        $time = $horas . ':' . $minutos . ':' . $segundos;
        $ban = 0;
        while ($values['hora_llegada'] == NULL and $ban < 6) {
            $query = Doctrine_Query::create()->from('Reserva')
                    ->where('local_id = ? AND fecha_reserva = ? AND hora_llegada = ?', array($values['local_id'], $values['fecha_reserva'], $time))
                    ->fetchOne();
            if ($query) {
                $time = explode(":", $query->get('hora_llegada'));
                $horas = $time[0];
                $minutos = $time[1];
                $segundos = $time[2];
                $minutos = ((int) $minutos) + (5);
                $time = $horas . ':' . $minutos . ':' . $segundos; //                die('if');
                $ban++;
                $values['hora_llegada'] = NULL;
            } else {
                $values['hora_llegada'] = $time;
            }
        }
        parent::doUpdateObject($values);
    }

    public function configure() {
        $this->setWidget('local_id', new sfWidgetFormInputHidden());
        $this->setWidget('estado', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_creacion', new sfWidgetFormInputHidden());
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('slug', new sfWidgetFormInputHidden());
        $this->setWidget('hora_llegada', new sfWidgetFormInputHidden());
        $this->setWidget('numero_personas', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'number', 'min' => '0', 'max' => '7', 'placeholder' => 'Numero de Acompañantes')));
        $this->setWidget('fecha_reserva', new sfWidgetFormInputText(array(), array('required' => 'required', 'type' => 'date', 'placeholder' => 'Fecha reserva', 'title' => 'Debe Agregar Fecha y Hora')));

        $this->getWidget('promedio_id')->setAttributes(array('required' => 'required'));
        $this->getWidgetSchema()->setLabels(array(
            'numero_personas' => 'N&uacute;mero acompa&ntilde;antes',
            'fecha_reserva' => 'Fecha reserva',
            'hora_reserva' => 'Hora reserva',
            'promedio_id' => 'Promedio consumo'
        ));

        $this->validatorSchema->setPostValidator(
                new sfValidatorCallback(array('callback' => array($this, 'ValidatorFecha'))));

        sfWidgetFormSchema::setDefaultFormFormatterName('ac2009');
    }

    public function ValidatorFecha($validator, $values) {
        if ($values['fecha_reserva'] < date('Y-m-d')) {
            $error = new sfValidatorError($validator, 'La fecha de reserva ya ha pasado');
            throw new sfValidatorErrorSchema($validator, array('fecha_reserva' => $error));
        }
        $query1 = Doctrine_Query::create()->from('Parametro')
                ->where('local_id = ?', $values['local_id'] )
                ->fetchOne();
        if ($values['numero_personas'] > $query1->get('numero_personas')) {
            $error = new sfValidatorError($validator, 'Excedio el numero de personas');
            throw new sfValidatorErrorSchema($validator, array('fecha_reserva' => $error));
        }
        return $values;
    }

}
