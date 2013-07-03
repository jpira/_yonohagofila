<?php

/**
 * RankingUsuario form base class.
 *
 * @method RankingUsuario getObject() Returns the current form's model object
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRankingUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'ranking_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => true)),
      'fecha_creacion'      => new sfWidgetFormInputText(),
      'fecha_actualizacion' => new sfWidgetFormInputText(),
      'puntos'              => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'usuario_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'required' => false)),
      'local_id'            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'ranking_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'required' => false)),
      'fecha_creacion'      => new sfValidatorPass(),
      'fecha_actualizacion' => new sfValidatorPass(array('required' => false)),
      'puntos'              => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('ranking_usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RankingUsuario';
  }

}
