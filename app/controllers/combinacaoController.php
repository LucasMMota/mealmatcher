<?php

class combinacao extends controller
{

    function index_action()
    {
        $this->template->setTitle("Index");
        //$this->template->fetchJS('files/js/index/index.js');
        $this->template->run();
        $this->smarty->display("index.tpl");
    }
}

?>