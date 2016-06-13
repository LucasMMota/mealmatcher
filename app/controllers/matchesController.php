<?php

class matches extends controller
{

    function index_action()
    {
        $this->template->setTitle("Top Matches");
        $this->template->fetchJS('/files/js/matches/top_matches.js');
        $pessoaModel = new PessoaModel;
        $matches = $pessoaModel->topMatches();

        if (isset($_SESSION['user']))
            foreach ($matches as $k => $match) {
                $arrAva = $pessoaModel->verificaCurtir($_SESSION['user']['id'], $match['com_id']);

                if ($arrAva)
                    $matches[$k]['curtiu'] = $arrAva[0]['ava_curtir'];
                else
                    $matches[$k]['curtiu'] = false;
                //var_dump($matches[$k]);die;
            }

        //TODO pessoa sugerir
        //TODO criar all matches
        //TODO sobre


        $this->smarty->assign('matches', $matches);
        $this->smarty->assign('logado', isset($_SESSION['user']['id']));
        $this->template->run();
        $this->smarty->display("top_matches.tpl");
    }

    function curtir()
    {
        $com_id = $_POST['com_id'];
        $obj = (new MatchesModel);
        $obj->curtir($com_id);

        echo json_encode(array('type' => 'success'));
        die;
    }
}