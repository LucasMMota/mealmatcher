<?php

class matches extends controller
{

    function index_action()
    {
        $this->template->setTitle("Top Matches");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');

        $this->smarty->assign('matches', (new PessoaModel())->topMatches());
        //TODO mudar para colappse
        //TODO pessoa sugerir
        //TODO criar all matches
        //TODO sobre

        $this->template->run();
        $this->smarty->display("top_matches.tpl");
    }
}