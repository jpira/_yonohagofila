<?php

/**
 * Preregistro form base class.
 *
 * @method Preregistro getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePreregistroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombrelugar'         => new sfWidgetFormInputText(),
      'nombrecontacto'      => new sfWidgetFormInputText(),
      'telcontacto'         => new sfWidgetFormInputText(),
      'estado'              => new sfWidgetFormInputCheckbox(),
      'fecha_creacion'      => new sfWidgetFormInputText(),
      'fecha_actualizacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombrelugar'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'nombrecontacto'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telcontacto'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'              => new sfValidatorBoolean(),
      'fecha_creacion'      => new sfValidatorPass(),
      'fecha_actualizacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('preregistro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Preregistro';
  }

}
