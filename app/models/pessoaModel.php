<?php

/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 02/06/2016
 * Time: 13:54
 */
class PessoaModel extends model
{
    public function inserir($arrDados)
    {
        return $this->insert('cad_pessoa', $arrDados);
    }

    public function numeroAvaliacoes($pes_id)
    {
        $where = "pes_id = '$pes_id'";
        return $this->read('cad_avaliacao', array('count(*) as total'), $where);
    }

    public function numeroMatches($pes_id)
    {
        $where = "pes_id = '$pes_id'";
        return $this->read('cad_combinacao', array('count(*) as total'), $where);
    }

    public function login($email, $senha)
    {
        $where = "pes_email = '$email' and pes_senha = '$senha'";
        return $this->read('cad_pessoa', array('*'), $where);
    }

    public function novoMatch($arrMatch)
    {
        return $this->insert('cad_combinacao', $arrMatch);
    }

    public function ultimosMatches($pes_id = null)
    {
        $tables = 'cad_combinacao as comb
                   LEFT JOIN cad_bebidas beb on beb.beb_id = comb.beb_id
                   LEFT JOIN cad_pratos pra on pra.pra_id = comb.pra_id';

        $where = "";
        if (!is_null($pes_id))
            $where = "pes_id = '$pes_id'";

        return $this->read($tables, array('*'), $where, null, 10, null, 'data DESC');
    }

    public function topMatches()
    {
        $tables = 'cad_combinacao as comb
                   LEFT JOIN cad_bebidas beb on beb.beb_id = comb.beb_id
                   LEFT JOIN cad_pratos pra on pra.pra_id = comb.pra_id
                   LEFT JOIN cad_avaliacao ava on ava.com_id = comb.com_id';

        return $this->read($tables, array('comb.*, beb.*, pra.*, count(ava.ava_curtir) as votos'), null, "comb.com_id", 10, null, 'votos DESC, data Desc');
    }

}