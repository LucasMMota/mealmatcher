<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 02/06/2016
 * Time: 13:54
 */
class PratosModel extends model
{

    public function getAll()
    {
        return $this->read('cad_pratos', array('*'));
    }
}