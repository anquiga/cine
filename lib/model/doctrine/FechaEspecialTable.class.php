<?php

/**
 * FechaEspecialTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class FechaEspecialTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object FechaEspecialTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('FechaEspecial');
    }

    public function getDia($dia){
        return $this->createQuery('fechaEspecial')
               ->where('fechaEspecial.fecha=\''.$dia.'\'')
               ->fetchOne();
    }
}


