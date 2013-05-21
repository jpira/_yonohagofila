<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Reserva', 'doctrine');

/**
 * BaseReserva
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $local_id
 * @property integer $numero_personas
 * @property string $promedio_consumo
 * @property timestamp $fecha_reserva
 * @property string $estado
 * @property timestamp $fecha_creacion
 * @property integer $id_usuario
 * @property Local $Local
 * 
 * @method integer   getId()               Returns the current record's "id" value
 * @method integer   getLocalId()          Returns the current record's "local_id" value
 * @method integer   getNumeroPersonas()   Returns the current record's "numero_personas" value
 * @method string    getPromedioConsumo()  Returns the current record's "promedio_consumo" value
 * @method timestamp getFechaReserva()     Returns the current record's "fecha_reserva" value
 * @method string    getEstado()           Returns the current record's "estado" value
 * @method timestamp getFechaCreacion()    Returns the current record's "fecha_creacion" value
 * @method integer   getIdUsuario()        Returns the current record's "id_usuario" value
 * @method Local     getLocal()            Returns the current record's "Local" value
 * @method Reserva   setId()               Sets the current record's "id" value
 * @method Reserva   setLocalId()          Sets the current record's "local_id" value
 * @method Reserva   setNumeroPersonas()   Sets the current record's "numero_personas" value
 * @method Reserva   setPromedioConsumo()  Sets the current record's "promedio_consumo" value
 * @method Reserva   setFechaReserva()     Sets the current record's "fecha_reserva" value
 * @method Reserva   setEstado()           Sets the current record's "estado" value
 * @method Reserva   setFechaCreacion()    Sets the current record's "fecha_creacion" value
 * @method Reserva   setIdUsuario()        Sets the current record's "id_usuario" value
 * @method Reserva   setLocal()            Sets the current record's "Local" value
 * 
 * @package    yonohagofila_sf1.4
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReserva extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reserva');
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
        $this->hasColumn('numero_personas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('promedio_consumo', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('fecha_reserva', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('estado', 'string', 50, array(
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