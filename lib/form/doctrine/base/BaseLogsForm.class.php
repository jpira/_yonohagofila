<?php

/**
 * Logs form base class.
 *
 * @method Logs getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLogsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'usuario_id'     => new sfWidgetFormInputText(),
      'username'       => new sfWidgetFormInputText(),
      'ip'             => new sfWidgetFormInputText(),
      'proxy'          => new sfWidgetFormInputText(),
      'estado'         => new sfWidgetFormInputCheckbox(),
      'fecha_creacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id'     => new sfValidatorInteger(array('required' => false)),
      'username'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ip'             => new sfValidatorString(array('max_length' => 255)),
      'proxy'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'         => new sfValidatorBoolean(),
      'fecha_creacion' => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('logs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Logs';
  }

}
