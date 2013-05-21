<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Credencial', 'doctrine');

/**
 * BaseCredencial
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property integer $id_usuario
 * @property timestamp $fecha_creacion
 * @property timestamp $fecha_actualizacion
 * @property string $slug
 * @property Doctrine_Collection $PerfilCredencial
 * 
 * @method integer             getId()                  Returns the current record's "id" value
 * @method string              getNombre()              Returns the current record's "nombre" value
 * @method integer             getIdUsuario()           Returns the current record's "id_usuario" value
 * @method timestamp           getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method timestamp           getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method string              getSlug()                Returns the current record's "slug" value
 * @method Doctrine_Collection getPerfilCredencial()    Returns the current record's "PerfilCredencial" collection
 * @method Credencial          setId()                  Sets the current record's "id" value
 * @method Credencial          setNombre()              Sets the current record's "nombre" value
 * @method Credencial          setIdUsuario()           Sets the current record's "id_usuario" value
 * @method Credencial          setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Credencial          setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method Credencial          setSlug()                Sets the current record's "slug" value
 * @method Credencial          setPerfilCredencial()    Sets the current record's "PerfilCredencial" collection
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCredencial extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('credencial');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombre', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 100,
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
        $this->hasColumn('slug', 'string', 110, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 110,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PerfilCredencial', array(
             'local' => 'id',
             'foreign' => 'credencial_id'));
    }
}