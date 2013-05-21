<?php

/**
 * Calendario form base class.
 *
 * @method Calendario getObject() Returns the current form's model object
 *
 * @package    yonohagofila_sf1.4
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCalendarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'fecha_evento'        => new sfWidgetFormDateTime(),
      'tipo_evento'         => new sfWidgetFormInputText(),
      'descripcion_evento'  => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'id_usuario'          => new sfWidgetFormInputText(),
      'slug'                => new sfWidgetFormTextarea(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'local_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'fecha_evento'        => new sfValidatorDateTime(),
      'tipo_evento'         => new sfValidatorString(array('max_length' => 50)),
      'descripcion_evento'  => new sfValidatorString(array('max_length' => 255)),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'id_usuario'          => new sfValidatorInteger(),
      'slug'                => new sfValidatorString(array('max_length' => 265)),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('calendario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Calendario';
  }

}
