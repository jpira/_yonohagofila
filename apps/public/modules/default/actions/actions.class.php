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
            $this->processForm($request, $this->form);
        }
    }

//    public function Reserva(sfWebRequest $request, sfForm $form) {
//        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
//        if ($form->isValid()) {
//            $form->save();
//            $this->getUser()->setFlash('notice', "Reserva Realizada");
//            $this->redirect('@homepage');
//        }
//    }

    public function executeError404() {
        
    }

    public function executeLogin(sfWebRequest $request) {

        $username = $_POST['nombre'];
        $password = Usuario::encode($_POST['password'], $_POST['nombre']);
        $query1 = Doctrine_Query::create()->from('Usuario u')
                ->where('email = ? AND contrasena = ? ', array($username, $password))
                ->fetchOne();
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
            } else {
                $this->getUser()->setFlash('error', "Faltan Credenciales ");
                $this->redirect('@homepage');
            }
        } else {
            $this->getUser()->setFlash('error_private', "Debe diligenciar correctamente la información del formulario");
            $this->redirect('@homepage');
        }
    }

    public function executeLogout(sfWebRequest $request) {
        $this->getUser()->setAuthenticated(false);
        $this->getUser()->clearCredentials();
        $this->getUser()->getAttributeHolder()->clear();
        $this->getUser()->setFlash('notice', "Sesion cerrada correctamente");
        $this->redirect('@homepage');
    }

    public function executeCancelar(sfWebRequest $request) {
        $cancelar = Doctrine_Query::create()
                ->update('Reserva r')
                ->set('r.estado', '?', 'Cancelada por el Usuario')
                ->where('r.id = ?', $request->getParameter('id'))
                ->execute();
        $this->redirect('@homepage');
    }

    public function executeBuscar(sfWebRequest $request) {
        
    }

    public function executeVer(sfWebRequest $request) {
        
    }

    public function executeEditar(sfWebRequest $request) {
        $q = Doctrine::getTable('Usuario')->findOneBy('id', $request->getParameter('id'));
        $this->form = new UsuarioForm($q);
        if ($request->isMethod('POST')) {
            $this->processForm($request, $this->form);
        }
    }

    public function executeNuevo(sfWebRequest $request) {
        $this->form = new UsuarioForm();
        if ($request->isMethod('POST')) {
            $this->processForm($request, $this->form);
        }
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

            try {
                $usuario = $form->save();
            } catch (Doctrine_Validator_Exception $e) {

                $errorStack = $form->getObject()->getErrorStack();

                $message = get_class($form->getObject()) . ' has ' . count($errorStack) . " field" . (count($errorStack) > 1 ? 's' : null) . " with validation errors: ";
                foreach ($errorStack as $field => $errors) {
                    $message .= "$field (" . implode(", ", $errors) . "), ";
                }
                $message = trim($message, ', ');

                $this->getUser()->setFlash('error', $message);
                return sfView::SUCCESS;
            }

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $usuario)));

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice', $notice . ' You can add another one below.');

                $this->redirect('@homepage');
            } else {
                $this->getUser()->setFlash('notice', $notice);

                $this->redirect('@homepage');
            }
        } else {
            $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
        }
    }

}
