<?php

/**
 * RankingUsuario filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRankingUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Usuario'), 'add_empty' => true)),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'ranking_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Ranking'), 'add_empty' => true)),
      'id_usuario'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'puntos'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Usuario'), 'column' => 'id')),
      'local_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'ranking_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Ranking'), 'column' => 'id')),
      'id_usuario'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'puntos'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('ranking_usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RankingUsuario';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'usuario_id'          => 'ForeignKey',
      'local_id'            => 'ForeignKey',
      'ranking_id'          => 'ForeignKey',
      'id_usuario'          => 'Number',
      'fecha_creacion'      => 'Date',
      'fecha_actualizacion' => 'Date',
      'puntos'              => 'Number',
    );
  }
}
