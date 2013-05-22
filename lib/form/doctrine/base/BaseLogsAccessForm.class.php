<?php

/**
 * LogsAccess form base class.
 *
 * @method LogsAccess getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLogsAccessForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario_id' => new sfWidgetFormInputText(),
      'username'   => new sfWidgetFormInputText(),
      'ip'         => new sfWidgetFormInputText(),
      'proxy'      => new sfWidgetFormInputText(),
      'estado'     => new sfWidgetFormInputCheckbox(),
      'created_at' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id' => new sfValidatorInteger(array('required' => false)),
      'username'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'         => new sfValidatorString(array('max_length' => 255)),
      'proxy'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'     => new sfValidatorBoolean(),
      'created_at' => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('logs_access[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LogsAccess';
  }

}
