<?php

/**
 * Local form base class.
 *
 * @method Local getObject() Returns the current form's model object
 *
 * @package    yonohagofila_sf1.4
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLocalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'id_usuario'          => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'slug'                => new sfWidgetFormInputText(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 200)),
      'id_usuario'          => new sfValidatorInteger(),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'slug'                => new sfValidatorString(array('max_length' => 210)),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('local[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Local';
  }

}
