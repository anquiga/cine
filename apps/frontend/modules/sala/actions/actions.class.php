<?php

/**
 * sala actions.
 *
 * @package    cine
 * @subpackage sala
 * @author     grupocine
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class salaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->salas = Doctrine::getTable('sala')->getTodas();
  }
  
  public function executeCrear(sfWebRequest $request)
  {
    $this->formulario = new SalaForm();
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
    $this->redirect('sala/index');
  }  
  
  public function executeFiltradasPorCine(sfWebRequest $request)
  {
      $cine = Doctrine::getTable('cine')->find($request->getParameter('id'));
      $this->salas = Doctrine::getTable('sala')->getFiltradasPorCine($cine);
      $this->setTemplate('index');
  }  
}
