<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class pratos extends controller
{
    public function getPratos()
    {
        $pratosModel = new PratosModel();
        $pratos = $pratosModel->getAll();

        $arrPratos = array();
        if ($pratos)
            foreach ($pratos as $prato) {
                $arrPratos[$prato['pra_id']] = $prato['pra_nome'];
            }
        return $arrPratos;
    }
}