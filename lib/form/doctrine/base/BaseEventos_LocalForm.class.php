<?php

/**
 * Eventos_Local form base class.
 *
 * @method Eventos_Local getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEventos_LocalForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInputText(),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'tipoevento_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipos_Eventos'), 'add_empty' => true)),
      'id_usuario'          => new sfWidgetFormInputText(),
      'fecha_creacion'      => new sfWidgetFormInputText(),
      'fecha_actualizacion' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'local_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'tipoevento_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipos_Eventos'), 'required' => false)),
      'id_usuario'          => new sfValidatorInteger(),
      'fecha_creacion'      => new sfValidatorPass(),
      'fecha_actualizacion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('eventos_local[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Eventos_Local';
  }

}
