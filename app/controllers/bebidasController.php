<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class bebidas extends controller
{
    public function getBebidas()
    {
        $bebidasModel = new BebidasModel();
        $bebidas = $bebidasModel->getAll();

        $arrBebidas = array();
        if ($bebidas)
            foreach ($bebidas as $beb) {
                $arrBebidas[$beb['beb_id']] = $beb['beb_nome'];
            }
        return $arrBebidas;
    }
}