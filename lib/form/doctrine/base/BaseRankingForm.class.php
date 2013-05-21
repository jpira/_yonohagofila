<?php

/**
 * Ranking form base class.
 *
 * @method Ranking getObject() Returns the current form's model object
 *
 * @package    yonohagofila_sf1.4
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRankingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nombre'         => new sfWidgetFormInputText(),
      'fecha_creacion' => new sfWidgetFormDateTime(),
      'id_usuario'     => new sfWidgetFormInputText(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'         => new sfValidatorString(array('max_length' => 100)),
      'fecha_creacion' => new sfValidatorDateTime(),
      'id_usuario'     => new sfValidatorInteger(),
      'slug'           => new sfValidatorString(array('max_length' => 110)),
    ));

    $this->widgetSchema->setNameFormat('ranking[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Ranking';
  }

}
