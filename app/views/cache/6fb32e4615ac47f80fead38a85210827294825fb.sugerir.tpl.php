<?php /*%%SmartyHeaderCode:5031575e220ad47b93-18525060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb32e4615ac47f80fead38a85210827294825fb' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\sugerir.tpl',
      1 => 1465783643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5031575e220ad47b93-18525060',
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e220ae8ff39_53168249',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e220ae8ff39_53168249')) {function content_575e220ae8ff39_53168249($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Sugestão</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background-color: #efebe9">

<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">MealMatcher</a>
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
            <li><a href="/pessoa/minhas_sugestoes">Minhas Sugestões</a></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
</nav>

<div class="row center">

	<h5 align="center">Compartilhe sua ideia com os outros
		usuários</h5>
	<br>

	<div class="input-field col s12">
		<input id="prato" type="text" class="validate">
		<label for="prato">Nome do prato</label>
	</div>

	<div class="input-field col s12">
		<input id="bebida" type="text" class="validate">
		<label for="bebida">Bebida</label>
	</div>

	<button class="btn waves-effect waves-light" style="z-index: 0;" type="submit" name="action" onclick="enviarSugestao()">
		Enviar <i class="mdi-content-send right"></i>
	</button>
</div>
</body>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/init.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/FacebookSDK.js"></script>
    <script type="text/javascript" src="/files/js/pessoa/sugerir.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</html><?php }} ?>
