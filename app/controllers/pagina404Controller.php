<?php
/**
 * Description of 404Controller
 *
 */
class pagina404 extends controller {

    public function index_action() {
        $this->template->setTitle('Opps! Página não encontrada');
        $this->template->run();
        $this->smarty->display('404.tpl');
    }

}
