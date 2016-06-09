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

        $nAva = $this->pessoaModel->numeroAvaliacoes($_SESSION['user']['id'])[0];
        $nMatches = $this->pessoaModel->numeroMatches($_SESSION['user']['id'])[0];

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

        $nAva = $this->pessoaModel->numeroAvaliacoes($_SESSION['user']['id'])[0];
        $nMatches = $this->pessoaModel->numeroMatches($_SESSION['user']['id'])[0];

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
        //$this->template->fetchJS('/files/js/pessoa/perfil.js');

        $this->template->run();
        $this->smarty->display("novo_match.tpl");
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
                echo json_encode(['type' => 'success']);
            else
                echo json_encode(['type' => 'error']);
            die;
        }

        $this->template->setTitle("Novo Match!");
        $this->template->fetchJS('/files/js/pessoa/novo_match.js');

        require_once(CONTROLLERS . DS . 'pratosController.php');
        require_once(CONTROLLERS . DS . 'bebidasController.php');

        $this->smarty->assign('pratos', (new pratos())->getPratos());
        $this->smarty->assign('bebidas', (new bebidas())->getBebidas());

        $this->template->run();
        $this->smarty->display("pessoa/novo_match.tpl");
    }
}