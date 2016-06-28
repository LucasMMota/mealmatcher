<?php

/**
 * Description of template
 *
 */
class template
{

    protected $title;
    protected $css = array();
    protected $js = array();
    protected $path_root;
    protected $settings;
    public $smarty;
    public $mail;

    public function __construct($objSmarty)
    {
        $this->smarty = $objSmarty;

        /* ativa path_root para https caso necessario */
        if ($_SERVER["SERVER_PORT"] == 443) {
            $this->path_root = 'https://' . $_SERVER['HTTP_HOST'];
        } else {
            $this->path_root = 'http://' . $_SERVER['HTTP_HOST'];
        }
        //css site
        $this->css[] = $this->path_root . '/files/css/materialize.min.css';
        $this->css[] = $this->path_root . '/files/css/style.css';

        /* javaScript site */
        $this->js[] = $this->path_root . '/files/js/jquery-2.1.1.min.js';
        $this->js[] = $this->path_root . '/files/js/materialize.min.js';
        $this->js[] = $this->path_root . '/files/js/init.js';
        $this->js[] = $this->path_root . '/files/js/FacebookSDK.js';

        /*
        */
        /*$this->js[] = $this->path_root . '/files/js/jQuery/jquery.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-carousel.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-alert.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-modal.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-dropdown.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-scrollspy.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-tab.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-tooltip.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-popover.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-button.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-collapse.js';
        $this->js[] = $this->path_root . '/files/js/bootstrap/bootstrap-typeahead.js';
        $this->js[] = $this->path_root . '/files/js/jQuery/jquery-ui-1.8.18.custom.min.js';
        $this->js[] = $this->path_root . '/files/js/jQuery/jquery.smooth-scroll.min.js';
        $this->js[] = $this->path_root . '/files/js/lightbox.js';*/

        /* Notify */
/*        $this->js[] = $this->path_root . '/files/js/noty/jquery.noty.js';
        $this->js[] = $this->path_root . '/files/js/noty/themes/default.js';
        $this->js[] = $this->path_root . '/files/js/noty/layouts/center.js';
        $this->js[] = $this->path_root . '/files/js/util.js';
        $this->css[] = $this->path_root . '/files/css/ionicons.min.css';*/


        /*if (strpos($_SESSION['currentPage'], 'admin_') === false) {
            /* Style Padrao
            $this->css[] = $this->path_root . ' / files / css / style . css';
        } else {
            /* Style Admin
        }*/
    }

    public function setTitle($title = '')
    {
        $this->title = $title;
    }

    public
    function fetchCSS($css)
    {
        $this->css[] = $this->path_root . $css;
    }

    public
    function fetchJS($js)
    {
        $this->js[] = $js;
    }

    public
    function run()
    {
        
        //verifica permissao de acesso aos controllers administrativos (admin_)
        if (strpos($_SESSION['currentPage'], 'admin_') !== false && !isset($_SESSION['admin'])) {
            //se esta tentando acessar pagina administrativa e nao esta logado, redireciona para tela de login
            header("Location:/admin");
            die;
        } else {
        //Se estiver logado como admin, exibir o theme Admin
        if (strpos($_SESSION['currentPage'], 'admin_') === 0 && isset($_SESSION['admin'])) {
            $this->settings = new adminSite($this->smarty);
        } else {
            $this->settings = new defaultSite($this->smarty);
        }

        $this->smarty->assign('path_root', $this->path_root);
        $this->smarty->assign('title', $this->title);
        $this->smarty->assign('css', $this->css);
        $this->smarty->assign('js', $this->js);

        $this->settings->init();

        /*if (MANUTENCAO == 'true') {
            $this->smarty->display('manutencao.html');
            die;
        }*/
        //}
        }
    }
}