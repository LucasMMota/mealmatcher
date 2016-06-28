<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 02/06/2016
 * Time: 13:54
 */
class BebidasModel extends model
{
    public function getAll()
    {
    return $this->read('cad_bebidas', array('*'));
    }

    public function insere($data){
    	return $this->insert(`cad_bebidas`, $data);
    }

    public function update($data, $id){
    	$where = "beb_id = '$id'";
    	return $this->update('cad_bebidas', $data, $where);
    }

    public function delete($beb_id){
        return $this->delete('cad_bebidas', "beb_id = '$beb_id'");
    }
}
