<?php /*%%SmartyHeaderCode:3931575e292f580009-77774179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d07a9a29c93f1c4cc5567db715da25bca262c7' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\index_logado.tpl',
      1 => 1465786543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3931575e292f580009-77774179',
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'pessoa' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e292f937099_73510465',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e292f937099_73510465')) {function content_575e292f937099_73510465($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Meu Perfil</title>

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
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Meu Perfil
                    <i class="material-icons right">arrow_drop_down</i></a>
                <ul id="dropdown2" class="dropdown-content"
                    style="width: 142px; position: absolute; top: 0px; left: 533.813px; opacity: 1; display: none;">
                    <li><a href="/pessoa/perfil">Meu Perfil</a></li>
                    <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
                    <li><a href="/pessoa/minhas_sugestoes">Minhas Sugestões</a></li>
                </ul></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Matches
                    <i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown1" class="dropdown-content" style="width: 133px; position: absolute; top: 0px; left: 676.188px; opacity: 1; display: none;">
                    <li><a href="/matches/">Top Matches</a></li>
                    <li><a href="/pessoa/sugerir">Sugerir Pratos/Bebidas</a></li>
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


<div style="z-index: 0;" class="slider">
    <ul class="slides">
        <li><a href="/pessoa/meus_matches"> <img src="/files/img/lorem3.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Meus Matches</h3>
                    <h5 class="light grey-text text-lighten-3">Clique aqui e Veja aqui suas ultimas
                        combinações.</h5>
                </div>
            </a></li>
        <li><a href="/pessoa/sugerir"> <img src="/files/img/lorem4.jpg"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Sugerir combinações</h3>
                    <h5 class="light grey-text text-lighten-3">Compartilhe suas
                        experiências (boas ou ruins).</h5>
                </div>
            </a></li>
        <li><a href="/matches"> <img src="/files/img/lorem5.jpg"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Pesquisar</h3>
                    <h5 class="light grey-text text-lighten-3">Veja as sugestões da
                        comunidade</h5>
                </div>
            </a></li>
        <li><a href="/matches"> <img src="/files/img/lorem6.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Melhores escolhas</h3>
                    <h5 class="light grey-text text-lighten-3">Matches que todo mundo
                        gosta.</h5>
                </div>
            </a></li>
    </ul>
</div>

<br>

<ul class="collection mh-95">
    <li class="collection-item avatar mh-95">
        <img src="/files/img/profilepic.jpg" class="circle">
        <span class="title"><b>Lucas 2</b></span>

        <p>
            Avaliador Sênior <br>
            Número de Avaliações: 6 <br>
            Número de Matches: 9 <br>
        </p>
        
    </li>
</ul>

</body>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/init.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/FacebookSDK.js"></script>
    <script type="text/javascript" src="/files/js/pessoa/perfil.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</html><?php }} ?>
