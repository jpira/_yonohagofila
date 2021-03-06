<?php

/**
 * Alarma filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAlarmaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'opcion'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reserva_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Reserva'), 'add_empty' => true)),
      'id_usuario'     => new sfWidgetFormFilterInput(),
      'descripcion'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_creacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'opcion'         => new sfValidatorPass(array('required' => false)),
      'reserva_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Reserva'), 'column' => 'id')),
      'id_usuario'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descripcion'    => new sfValidatorPass(array('required' => false)),
      'fecha_creacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('alarma_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Alarma';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'opcion'         => 'Text',
      'reserva_id'     => 'ForeignKey',
      'id_usuario'     => 'Number',
      'descripcion'    => 'Text',
      'fecha_creacion' => 'Date',
      'slug'           => 'Text',
    );
  }
}
