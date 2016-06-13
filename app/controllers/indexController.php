<?php

/**
 * Created by PhpStorm.
 * User: LM
 * Date: 01/11/2014
 * Time: 17:46
 */
class index extends controller
{


    function index_action()
    {
        $this::logado();
        $this->template->setTitle("Início");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');
        $this->template->run();
        $this->smarty->display("index.tpl");
    }

    function cadastro()
    {
        $this->template->setTitle("Cadastro");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');
        $this->template->run();
        $this->smarty->display("pessoa/cadastro.tpl");


    }

    function cadastrar_pessoa()
    {
        if ($_POST) {
            $usuId = (new PessoaModel())->inserir($_POST);
            if ($usuId) {
                $_SESSION['user']['id'] = $usuId;
                $_SESSION['user']['nome'] = $_POST['pes_nome'];
                $_SESSION['user']['sobrenome'] = $_POST['pes_sobrenome'];
                $_SESSION['user']['email'] = $_POST['pes_email'];
                $_SESSION['user']['sexo'] = $_POST['pes_sexo'];

                echo json_encode([
                    'type' => 'success'
                ]);
                die;
            }
        }
        echo json_encode([
            'type' => 'error'
        ]);
        die;
    }

    public function login()
    {
        $this::logado();
        $this->template->setTitle("login");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');

        if ($_POST) {
            $pessoa = (new PessoaModel())->login($_POST['pes_email'], $_POST['pes_senha']);
            if ($pessoa) {
                $_SESSION['user']['id'] = $pessoa[0]['pes_id'];
                $_SESSION['user']['nome'] = $pessoa[0]['pes_nome'];
                $_SESSION['user']['sobrenome'] = $pessoa[0]['pes_sobrenome'];
                $_SESSION['user']['email'] = $pessoa[0]['pes_email'];
                $_SESSION['user']['sexo'] = $pessoa[0]['pes_sexo'];
                echo json_encode(['type' => 'success']);
            } else {
                echo json_encode(['type' => 'error']);
            }
            die;
        }

        $this->template->run();
        $this->smarty->display("pessoa/login.tpl");
    }

    public function logout()
    {
        unset($_SESSION['user']);
        Header('Location: /');
    }

    private static function logado()
    {
        if (isset($_SESSION['user'])){
            Header("Location: /pessoa");
        }
    }

    public function sobre(){
        $this->template->setTitle("Sobre");
        //$this->template->fetchJS('files/js/pessoa/pessoa.js');
        $this->template->run();
        $this->smarty->display("sobre.tpl");
    }
}

?>
