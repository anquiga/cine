<?php

/**
 * Sala
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    cine
 * @subpackage model
<<<<<<< HEAD
 * @author     andres
=======
 * @author     grupocine
>>>>>>> 8b8f1a2053cf023ecaad21eb3944d2e352d02f97
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Sala extends BaseSala
{
    public function __toString(){
        return $this->getCine()->getDireccion.' sala '.$this->getId().' '.$this->getTamanioPantalla();
    }
}
