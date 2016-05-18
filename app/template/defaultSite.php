<?php

class defaultSite extends template {

    public function init() {

        $head = $this->smarty->fetch("comuns/head.tpl");
        $this->smarty->assign('head', $head);

        $navegacao = $this->smarty->fetch("comuns/navegacao.tpl");
        $this->smarty->assign('navegacao', $navegacao);

        $footer = $this->smarty->fetch("comuns/footer.tpl");
        $this->smarty->assign('footer', $footer);
    }

}

?>