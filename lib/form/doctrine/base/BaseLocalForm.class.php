<?php

/**
 * Local form base class.
 *
 * @method Local getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLocalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'imagen'              => new sfWidgetFormInputText(),
      'estado'              => new sfWidgetFormInputCheckbox(),
      'usuario_asociado'    => new sfWidgetFormInputText(),
      'id_usuario'          => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormInputText(),
      'fecha_actualizacion' => new sfWidgetFormInputText(),
      'slug'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 200)),
      'imagen'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'              => new sfValidatorBoolean(),
      'usuario_asociado'    => new sfValidatorString(array('max_length' => 200)),
      'id_usuario'          => new sfValidatorInteger(array('required' => false)),
      'fecha_creacion'      => new sfValidatorPass(),
      'fecha_actualizacion' => new sfValidatorPass(array('required' => false)),
      'slug'                => new sfValidatorString(array('max_length' => 210, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Local', 'column' => array('slug')))
    );

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
