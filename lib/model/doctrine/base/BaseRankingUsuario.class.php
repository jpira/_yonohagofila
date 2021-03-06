<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RankingUsuario', 'doctrine');

/**
 * BaseRankingUsuario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $usuario_id
 * @property integer $local_id
 * @property integer $ranking_id
 * @property datetime $fecha_creacion
 * @property datetime $fecha_actualizacion
 * @property integer $puntos
 * @property Ranking $Ranking
 * @property Local $Local
 * @property Usuario $Usuario
 * 
 * @method integer        getId()                  Returns the current record's "id" value
 * @method integer        getUsuarioId()           Returns the current record's "usuario_id" value
 * @method integer        getLocalId()             Returns the current record's "local_id" value
 * @method integer        getRankingId()           Returns the current record's "ranking_id" value
 * @method datetime       getFechaCreacion()       Returns the current record's "fecha_creacion" value
 * @method datetime       getFechaActualizacion()  Returns the current record's "fecha_actualizacion" value
 * @method integer        getPuntos()              Returns the current record's "puntos" value
 * @method Ranking        getRanking()             Returns the current record's "Ranking" value
 * @method Local          getLocal()               Returns the current record's "Local" value
 * @method Usuario        getUsuario()             Returns the current record's "Usuario" value
 * @method RankingUsuario setId()                  Sets the current record's "id" value
 * @method RankingUsuario setUsuarioId()           Sets the current record's "usuario_id" value
 * @method RankingUsuario setLocalId()             Sets the current record's "local_id" value
 * @method RankingUsuario setRankingId()           Sets the current record's "ranking_id" value
 * @method RankingUsuario setFechaCreacion()       Sets the current record's "fecha_creacion" value
 * @method RankingUsuario setFechaActualizacion()  Sets the current record's "fecha_actualizacion" value
 * @method RankingUsuario setPuntos()              Sets the current record's "puntos" value
 * @method RankingUsuario setRanking()             Sets the current record's "Ranking" value
 * @method RankingUsuario setLocal()               Sets the current record's "Local" value
 * @method RankingUsuario setUsuario()             Sets the current record's "Usuario" value
 * 
 * @package    Yonohagofila
 * @subpackage model
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRankingUsuario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ranking_usuario');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
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
        $this->hasColumn('ranking_id', 'integer', 4, array(
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
        $this->hasColumn('puntos', 'integer', 4, array(
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
        $this->hasOne('Ranking', array(
             'local' => 'ranking_id',
             'foreign' => 'id'));

        $this->hasOne('Local', array(
             'local' => 'local_id',
             'foreign' => 'id'));

        $this->hasOne('Usuario', array(
             'local' => 'usuario_id',
             'foreign' => 'id'));
    }
}