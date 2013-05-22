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

    public function executeIndex() {
        
    }

    public function executeError404() {
        
    }

    public function executeLogin(sfWebRequest $request) {
        $this->getResponse()->setTitle('Ingreso');
        
        $this->form = new LoginSecureForm();

        if ($request->isMethod('POST')) {
            $this->validateLogin($request, $this->form);
        }
    }

    private function validateLogin(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            // Se valida la informacion de acceso del usuario
            die('entrando');
            $this->getUser()->setFlash('notice_private', "Bienvenido al sistema Administrativo de Yonohagofila.com");
        } else {
            $this->getUser()->setFlash('error_private', "Debe diligenciar correctamente la información del formulario");
        }
    }

}
