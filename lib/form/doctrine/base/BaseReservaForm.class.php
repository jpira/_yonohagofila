<?php

/**
 * Reserva form base class.
 *
 * @method Reserva getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReservaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'local_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'numero_personas'  => new sfWidgetFormInputText(),
      'promedio_consumo' => new sfWidgetFormInputText(),
      'fecha_reserva'    => new sfWidgetFormDateTime(),
      'estado'           => new sfWidgetFormInputText(),
      'fecha_creacion'   => new sfWidgetFormDateTime(),
      'id_usuario'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'local_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'numero_personas'  => new sfValidatorInteger(),
      'promedio_consumo' => new sfValidatorString(array('max_length' => 50)),
      'fecha_reserva'    => new sfValidatorDateTime(),
      'estado'           => new sfValidatorString(array('max_length' => 50)),
      'fecha_creacion'   => new sfValidatorDateTime(),
      'id_usuario'       => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('reserva[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reserva';
  }

}
