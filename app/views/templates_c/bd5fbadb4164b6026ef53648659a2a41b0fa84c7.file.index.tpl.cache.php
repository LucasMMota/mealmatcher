<?php /* Smarty version Smarty-3.1.19, created on 2016-05-18 21:00:09
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25354573d02095eec38-00563882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5fbadb4164b6026ef53648659a2a41b0fa84c7' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\index.tpl',
      1 => 1463616003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25354573d02095eec38-00563882',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_573d02096712a4_83988276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573d02096712a4_83988276')) {function content_573d02096712a4_83988276($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body background="back.jpg">

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
                <br> <a href="Cadastre.php" id="login-button"
                        class="btn-large waves-effect waves-light orange">Cadastrar</a> <br>
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
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
