<?php

/**
 * SesionTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SesionTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SesionTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Sesion');
    }


     public function getTodas(){
        return $this->createQuery('sesion')->execute();
    }
    public function filtrarPorSala(){
        $precio = Doctrine::getTable('Sala')->find($request->getSalaId()); 
    }    
    
}


