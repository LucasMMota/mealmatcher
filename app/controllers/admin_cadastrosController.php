<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class pratos extends controller
{

    function index_action()
    {
        $this->template->setTitle("Index");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');
        $this->template->run();
        $this->smarty->display("pessoa.tpl");
    }
}

?>