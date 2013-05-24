<?php

/**
 * Parametro filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseParametroFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'local_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'descripcion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero_personas'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tiempo_respuesta'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'costo_ingreso'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'id_usuario'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'local_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'descripcion'         => new sfValidatorPass(array('required' => false)),
      'numero_personas'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tiempo_respuesta'    => new sfValidatorPass(array('required' => false)),
      'costo_ingreso'       => new sfValidatorPass(array('required' => false)),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'id_usuario'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('parametro_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Parametro';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'local_id'            => 'ForeignKey',
      'descripcion'         => 'Text',
      'numero_personas'     => 'Number',
      'tiempo_respuesta'    => 'Text',
      'costo_ingreso'       => 'Text',
      'fecha_creacion'      => 'Date',
      'fecha_actualizacion' => 'Date',
      'id_usuario'          => 'Number',
    );
  }
}
