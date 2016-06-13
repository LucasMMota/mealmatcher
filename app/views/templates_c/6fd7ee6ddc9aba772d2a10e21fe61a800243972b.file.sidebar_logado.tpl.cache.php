<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:32:45
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\comuns\sidebar_logado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6007575e295dcd7d04-41324409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fd7ee6ddc9aba772d2a10e21fe61a800243972b' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\comuns\\sidebar_logado.tpl',
      1 => 1465788750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6007575e295dcd7d04-41324409',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e295dd32937_29307727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e295dd32937_29307727')) {function content_575e295dd32937_29307727($_smarty_tpl) {?><?php if (isset($_SESSION['user'])) {?>
<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">MealMatcher</a>
        
        <ul class="right hide-on-med-and-down">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Meu Perfil
                    <i class="material-icons right">arrow_drop_down</i></a>
                <ul id="dropdown2" class="dropdown-content"
                    style="width: 142px; position: absolute; top: 0px; left: 533.813px; opacity: 1; display: none;">
                    <li><a href="/pessoa/perfil">Meu Perfil</a></li>
                    <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
                    <li><a href="/pessoa/minhas_sugestoes">Sugestões</a></li>
                </ul></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Matches
                    <i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown1" class="dropdown-content" style="width: 133px; position: absolute; top: 0px; left: 676.188px; opacity: 1; display: none;">
                    <li><a href="/matches/">Top Matches</a></li>
                    <li><a href="/pessoa/sugerir">Sugerir</a></li>
                    <li><a href="Combinations.php">Combinações</a></li>
                </ul></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/pessoa/perfil">Meu Perfil</a></li>
            <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/pessoa/sugerir">Sugerir Pratos/Bebidas</a></li>
            <li><a href="/pessoa/minhas_sugestoes">Minhas Sugestões</a></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
</nav>
<?php } else { ?>
<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">MealMatcher</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
            <li><a href="/index/login">Login</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
            <li><a href="/index/login">Login</a></li>
        </ul>


        <ul id="nav-mobile" class="side-nav">
            <li><a href="sobre.php">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
    </div>
</nav>
<?php }?><?php }} ?>
