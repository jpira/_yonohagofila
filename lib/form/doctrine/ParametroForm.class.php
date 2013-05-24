<?php

/**
 * Parametro form.
 *
 * @package    Yonohagofila
 * @subpackage form
 * @author     Arquitectura - Juan Pablo Cardona Mejia <jpcardona@ibccodecontrol.com> - Desarrollo - Jeison Pira Murillo <jpira@ibccodecontrol.com> - Diseño - Ricardo Piedrahita <rpiedrahita.america@solucionesc2.com>
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ParametroForm extends BaseParametroForm
{
  public function configure()
  {
      $this->setWidget('id_usuario', new sfWidgetFormInputHidden());
      $this->setWidget('fecha_actualizacion', new sfWidgetFormInputHidden());
  }
}
