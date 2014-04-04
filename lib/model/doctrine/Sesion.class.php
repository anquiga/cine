<?php

/**
 * Sesion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cine
 * @subpackage model
 * @author     andres
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Sesion extends BaseSesion
{

    public function __toString(){
      return  $this->getHora(); 
    }
    public static function getPrecio(){
      $precio = Doctrine::getTable('Precio')->find($request->getPrecio($this->dia,$this->version));
           
      return $precio;
    }

}
