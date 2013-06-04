<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'perfil_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => true)),
      'email'               => new sfWidgetFormInputText(),
      'contrasena'          => new sfWidgetFormInputText(),
      'nombre'              => new sfWidgetFormInputText(),
      'tipo_identificacion' => new sfWidgetFormInputText(),
      'identificacion'      => new sfWidgetFormInputText(),
      'foto'                => new sfWidgetFormInputText(),
      'estado'              => new sfWidgetFormInputText(),
      'token'               => new sfWidgetFormInputText(),
      'fecha_nacimiento'    => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormInputText(),
      'slug'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'perfil_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'required' => false)),
      'email'               => new sfValidatorString(array('max_length' => 150)),
      'contrasena'          => new sfValidatorString(array('max_length' => 150)),
      'nombre'              => new sfValidatorString(array('max_length' => 255)),
      'tipo_identificacion' => new sfValidatorString(array('max_length' => 50)),
      'identificacion'      => new sfValidatorString(array('max_length' => 100)),
      'foto'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'              => new sfValidatorInteger(array('required' => false)),
      'token'               => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'fecha_nacimiento'    => new sfValidatorPass(),
      'fecha_creacion'      => new sfValidatorPass(),
      'slug'                => new sfValidatorString(array('max_length' => 160, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Usuario', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
