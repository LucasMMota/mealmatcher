<?php

class adminSite extends template {

    public function init() {
        
        $head = $this->smarty->fetch("admin/comuns/head.tpl");
        $this->smarty->assign('head', $head);

        $footer = $this->smarty->fetch("admin/comuns/footer.tpl");
        $this->smarty->assign('footer', $footer);
        
        $sidebar_logado = $this->smarty->fetch("admin/comuns/sidebar_logado.tpl");
        $this->smarty->assign('sidebar_logado', $sidebar_logado);

    }

}

?>