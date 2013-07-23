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
    }

    public function executeReservar(sfWebRequest $request) {
        if ($request->isMethod('POST')) {
            $this->form = new ReservaForm();
            $this->processForm2($request, $this->form);
        }
    }

    public function executeError404() {
        
    }

    public function executeBusqueda1() {
        
    }

    public function executeEdituser(sfWebRequest $request) {
        $q = Doctrine::getTable('Usuario')->findOneBy('id', $this->getUser()->getAttribute('Usuario')->get('id'));
        $this->form = new UsuarioFrontForm($q);
        if ($request->isMethod('POST')) {
            $this->processForm($request, $this->form);
        }
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
//        $this->redirect('@homepage');
    }

    public function executeCodigo(sfWebRequest $request) {
        $this->x = $request->getParameter('id');
    }

//    public function executeEditar(sfWebRequest $request) {
//        $edicion = Doctrine_Query::create()
//                ->update('Usuario u')
//                ->set('telefono', '?', $_POST['value'])
//                ->where('id = ?', $request->getParameter('id'))
//                ->execute();
//    }
//
//    public function executeEditar2(sfWebRequest $request) {
//        $edicion = Doctrine_Query::create()
//                ->update('Usuario u')
//                ->set('email', '?', $_POST['value'])
//                ->where('id = ?', $request->getParameter('id'))
//                ->execute();
//    }

    public function executeAlarma(sfWebRequest $request) {
        $this->reserva = $request->getParameter('reserva');
        $this->opcion = $request->getParameter('opcion');
        $this->comentario = $request->getParameter('texto');
        $this->usuario = $this->getUser()->getAttribute('Usuario')->get('id');
    }

    public function executeNuevo(sfWebRequest $request) {
        $this->form = new UsuarioForm();
        $this->form->setDefault('perfil_id', 3);
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

                $this->getUser()->setFlash('error_user', $message);
                return sfView::SUCCESS;
            }

            $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $usuario)));

            if ($request->hasParameter('_save_and_add')) {
                $this->getUser()->setFlash('notice_user', $notice . ' You can add another one below.');

//        $this->redirect('@usuario_new');
            } else {
                $this->getUser()->setFlash('notice_user', $notice);

//        $this->redirect(array('sf_route' => 'usuario_edit', 'sf_subject' => $usuario));
            }
        } else {
            $this->getUser()->setFlash('error_user', 'The item has not been saved due to some errors.', false);
        }
    }

    protected function processForm2(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        $this->i = $request->getParameter('ide');
        $this->save = 0;
        $this->mensaje_ = '';
        if ($form->isValid()) {
            $this->reserva = $form->save();
            $this->mensaje_ = "Reserva realizada correctamente";
            $this->save = true;
            $this->form = new ReservaForm();
        } else {
            $this->mensaje_ = "Error";
        }
    }

}
