<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Local', 'doctrine');

/**
 * BaseLocal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property string $imagen
 * @property boolean $estado
 * @property string $direccion
 * @property string $telefono
 * @property string $usuario_asociado
 * @property integer $id_usuario
 * @property datetime $fecha_creacion
 * @property datetime $fecha_actualizacion
 * @property Doctrine_Collection $Alarma
 * @property Doctrine_Collection $Calendario
 * @property Doctrine_Collection $Parametro
 * @property Doctrine_Collection $RankingUsuario
 * @property Doctrine_Collection $Reserva
 * @property Doctrine_Collection $UsuarioBloqueado
 * @property Doctrine_Collection $Promedio
 * @property Doctrine_Collection $Horario_atencion
 * @property Doctrine_Collection $Eventos_Local
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getNombre()              Returns the current record's "nombre" value
 * @method string              getImagen()              Returns the current record's "imagen" value
 * @method boolean             getEstado()              Returns the current record's "estado" value
 * @method string              getDireccion()           Returns the current record's "direccion" value
 * @method string              getTelefono()            Returns the current record's "telefono" value
 * @method string              getUsuarioAsociado()     Returns the current record's "usuario_asociado" value
 * @method integer             getIdUsuario()           Returns the current record's "id_usuario" value
 * @method datetime            getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method datetime            getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method Doctrine_Collection getAlarma()              Returns the current record's "Alarma" collection
 * @method Doctrine_Collection getCalendario()          Returns the current record's "Calendario" collection
 * @method Doctrine_Collection getParametro()           Returns the current record's "Parametro" collection
 * @method Doctrine_Collection getRankingUsuario()      Returns the current record's "RankingUsuario" collection
 * @method Doctrine_Collection getReserva()             Returns the current record's "Reserva" collection
 * @method Doctrine_Collection getUsuarioBloqueado()    Returns the current record's "UsuarioBloqueado" collection
 * @method Doctrine_Collection getPromedio()            Returns the current record's "Promedio" collection
 * @method Doctrine_Collection getHorarioAtencion()     Returns the current record's "Horario_atencion" collection
 * @method Doctrine_Collection getEventosLocal()        Returns the current record's "Eventos_Local" collection
 * @method Local               setId()                  Sets the current record's "id" value
 * @method Local               setNombre()              Sets the current record's "nombre" value
 * @method Local               setImagen()              Sets the current record's "imagen" value
 * @method Local               setEstado()              Sets the current record's "estado" value
 * @method Local               setDireccion()           Sets the current record's "direccion" value
 * @method Local               setTelefono()            Sets the current record's "telefono" value
 * @method Local               setUsuarioAsociado()     Sets the current record's "usuario_asociado" value
 * @method Local               setIdUsuario()           Sets the current record's "id_usuario" value
 * @method Local               setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Local               setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Local               setAlarma()              Sets the current record's "Alarma" collection
 * @method Local               setCalendario()          Sets the current record's "Calendario" collection
 * @method Local               setParametro()           Sets the current record's "Parametro" collection
 * @method Local               setRankingUsuario()      Sets the current record's "RankingUsuario" collection
 * @method Local               setReserva()             Sets the current record's "Reserva" collection
 * @method Local               setUsuarioBloqueado()    Sets the current record's "UsuarioBloqueado" collection
 * @method Local               setPromedio()            Sets the current record's "Promedio" collection
 * @method Local               setHorarioAtencion()     Sets the current record's "Horario_atencion" collection
 * @method Local               setEventosLocal()        Sets the current record's "Eventos_Local" collection
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('local');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('imagen', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('estado', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('direccion', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('telefono', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
             ));
        $this->hasColumn('usuario_asociado', 'string', 200, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 200,
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
        $this->hasMany('Alarma', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Calendario', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Parametro', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('RankingUsuario', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Reserva', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('UsuarioBloqueado', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Promedio', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Horario_atencion', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $this->hasMany('Eventos_Local', array(
             'local' => 'id',
             'foreign' => 'local_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'nombre',
             ),
             'length' => 210,
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}