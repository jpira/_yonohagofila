<?php

/**
 * default actions.
 *
 * @package    Yonohagofila
 * @subpackage default
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {
        $this->getResponse()->setTitle('Yonohagofila');
        $this->form = new ReservaForm();
        
        if ($request->isMethod('POST')) {
            $this->Reserva($request, $this->form);
        }
    }

    public function Reserva(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $form->save();
            $this->getUser()->setFlash('notice', "Reserva Realizada");
            $this->redirect('@homepage');
        }
    }

    public function executeError404() {
        
    }

}
