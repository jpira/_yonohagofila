<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Usuario', 'doctrine');

/**
 * BaseUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $perfil_id
 * @property string $email
 * @property string $contrasena
 * @property string $nombre
 * @property string $tipo_identificacion
 * @property string $identificacion
 * @property string $telefono
 * @property string $foto
 * @property varchar $estado
 * @property boolean $puntuacion
 * @property string $token
 * @property datetime $fecha_nacimiento
 * @property datetime $fecha_creacion
 * @property Perfil $Perfil
 * @property Doctrine_Collection $Estadistica
 * @property Doctrine_Collection $RankingUsuario
 * @property Doctrine_Collection $UsuarioBloqueado
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method integer             getPerfilId()            Returns the current record's "perfil_id" value
 * @method string              getEmail()               Returns the current record's "email" value
 * @method string              getContrasena()          Returns the current record's "contrasena" value
 * @method string              getNombre()              Returns the current record's "nombre" value
 * @method string              getTipoIdentificacion()  Returns the current record's "tipo_identificacion" value
 * @method string              getIdentificacion()      Returns the current record's "identificacion" value
 * @method string              getTelefono()            Returns the current record's "telefono" value
 * @method string              getFoto()                Returns the current record's "foto" value
 * @method varchar             getEstado()              Returns the current record's "estado" value
 * @method boolean             getPuntuacion()          Returns the current record's "puntuacion" value
 * @method string              getToken()               Returns the current record's "token" value
 * @method datetime            getFechaNacimiento()     Returns the current record's "fecha_nacimiento" value
 * @method datetime            getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method Perfil              getPerfil()              Returns the current record's "Perfil" value
 * @method Doctrine_Collection getEstadistica()         Returns the current record's "Estadistica" collection
 * @method Doctrine_Collection getRankingUsuario()      Returns the current record's "RankingUsuario" collection
 * @method Doctrine_Collection getUsuarioBloqueado()    Returns the current record's "UsuarioBloqueado" collection
 * @method Usuario             setId()                  Sets the current record's "id" value
 * @method Usuario             setPerfilId()            Sets the current record's "perfil_id" value
 * @method Usuario             setEmail()               Sets the current record's "email" value
 * @method Usuario             setContrasena()          Sets the current record's "contrasena" value
 * @method Usuario             setNombre()              Sets the current record's "nombre" value
 * @method Usuario             setTipoIdentificacion()  Sets the current record's "tipo_identificacion" value
 * @method Usuario             setIdentificacion()      Sets the current record's "identificacion" value
 * @method Usuario             setTelefono()            Sets the current record's "telefono" value
 * @method Usuario             setFoto()                Sets the current record's "foto" value
 * @method Usuario             setEstado()              Sets the current record's "estado" value
 * @method Usuario             setPuntuacion()          Sets the current record's "puntuacion" value
 * @method Usuario             setToken()               Sets the current record's "token" value
 * @method Usuario             setFechaNacimiento()     Sets the current record's "fecha_nacimiento" value
 * @method Usuario             setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Usuario             setPerfil()              Sets the current record's "Perfil" value
 * @method Usuario             setEstadistica()         Sets the current record's "Estadistica" collection
 * @method Usuario             setRankingUsuario()      Sets the current record's "RankingUsuario" collection
 * @method Usuario             setUsuarioBloqueado()    Sets the current record's "UsuarioBloqueado" collection
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('perfil_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('email', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'unique' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('contrasena', 'string', 150, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 150,
             ));
        $this->hasColumn('nombre', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('tipo_identificacion', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('identificacion', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('telefono', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
             ));
        $this->hasColumn('foto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('estado', 'varchar', 50, array(
             'type' => 'varchar',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('puntuacion', 'boolean', null, array(
             'type' => 'boolean',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             ));
        $this->hasColumn('token', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('fecha_nacimiento', 'datetime', null, array(
             'type' => 'datetime',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
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
        $this->hasOne('Perfil', array(
             'local' => 'perfil_id',
             'foreign' => 'id'));

        $this->hasMany('Estadistica', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));

        $this->hasMany('RankingUsuario', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));

        $this->hasMany('UsuarioBloqueado', array(
             'local' => 'id',
             'foreign' => 'usuario_id'));

        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => true,
             'fields' => 
             array(
              0 => 'email',
             ),
             'length' => 160,
             'canUpdate' => true,
             ));
        $this->actAs($sluggable0);
    }
}