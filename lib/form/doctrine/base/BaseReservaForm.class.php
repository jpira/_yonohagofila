<?php

/**
 * Reserva form base class.
 *
 * @method Reserva getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReservaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'local_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'numero_personas' => new sfWidgetFormInputText(),
      'fecha_reserva'   => new sfWidgetFormDateTime(),
      'promedio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Promedio'), 'add_empty' => true)),
      'fecha_creacion'  => new sfWidgetFormDateTime(),
      'id_usuario'      => new sfWidgetFormInputText(),
      'slug'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'local_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'numero_personas' => new sfValidatorInteger(),
      'fecha_reserva'   => new sfValidatorDateTime(),
      'promedio_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Promedio'), 'required' => false)),
      'fecha_creacion'  => new sfValidatorDateTime(),
      'id_usuario'      => new sfValidatorInteger(),
      'slug'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Reserva', 'column' => array('slug')))
    );

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
