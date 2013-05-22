<?php

/**
 * estaticas actions.
 *
 * @package    Yonohagofila
 * @subpackage estaticas
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estaticasActions extends sfActions {

    protected $legales = array('condiciones' => 'Condiciones legales', 'privacidad' => 'Privacidad');
    
    public function executeLegales(sfWebRequest $request) {
        $this->page = $request->getParameter('page');
        $this->getResponse()->setTitle($this->legales[$this->page]);
    }

}
