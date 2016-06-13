<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 08/06/2016
 * Time: 21:17
 */
class MatchesModel extends model
{

    public function curtir($com_id)
    {
        try {
            $data = [
                'com_id' => $com_id,
                'pes_id' => $_SESSION['user']['id'],
                'ava_curtir' => '1'
            ];
            return $this->insert('cad_avaliacao', $data);
        } catch (Exception $e) {
            return true;
        }
    }
}
