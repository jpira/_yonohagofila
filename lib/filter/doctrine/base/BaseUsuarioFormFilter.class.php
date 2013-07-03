<?php

/**
 * Usuario filter form base class.
 *
 * @package    Yonohagofila
 * @subpackage filter
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Perfil'), 'add_empty' => true)),
      'email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contrasena'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nombre'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_identificacion' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'identificacion'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'telefono'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'foto'                => new sfWidgetFormFilterInput(),
      'estado'              => new sfWidgetFormFilterInput(),
      'token'               => new sfWidgetFormFilterInput(),
      'fecha_nacimiento'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_creacion'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'perfil_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Perfil'), 'column' => 'id')),
      'email'               => new sfValidatorPass(array('required' => false)),
      'contrasena'          => new sfValidatorPass(array('required' => false)),
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'tipo_identificacion' => new sfValidatorPass(array('required' => false)),
      'identificacion'      => new sfValidatorPass(array('required' => false)),
      'telefono'            => new sfValidatorPass(array('required' => false)),
      'foto'                => new sfValidatorPass(array('required' => false)),
      'estado'              => new sfValidatorPass(array('required' => false)),
      'token'               => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_creacion'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'                => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'perfil_id'           => 'ForeignKey',
      'email'               => 'Text',
      'contrasena'          => 'Text',
      'nombre'              => 'Text',
      'tipo_identificacion' => 'Text',
      'identificacion'      => 'Text',
      'telefono'            => 'Text',
      'foto'                => 'Text',
      'estado'              => 'Text',
      'token'               => 'Text',
      'fecha_nacimiento'    => 'Date',
      'fecha_creacion'      => 'Date',
      'slug'                => 'Text',
    );
  }
}
