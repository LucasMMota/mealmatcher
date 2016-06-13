<?php

class pessoa extends controller
{
    private $pessoaModel = null;
    private $pessoa = false;

    /**
     * pessoa constructor.
     * @param null $pessoaModel
     */
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['user']))
            $this->pessoa = $_SESSION['user'];
        else
            Header('Location: /index/login');
        $this->pessoaModel = new PessoaModel();
    }


    function index_action()
    {
        $this->template->setTitle("Meu Perfil");
        $this->template->fetchJS('/files/js/pessoa/perfil.js');

        $nAva = $this->pessoaModel->numeroAvaliacoes($_SESSION['user']['id']);
        $nAva = $nAva[0];
        $nMatches = $this->pessoaModel->numeroMatches($_SESSION['user']['id']);
        $nMatches = $nMatches[0];

        $this->pessoa['numAva'] = $nAva['total'];
        $this->pessoa['numMatches'] = $nMatches['total'];

        $this->smarty->assign('pessoa', $this->pessoa);
        $this->template->run();
        $this->smarty->display("pessoa/index_logado.tpl");
    }

    function perfil()
    {
        $this->template->setTitle("Meu Perfil");
        $this->template->fetchJS('/files/js/pessoa/perfil.js');

        $nAva = $this->pessoaModel->numeroAvaliacoes($_SESSION['user']['id']);
        $nAva = $nAva[0];
        $nMatches = $this->pessoaModel->numeroMatches($_SESSION['user']['id']);
        $nMatches = $nMatches[0];

        $this->pessoa['numAva'] = $nAva['total'];
        $this->pessoa['numMatches'] = $nMatches['total'];

        $this->smarty->assign('pessoa', $this->pessoa);
        $this->template->run();
        $this->smarty->display("pessoa/index_logado.tpl");
    }

    function meus_matches()
    {
        $this->template->setTitle("Meus Matches");
        //$this->template->fetchJS('/files/js/pessoa/perfil.js');

        $this->smarty->assign('matches', $this->pessoaModel->ultimosMatches($_SESSION['user']['id']));

        $this->template->run();
        $this->smarty->display("pessoa/meus_matches.tpl");
    }

    function sugerir()
    {
        $this->template->setTitle("Sugestão");
        $this->template->fetchJS('/files/js/pessoa/sugerir.js');

        if ($_POST) {
            $comida = isset($_POST['comida']) ? $_POST['comida'] : false;
            $bebida = isset($_POST['bebida']) ? $_POST['bebida'] : false;

            if (!$comida && !$bebida) {
                echo json_encode(array('type' => 'error'));
                die;
            }

            $arrData = array();
            if ($comida) {
                $arrData['sug_prato'] = $comida;
            }
            if ($bebida) {
                $arrData['sug_bebida'] = $bebida;
            }
            $arrData['pes_id'] = $_SESSION['user']['id'];
            $sugestaoModel = new SugestaoModel;
            if ($sugestaoModel->novaSugestao($arrData)) {
                echo json_encode(array('type' => 'success'));
                die;
            } else {
                echo json_encode(array('type' => 'error2'));
                die;
            }
        }

        $this->template->run();
        $this->smarty->display("pessoa/sugerir.tpl");
    }

    public function novo_match()
    {
        if ($_POST) {
            $arrMatch['pra_id'] = $_POST['prato'];
            $arrMatch['beb_id'] = $_POST['bebida'];
            $arrMatch['com_descricao'] = $_POST['comentario'];
            $arrMatch['pes_id'] = $_SESSION['user']['id'];
            $arrMatch['com_nota'] = $_POST['nota'];

            if ($this->pessoaModel->novoMatch($arrMatch))
                echo json_encode(array('type' => 'success'));
            else
                echo json_encode(array('type' => 'error'));
            die;
        }

        $this->template->setTitle("Novo Match!");
        $this->template->fetchJS('/files/js/pessoa/novo_match.js');

        require_once(CONTROLLERS . DS . 'pratosController.php');
        require_once(CONTROLLERS . DS . 'bebidasController.php');

        $pObj = (new pratos());
        $bObj = (new bebidas());
        $this->smarty->assign('pratos', $pObj->getPratos());
        $this->smarty->assign('bebidas', $bObj->getBebidas());

        $this->template->run();
        $this->smarty->display("pessoa/novo_match.tpl");
    }

    public function minhas_sugestoes()
    {
        $this->template->setTitle("Minhas Sugestões");
        //$this->template->fetchJS('/files/js/pessoa/perfil.js');
        $sugModel = (new SugestaoModel);
        $arrSugestao = $sugModel->minhasSugestoes($_SESSION['user']['id']);
        $sugestoes = array();
        foreach ($arrSugestao as $k => $sugestao) {
            $arrImplode = array();
            if ($sugestao['sug_prato'])
                $arrImplode[] = $sugestao['sug_prato'];

            if ($sugestao['sug_bebida'])
                $arrImplode[] = $sugestao['sug_bebida'];

            $sugestoes[$k]['sug'] = implode(" & ", $arrImplode);
            $sugestoes[$k]['data'] = $sugestao['sug_data_insert'];
        }
        $this->smarty->assign('sugestoes', $sugestoes);

        $this->template->run();
        $this->smarty->display("pessoa/minhas_sugestoes.tpl");
    }
}