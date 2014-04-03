<?php

/**
 * Pelicula actions.
 *
 * @package    cine
 * @subpackage Pelicula
 * @author     andres
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PeliculaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->pelicula = Doctrine::getTable('pelicula')->getTodas();
  }
  
  public function executeCrear(sfWebRequest $request){
      $this->formulario = new PeliculaForm();
   if ($this->getRequest()->isMethod('post'))
    {
    $this->procesarFormulario($request, $this->formulario);
    }  
  }
  public function procesarFormulario(sfWebRequest $request, sfForm $form)
  {
    $form->bind(
      $request->getParameter($form->getName()),
      $request->getFiles($form->getName())
    );
    if ($form->isValid())
  {
    $form->save();
  }
  $this->redirect('Pelicula/index');
  }
}
