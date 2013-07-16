<?php

/**
 * Local filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLocalFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imagen'              => new sfWidgetFormFilterInput(),
      'estado'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'direccion'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'facebook'            => new sfWidgetFormFilterInput(),
      'twitter'             => new sfWidgetFormFilterInput(),
      'youtube'             => new sfWidgetFormFilterInput(),
      'web'                 => new sfWidgetFormFilterInput(),
      'usuario_asociado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'id_usuario'          => new sfWidgetFormFilterInput(),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'slug'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'imagen'              => new sfValidatorPass(array('required' => false)),
      'estado'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'direccion'           => new sfValidatorPass(array('required' => false)),
      'telefono'            => new sfValidatorPass(array('required' => false)),
      'facebook'            => new sfValidatorPass(array('required' => false)),
      'twitter'             => new sfValidatorPass(array('required' => false)),
      'youtube'             => new sfValidatorPass(array('required' => false)),
      'web'                 => new sfValidatorPass(array('required' => false)),
      'usuario_asociado'    => new sfValidatorPass(array('required' => false)),
      'id_usuario'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('local_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Local';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nombre'              => 'Text',
      'imagen'              => 'Text',
      'estado'              => 'Boolean',
      'direccion'           => 'Text',
      'telefono'            => 'Text',
      'facebook'            => 'Text',
      'twitter'             => 'Text',
      'youtube'             => 'Text',
      'web'                 => 'Text',
      'usuario_asociado'    => 'Text',
      'id_usuario'          => 'Number',
      'fecha_creacion'      => 'Date',
      'fecha_actualizacion' => 'Date',
      'slug'                => 'Text',
    );
  }
}
