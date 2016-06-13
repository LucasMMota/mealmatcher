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
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e295de97ee2_74761453',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e295de97ee2_74761453')) {function content_575e295de97ee2_74761453($_smarty_tpl) {?><nav class="#ef5350 red lighten-1" role="navigation">
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
<?php }} ?>
