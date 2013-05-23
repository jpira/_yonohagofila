<?php

/**
 * BasePreregistro
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombrelugar
 * @property string $nombrecontacto
 * @property string $telcontacto
 * @property boolean $estado
 * @property datetime $fecha_creacion
 * @property datetime $fecha_actualizacion
 * 
 * @method integer     getId()                  Returns the current record's "id" value
 * @method string      getNombrelugar()         Returns the current record's "nombrelugar" value
 * @method string      getNombrecontacto()      Returns the current record's "nombrecontacto" value
 * @method string      getTelcontacto()         Returns the current record's "telcontacto" value
 * @method boolean     getEstado()              Returns the current record's "estado" value
 * @method datetime    getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method datetime    getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method Preregistro setId()                  Sets the current record's "id" value
 * @method Preregistro setNombrelugar()         Sets the current record's "nombrelugar" value
 * @method Preregistro setNombrecontacto()      Sets the current record's "nombrecontacto" value
 * @method Preregistro setTelcontacto()         Sets the current record's "telcontacto" value
 * @method Preregistro setEstado()              Sets the current record's "estado" value
 * @method Preregistro setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method Preregistro setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePreregistro extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('preregistro');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('nombrelugar', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('nombrecontacto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'length' => 255,
             ));
        $this->hasColumn('telcontacto', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
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
        
    }
}