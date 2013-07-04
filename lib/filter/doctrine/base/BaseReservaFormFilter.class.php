<?php

/**
 * Reserva filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReservaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'local_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'numero_personas' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_reserva'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'hora_reserva'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'promedio_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Promedio'), 'add_empty' => true)),
      'estado'          => new sfWidgetFormFilterInput(),
      'fecha_creacion'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'id_usuario'      => new sfWidgetFormFilterInput(),
      'slug'            => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'local_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'numero_personas' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_reserva'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'hora_reserva'    => new sfValidatorPass(array('required' => false)),
      'promedio_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Promedio'), 'column' => 'id')),
      'estado'          => new sfValidatorPass(array('required' => false)),
      'fecha_creacion'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'id_usuario'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'slug'            => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reserva_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reserva';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'local_id'        => 'ForeignKey',
      'numero_personas' => 'Number',
      'fecha_reserva'   => 'Date',
      'hora_reserva'    => 'Text',
      'promedio_id'     => 'ForeignKey',
      'estado'          => 'Text',
      'fecha_creacion'  => 'Date',
      'id_usuario'      => 'Number',
      'slug'            => 'Text',
    );
  }
}
