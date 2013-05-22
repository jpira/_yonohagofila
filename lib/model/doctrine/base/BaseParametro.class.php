<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Parametro', 'doctrine');

/**
 * BaseParametro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $local_id
 * @property string $descripcion
 * @property integer $numero_personas
 * @property string $tiempo_respuesta
 * @property string $costo_ingreso
 * @property timestamp $fecha_creacion
 * @property timestamp $fecha_actualizacion
 * @property integer $id_usuario
 * @property Local $Local
 * 
 * @method integer   getId()                  Returns the current record's "id" value
 * @method integer   getLocalId()             Returns the current record's "local_id" value
 * @method string    getDescripcion()         Returns the current record's "descripcion" value
 * @method integer   getNumeroPersonas()      Returns the current record's "numero_personas" value
 * @method string    getTiempoRespuesta()     Returns the current record's "tiempo_respuesta" value
 * @method string    getCostoIngreso()        Returns the current record's "costo_ingreso" value
 * @method timestamp getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method timestamp getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method integer   getIdUsuario()           Returns the current record's "id_usuario" value
 * @method Local     getLocal()               Returns the current record's "Local" value
 * @method Parametro setId()                  Sets the current record's "id" value
 * @method Parametro setLocalId()             Sets the current record's "local_id" value
 * @method Parametro setDescripcion()         Sets the current record's "descripcion" value
 * @method Parametro setNumeroPersonas()      Sets the current record's "numero_personas" value
 * @method Parametro setTiempoRespuesta()     Sets the current record's "tiempo_respuesta" value
 * @method Parametro setCostoIngreso()        Sets the current record's "costo_ingreso" value
 * @method Parametro setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Parametro setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Parametro setIdUsuario()           Sets the current record's "id_usuario" value
 * @method Parametro setLocal()               Sets the current record's "Local" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseParametro extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('parametro');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
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
        $this->hasColumn('descripcion', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('numero_personas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('tiempo_respuesta', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('costo_ingreso', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('fecha_creacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('fecha_actualizacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
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
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Local', array(
             'local' => 'local_id',
             'foreign' => 'id'));
    }
}