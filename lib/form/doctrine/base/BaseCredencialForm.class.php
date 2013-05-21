<?php

/**
 * Credencial form base class.
 *
 * @method Credencial getObject() Returns the current form's model object
 *
 * @package    yonohagofila_sf1.4
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCredencialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'id_usuario'          => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'slug'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 100)),
      'id_usuario'          => new sfValidatorInteger(),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'slug'                => new sfValidatorString(array('max_length' => 110)),
    ));

    $this->widgetSchema->setNameFormat('credencial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Credencial';
  }

}
