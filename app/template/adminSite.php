<?php

class adminSite extends template {

    public function init() {
        
        $head = $this->smarty->fetch("admin/comuns/head.tpl");
        $this->smarty->assign('head', $head);

        $footer = $this->smarty->fetch("admin/comuns/footer.tpl");
        $this->smarty->assign('footer', $footer);
        
        $sidebar_menu = $this->smarty->fetch("admin/comuns/sidebar_menu.tpl");
        $this->smarty->assign('sidebar_menu', $sidebar_menu);
        
        $header = $this->smarty->fetch("admin/comuns/header.tpl");
        $this->smarty->assign('header', $header);
    }

}

?>