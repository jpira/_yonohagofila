<?php

/**
 * Ranking form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class RankingForm extends BaseRankingForm
{
  protected function doUpdateObject($values) {    
       if ($this->isNew()) {
            $values['fecha_creacion'] = date('Y-m-d G:i:s');
            $values['fecha_actualizacion'] = date('Y-m-d G:i:s');
        } else {
            $values['fecha_actualizacion'] = date('Y-m-d G:i:s');
        }
        $sf_user = sfContext::getInstance()->getUser();
        $values['id_usuario'] = $sf_user->getAttribute('Usuario')->get('id');
        parent::doUpdateObject($values);
    }
    
    public function configure() {
        $this->getWidget('nombre')->setAttributes(array('placeholder' => 'Nombre Ranking', 'required' => 'required'));
        $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
        $this->setWidget('fecha_actualizacion', new sfWidgetFormInputHidden());
    }
}
