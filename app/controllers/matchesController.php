<?php

class matches extends controller
{

    function index_action()
    {
        $this->template->setTitle("Top Matches");
        $this->template->fetchJS('/files/js/matches/top_matches.js');
        $pessoaModel = (new PessoaModel())->topMatches();
        $matches = $pessoaModel->topMatches();

        $this->smarty->assign('matches', $matches);

        foreach ($matches as $match) {
        $pessoaModel->;
        }

        //TODO mudar para colappse
        //TODO pessoa sugerir
        //TODO criar all matches
        //TODO sobre


        $this->smarty->assign('logado', isset($_SESSION['user']['id']));
        $this->template->run();
        $this->smarty->display("top_matches.tpl");
    }

    function curtir()
    {
        $com_id = $_POST['com_id'];

        (new MatchesModel)->curtir($com_id);

        echo json_encode(['type' => 'success']);
        die;
    }
}