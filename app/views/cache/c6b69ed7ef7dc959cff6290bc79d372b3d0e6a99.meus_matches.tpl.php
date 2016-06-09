<?php /*%%SmartyHeaderCode:69355758ae804b0b28-18331103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6b69ed7ef7dc959cff6290bc79d372b3d0e6a99' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\meus_matches.tpl',
      1 => 1465353226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69355758ae804b0b28-18331103',
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'matches' => 0,
    'match' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758ae807fe4f5_90476374',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ae807fe4f5_90476374')) {function content_5758ae807fe4f5_90476374($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Meus Matches</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
    
</head>

<body style="background-color: #efebe9">

<nav class="#ef5350 red lighten-1" role="navigation">
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
</nav>

<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
            <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">iiiiiii</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">ggggggg</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">ffffff</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>prato 2 & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">prato 2 & Coca</p>
                <p class="comment-comm">eeeeee</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>prato 2 & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">prato 2 & Coca</p>
                <p class="comment-comm">ddddddd</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>prato 2 & Guaraná</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">prato 2 & Guaraná</p>
                <p class="comment-comm">cccccccc</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">bbbbbbb</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">aaaaa</p>
            </div>
        </li>
                <li>
            <div class="collapsible-header">
                <b>Buchada & Coca</b>

                <div class="right">
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                            <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                                    </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">Buchada & Coca</p>
                <p class="comment-comm">nenhum comentário adicionado</p>
            </div>
        </li>
        </ul>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

</body>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/init.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/FacebookSDK.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</html><?php }} ?>
