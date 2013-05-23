<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Calendario', 'doctrine');

/**
 * BaseCalendario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $local_id
 * @property timestamp $fecha_evento
 * @property integer $tipoevento_id
 * @property string $descripcion_evento
 * @property timestamp $fecha_creacion
 * @property integer $id_usuario
 * @property timestamp $fecha_actualizacion
 * @property Local $Local
 * @property Tipos_Eventos $Tipos_Eventos
 * 
 * @method integer       getId()                  Returns the current record's "id" value
 * @method integer       getLocalId()             Returns the current record's "local_id" value
 * @method timestamp     getFechaEvento()         Returns the current record's "fecha_evento" value
 * @method integer       getTipoeventoId()        Returns the current record's "tipoevento_id" value
 * @method string        getDescripcionEvento()   Returns the current record's "descripcion_evento" value
 * @method timestamp     getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method integer       getIdUsuario()           Returns the current record's "id_usuario" value
 * @method timestamp     getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method Local         getLocal()               Returns the current record's "Local" value
 * @method Tipos_Eventos getTiposEventos()        Returns the current record's "Tipos_Eventos" value
 * @method Calendario    setId()                  Sets the current record's "id" value
 * @method Calendario    setLocalId()             Sets the current record's "local_id" value
 * @method Calendario    setFechaEvento()         Sets the current record's "fecha_evento" value
 * @method Calendario    setTipoeventoId()        Sets the current record's "tipoevento_id" value
 * @method Calendario    setDescripcionEvento()   Sets the current record's "descripcion_evento" value
 * @method Calendario    setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Calendario    setIdUsuario()           Sets the current record's "id_usuario" value
 * @method Calendario    setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Calendario    setLocal()               Sets the current record's "Local" value
 * @method Calendario    setTiposEventos()        Sets the current record's "Tipos_Eventos" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCalendario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('calendario');
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
        $this->hasColumn('fecha_evento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('tipoevento_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('descripcion_evento', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
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
        $this->hasColumn('fecha_actualizacion', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Local', array(
             'local' => 'local_id',
             'foreign' => 'id'));

        $this->hasOne('Tipos_Eventos', array(
             'local' => 'tipoevento_id',
             'foreign' => 'id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'fecha_evento',
             ),
             'length' => 50,
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}