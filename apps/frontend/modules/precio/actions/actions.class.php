<?php

/**
 * precio actions.
 *
 * @package    cine
 * @subpackage precio
 * @author     andres
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class precioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->precio = Doctrine::getTable('Precio')->getPrecio(date('Y-m-d'),'3D');
  }
}
