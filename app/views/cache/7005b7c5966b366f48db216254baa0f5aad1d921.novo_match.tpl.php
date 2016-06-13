<?php /*%%SmartyHeaderCode:32244575e2950dcd9e6-97296614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7005b7c5966b366f48db216254baa0f5aad1d921' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\novo_match.tpl',
      1 => 1464899293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32244575e2950dcd9e6-97296614',
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'pratos' => 0,
    'bebidas' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e29511c35a9_03327488',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e29511c35a9_03327488')) {function content_575e29511c35a9_03327488($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Novo Match!</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
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


<form id="match" name="match">
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="row center">

                    <h5 align="center">Compartilhe sua combinação com os outros
                        usuários</h5>
                    <br>

                    <div class="input-field col s12">
                        <select name="prato" id="prato" required>
                            <option value="" disabled selected>Escolha o prato</option>
                            <option value="1">Buchada</option>
<option value="2">prato 2</option>
<option value="3">prato 3</option>

                            
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="bebida" id="bebida" required>
                            <option value="" disabled selected>Escolha a bebida</option>
                            <option value="1">Coca</option>
<option value="2">Guaraná</option>

                            
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <select name="nota" id="nota" required>
                            <option value="" disabled selected>Dê a nota</option>
                            <option value="1">Péssimo</option>
                            <option value="2">Ruim</option>
                            <option value="3">Regular</option>
                            <option value="4">Bom</option>
                            <option value="5">Ótimo</option>
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-editor-mode-edit prefix"></i>
                            <textarea id="comentario" name="comentario" class="materialize-textarea"
                                      length="140"></textarea>
                        <label for="comentario">Comentário</label>
                        
                    </div>

                    <button class="btn waves-effect waves-light" style="z-index: 0;"
                            type="button" name="action" onclick="valida()">
                        Enviar <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/init.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/FacebookSDK.js"></script>
    <script type="text/javascript" src="/files/js/pessoa/novo_match.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</html><?php }} ?>
