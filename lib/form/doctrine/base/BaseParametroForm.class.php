<?php

/**
 * Parametro form base class.
 *
 * @method Parametro getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseParametroForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'descripcion'         => new sfWidgetFormInputText(),
      'numero_personas'     => new sfWidgetFormInputText(),
      'tiempo_respuesta'    => new sfWidgetFormInputText(),
      'costo_ingreso'       => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
      'id_usuario'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'local_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'descripcion'         => new sfValidatorString(array('max_length' => 255)),
      'numero_personas'     => new sfValidatorInteger(),
      'tiempo_respuesta'    => new sfValidatorString(array('max_length' => 50)),
      'costo_ingreso'       => new sfValidatorString(array('max_length' => 50)),
      'fecha_creacion'      => new sfValidatorDateTime(),
      'fecha_actualizacion' => new sfValidatorDateTime(),
      'id_usuario'          => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('parametro[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parametro';
  }

}
