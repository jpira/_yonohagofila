<?php

/**
 * ajax actions.
 *
 * @package    Yonohagofila
 * @subpackage ajax
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ajaxActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeUsers($request) {
        $this->getResponse()->setContentType('application/json');

        $query = UsuarioTable::getInstance()->ajaxUsuarioQuery(
                $request->getParameter('q'), $request->getParameter('limit')
        );
        $users = array();
        foreach ($query as $user) {
            $users[$user->getId()] = (string) $user;
        }
        return $this->renderText(json_encode($users));
    }
}
