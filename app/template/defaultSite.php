<?php

class defaultSite extends template
{
    public function init()
    {

        $head = $this->smarty->fetch("comuns/head.tpl");
        $this->smarty->assign('head', $head);

        $navegacao = $this->smarty->fetch("comuns/navegacao.tpl");
        $this->smarty->assign('navegacao', $navegacao);

        $sb = $this->smarty->fetch("comuns/sidebar_logado.tpl");
        $this->smarty->assign('sidebar_logado', $sb);

        $footer = $this->smarty->fetch("comuns/footer.tpl");
        $this->smarty->assign('footer', $footer);
    }
}