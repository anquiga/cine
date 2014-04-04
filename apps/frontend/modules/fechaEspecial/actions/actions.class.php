<?php

/**
 * fechaEspecial actions.
 *
 * @package    cine
 * @subpackage fechaEspecial
 * @author     andres
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FechaEspecialActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

  public function executeIndex(sfWebRequest $request)
  {
    $this->fecha = Doctrine::getTable('FechaEspecial')->getDia(date('Y-m-d'));
  }
  
}
