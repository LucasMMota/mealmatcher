<?php /*%%SmartyHeaderCode:73755758afa3294c97-93978613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5fbadb4164b6026ef53648659a2a41b0fa84c7' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\index.tpl',
      1 => 1464892391,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73755758afa3294c97-93978613',
  'variables' => 
  array (
    'head' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758afa32db780_36475910',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758afa32db780_36475910')) {function content_5758afa32db780_36475910($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Início</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
    
</head>

<body background="/files/img/back.jpg">
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '598195416989183',
            xfbml: true,
            version: 'v2.3'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/pt_BR/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">MealMatcher</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Sobre</a></li>
        </ul>


        <ul id="nav-mobile" class="side-nav">
            <li><a href="sobre.php">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
    </div>
</nav>


<div class="container">
    <div class="section">
        <div class="row">
            <div class="row center">
                <br>
                <br> <br>
                <br> <br>
                <br> <br>
                <br> <a href="/index/cadastro" id="login-button"
                        class="btn-large waves-effect waves-light orange">Cadastrar</a> <br>
                <br> <a href="/index/login" id="login-button"
                        class="btn-large waves-effect waves-light orange">Login</a> <br>
                <br> <br>
                <br>

                <div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="false"></div>
                <!--<a href="#" id="facebook-button" class="btn-large waves-effect waves-light blue">Entrar com Facebook</a>-->
                <!--<div class="fb-like" data-share="true" data-width="450" data-show-faces="true">
            </div>-->

            </div>
        </div>
    </div>
</div>
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
