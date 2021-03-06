<?php

/**
 * Promedio filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePromedioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'promedio'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'id_usuario'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'slug'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'promedio'            => new sfValidatorPass(array('required' => false)),
      'local_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'id_usuario'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('promedio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Promedio';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'promedio'            => 'Text',
      'local_id'            => 'ForeignKey',
      'id_usuario'          => 'Number',
      'fecha_creacion'      => 'Date',
      'fecha_actualizacion' => 'Date',
      'slug'                => 'Text',
    );
  }
}
