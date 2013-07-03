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
            $username = $form->getValue('_email');
            $password = Usuario::encode($form->getValue('_password'),$form->getValue('_email'));
            $query1 = Doctrine_Query::create()->from('Usuario u')
                            ->where('email = ? AND contrasena = ? ', array($username, $password))
                            ->fetchOne();
//                    print_r($password);die();
            if ($query1) {  
                $query2 = Doctrine_Query::create()->from('perfilcredencial p, p.Credencial')
                        ->where('p.perfil_id = ?', $query1->get('perfil_id'))
                        ->execute();
                
                if ($query2) {
                    foreach ($query2 as $q) {                        
                        $this->getUser()->addCredentials($credential = $q->get('Credencial')->get('nombre'));
                    }
                    $this->getUser()->setAttribute('Usuario', $query1);
                    $this->getUser()->setAuthenticated(true);
                $this->getUser()->setFlash('notice_private', "Bienvenido al sistema Administrativo de Yonohagofila.com");
                $this->redirect('@homepage');
                }
                else{
                    $this->getUser()->setFlash('error', "Faltan Credenciales ");
                    $this->redirect('@login');
                }
            }
        } else {
            $this->getUser()->setFlash('error_private', "Debe diligenciar correctamente la información del formulario");
        }
    }
    
     public function executeLogout() {
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->clearCredentials();
        $this->getUser()->getAttributeHolder()->clear();
        $this->getUser()->setFlash('notice', "Sesion cerrada correctamente");
        $this->redirect('@login');
    }

}
