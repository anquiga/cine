<?php

/**
 * cine actions.
 *
 * @package    cine
 * @subpackage cine
 * @author     grupocine
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cineActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->cines = Doctrine::getTable('Cine')->getTodos();
  }
  
  public function executeCrear(sfWebRequest $request)
  {
    $this->formulario = new CineForm();
    if ($this->getRequest()->isMethod('post'))
    {
      $this->procesarFormulario($request, $this->formulario);
    } 
  }
  
  public function procesarFormulario(sfWebRequest $request, sfForm $form){
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName()) 
    );
    
    if ($form->isValid())
    {
      $form->save();
    }
    $this->redirect('cine/index');
  }
}
