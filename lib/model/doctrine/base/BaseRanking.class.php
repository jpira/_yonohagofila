<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Ranking', 'doctrine');

/**
 * BaseRanking
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $nombre
 * @property timestamp $fecha_creacion
 * @property integer $id_usuario
 * @property Doctrine_Collection $RankingUsuario
 * 
 * @method integer             getId()             Returns the current record's "id" value
 * @method string              getNombre()         Returns the current record's "nombre" value
 * @method timestamp           getFechaCreacion()  Returns the current record's "fecha_creacion" value
 * @method integer             getIdUsuario()      Returns the current record's "id_usuario" value
 * @method Doctrine_Collection getRankingUsuario() Returns the current record's "RankingUsuario" collection
 * @method Ranking             setId()             Sets the current record's "id" value
 * @method Ranking             setNombre()         Sets the current record's "nombre" value
 * @method Ranking             setFechaCreacion()  Sets the current record's "fecha_creacion" value
 * @method Ranking             setIdUsuario()      Sets the current record's "id_usuario" value
 * @method Ranking             setRankingUsuario() Sets the current record's "RankingUsuario" collection
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRanking extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ranking');
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
        $this->hasMany('RankingUsuario', array(
             'local' => 'id',
             'foreign' => 'ranking_id'));

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