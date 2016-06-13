<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:32:42
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16401575e295a099908-26538856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd5fbadb4164b6026ef53648659a2a41b0fa84c7' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\index.tpl',
      1 => 1465788282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16401575e295a099908-26538856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e295a109c10_91941574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e295a109c10_91941574')) {function content_575e295a109c10_91941574($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

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

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>




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
