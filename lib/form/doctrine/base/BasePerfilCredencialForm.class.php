<?php

/**
 * PerfilCredencial form base class.
 *
 * @method PerfilCredencial getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePerfilCredencialForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'      => new sfWidgetFormInputHidden(),
      'credencial_id'  => new sfWidgetFormInputHidden(),
      'id_usuario'     => new sfWidgetFormInputText(),
      'fecha_creacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'perfil_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('perfil_id')), 'empty_value' => $this->getObject()->get('perfil_id'), 'required' => false)),
      'credencial_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('credencial_id')), 'empty_value' => $this->getObject()->get('credencial_id'), 'required' => false)),
      'id_usuario'     => new sfValidatorInteger(array('required' => false)),
      'fecha_creacion' => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('perfil_credencial[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PerfilCredencial';
  }

}
