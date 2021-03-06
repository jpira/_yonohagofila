<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Alarma', 'doctrine');

/**
 * BaseAlarma
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $opcion
 * @property integer $reserva_id
 * @property integer $id_usuario
 * @property string $descripcion
 * @property datetime $fecha_creacion
 * @property Reserva $Reserva
 * @property Local $Local
 * 
 * @method integer  getId()             Returns the current record's "id" value
 * @method string   getOpcion()         Returns the current record's "opcion" value
 * @method integer  getReservaId()      Returns the current record's "reserva_id" value
 * @method integer  getIdUsuario()      Returns the current record's "id_usuario" value
 * @method string   getDescripcion()    Returns the current record's "descripcion" value
 * @method datetime getFechaCreacion()  Returns the current record's "fecha_creacion" value
 * @method Reserva  getReserva()        Returns the current record's "Reserva" value
 * @method Local    getLocal()          Returns the current record's "Local" value
 * @method Alarma   setId()             Sets the current record's "id" value
 * @method Alarma   setOpcion()         Sets the current record's "opcion" value
 * @method Alarma   setReservaId()      Sets the current record's "reserva_id" value
 * @method Alarma   setIdUsuario()      Sets the current record's "id_usuario" value
 * @method Alarma   setDescripcion()    Sets the current record's "descripcion" value
 * @method Alarma   setFechaCreacion()  Sets the current record's "fecha_creacion" value
 * @method Alarma   setReserva()        Sets the current record's "Reserva" value
 * @method Alarma   setLocal()          Sets the current record's "Local" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAlarma extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('alarma');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('opcion', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('reserva_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('id_usuario', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('fecha_creacion', 'datetime', null, array(
             'type' => 'datetime',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Reserva', array(
             'local' => 'reserva_id',
             'foreign' => 'id'));

        $this->hasOne('Local', array(
             'local' => 'local_id',
             'foreign' => 'id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'fecha_creacion',
             ),
             'length' => 50,
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}