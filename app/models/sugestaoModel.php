<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 02/06/2016
 * Time: 13:54
 */
class SugestaoModel extends model
{

    public function novaSugestao($arrData)
    {
        return $this->insert('cad_sugestao', $arrData);
    }

    public function minhasSugestoes($id)
    {
        $where = "pes_id = '$id'";
        return $this->read('cad_sugestao', array("*"), $where);
    }
}