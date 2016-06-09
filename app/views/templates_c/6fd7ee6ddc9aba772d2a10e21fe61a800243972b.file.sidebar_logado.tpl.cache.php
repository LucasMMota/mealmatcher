<?php /* Smarty version Smarty-3.1.19, created on 2016-06-08 21:57:45
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\comuns\sidebar_logado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74725758bf09688f38-04072169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd7ee6ddc9aba772d2a10e21fe61a800243972b' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\comuns\\sidebar_logado.tpl',
      1 => 1464901085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74725758bf09688f38-04072169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758bf0968bec2_27081329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758bf0968bec2_27081329')) {function content_5758bf0968bec2_27081329($_smarty_tpl) {?><nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">Meu Perfil</a>
        <ul class="right hide-on-med-and-down">

            <li>
                <a href="/pessoa/perfil">
                    Meu Perfil
                </a>
            </li>
            <li>
                <a href="/matches">
                    Matches
                </a>
            </li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/pessoa/perfil">Meu Perfil</a></li>
            <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/pessoa/sugerir">Sugerir Pratos/Bebidas</a></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
</nav><?php }} ?>
