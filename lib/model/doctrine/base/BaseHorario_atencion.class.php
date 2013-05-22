<?php

/**
 * BaseHorario_atencion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $horario
 * @property integer $local_id
 * @property integer $id_usuario
 * @property datetime $fecha_creacion
 * @property datetime $fecha_actualizacion
 * @property Local $Local
 * 
 * @method integer          getId()                  Returns the current record's "id" value
 * @method string           getHorario()             Returns the current record's "horario" value
 * @method integer          getLocalId()             Returns the current record's "local_id" value
 * @method integer          getIdUsuario()           Returns the current record's "id_usuario" value
 * @method datetime         getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method datetime         getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method Local            getLocal()               Returns the current record's "Local" value
 * @method Horario_atencion setId()                  Sets the current record's "id" value
 * @method Horario_atencion setHorario()             Sets the current record's "horario" value
 * @method Horario_atencion setLocalId()             Sets the current record's "local_id" value
 * @method Horario_atencion setIdUsuario()           Sets the current record's "id_usuario" value
 * @method Horario_atencion setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Horario_atencion setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Horario_atencion setLocal()               Sets the current record's "Local" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseHorario_atencion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('horario_atencion');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('horario', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('local_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_creacion', 'datetime', null, array(
             'type' => 'datetime',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('fecha_actualizacion', 'datetime', null, array(
             'type' => 'datetime',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Local', array(
             'local' => 'local_id',
             'foreign' => 'id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'nombre',
             ),
             'length' => 110,
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}