<?php

/**
 * Logs filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLogsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_id'     => new sfWidgetFormFilterInput(),
      'username'       => new sfWidgetFormFilterInput(),
      'ip'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'proxy'          => new sfWidgetFormFilterInput(),
      'estado'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha_creacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'usuario_id'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'username'       => new sfValidatorPass(array('required' => false)),
      'ip'             => new sfValidatorPass(array('required' => false)),
      'proxy'          => new sfValidatorPass(array('required' => false)),
      'estado'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha_creacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('logs_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Logs';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'usuario_id'     => 'Number',
      'username'       => 'Text',
      'ip'             => 'Text',
      'proxy'          => 'Text',
      'estado'         => 'Boolean',
      'fecha_creacion' => 'Date',
    );
  }
}
