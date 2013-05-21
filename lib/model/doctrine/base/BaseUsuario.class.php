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
 * @property string $foto
 * @property integer $estado
 * @property timestamp $fecha_nacimiento
 * @property timestamp $fecha_creacion
 * @property string $slug
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
 * @method string              getFoto()                Returns the current record's "foto" value
 * @method integer             getEstado()              Returns the current record's "estado" value
 * @method timestamp           getFechaNacimiento()     Returns the current record's "fecha_nacimiento" value
 * @method timestamp           getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method string              getSlug()                Returns the current record's "slug" value
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
 * @method Usuario             setFoto()                Sets the current record's "foto" value
 * @method Usuario             setEstado()              Sets the current record's "estado" value
 * @method Usuario             setFechaNacimiento()     Sets the current record's "fecha_nacimiento" value
 * @method Usuario             setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Usuario             setSlug()                Sets the current record's "slug" value
 * @method Usuario             setPerfil()              Sets the current record's "Perfil" value
 * @method Usuario             setEstadistica()         Sets the current record's "Estadistica" collection
 * @method Usuario             setRankingUsuario()      Sets the current record's "RankingUsuario" collection
 * @method Usuario             setUsuarioBloqueado()    Sets the current record's "UsuarioBloqueado" collection
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
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
        $this->hasColumn('foto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('estado', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('fecha_nacimiento', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
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
        $this->hasColumn('slug', 'string', 160, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 160,
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
    }
}