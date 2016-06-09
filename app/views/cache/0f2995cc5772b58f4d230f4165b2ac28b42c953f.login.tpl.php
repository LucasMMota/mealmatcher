<?php /*%%SmartyHeaderCode:41115758af3576dda2-79273871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f2995cc5772b58f4d230f4165b2ac28b42c953f' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\login.tpl',
      1 => 1464893847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41115758af3576dda2-79273871',
  'variables' => 
  array (
    'head' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758af357b7bc0_54040874',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758af357b7bc0_54040874')) {function content_5758af357b7bc0_54040874($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>login</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
    
</head>

<body style="background-color: #efebe9">

<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Login</a>

    </div>
</nav>


<div class="container">
    <div class="section">
        <div class="row center">
            <div class="row">
                <form name="login" id="login" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pes_email" id="email" type="email" class="validate" required> <label
                                    for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pes_senha" id="senha" type="password" class="validate" required> <label
                                    for="senha">Senha</label>
                        </div>
                    </div>

                    <br><br><br>
                    <button type="button" name="action"
                            class="btn waves-effect waves-light orange" onclick="valida()">Entrar
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    function valida() {
        if ((login.senha.value == "") || (login.email.value == "")) {
            Materialize.toast('Preencha todos os campos!', 4000, 'rounded');
        } else {
            $.ajax({
                url: '/index/login',
                type: "POST",
                dataType: "JSON",
                data: $("#login").serialize(),
                success: function (dataReturn) {
                    if (dataReturn.type == 'success')
                        window.location.href = '/pessoa/perfil';
                    else
                        Materialize.toast('Usuário/senha inválidos!', 4000, 'rounded');
                }
            });
        }
    }
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
