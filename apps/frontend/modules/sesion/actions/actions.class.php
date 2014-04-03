<?php

/**
 * sesion actions.
 *
 * @package    cine
 * @subpackage sesion
 * @author     andres
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sesionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
        $this->sesiones = Doctrine::getTable('Sesion')->getTodas();
  }
  
  public function executeCrear(sfWebRequest $request)
  {
    $this->formulario = new SesionForm();
    if ($this->getRequest()->isMethod('post'))
    {
      $this->procesarFormulario($request, $this->formulario);
    }      
  }
  
  public function executeEditar(sfWebRequest $request)
  {
    $sesiones = Doctrine::getTable('Sesion')->find($request->getParameter('id'));
    
    $this->formulario = new SesionForm($sesion);
    if ($this->getRequest()->isMethod('post'))
    {
      $this->procesarFormulario($request, $this->formulario);
    }   
    $this->setTemplate('crear');  
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
    $this->redirect('sesion/index');
  }
}

