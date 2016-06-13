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

    public function insere($data){
    	return $this->insert(`cad_pratos`, $data);
    }

    public function update($data, $id){
    	$where = "pra_id = '$id'";
    	return $this->update('cad_pratos', $data, $where);
    }

    public function delete($pra_id){
        return $this->delete('cad_pratos', "pra_id = '$pra_id'");
    }
}