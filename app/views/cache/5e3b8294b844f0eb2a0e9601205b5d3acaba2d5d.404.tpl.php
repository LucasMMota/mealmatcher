<?php /*%%SmartyHeaderCode:31592573d020d3c69e5-67611667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3b8294b844f0eb2a0e9601205b5d3acaba2d5d' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\404.tpl',
      1 => 1414902914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31592573d020d3c69e5-67611667',
  'variables' => 
  array (
    'head' => 0,
    'navegacao' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_573d020d4d1fd8_33756033',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_573d020d4d1fd8_33756033')) {function content_573d020d4d1fd8_33756033($_smarty_tpl) {?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Opps! Página não encontrada</title>

    <!-- CSS  -->
            <link href="http://mealmatcher.localhost/files/css/materialize.min.css" rel="stylesheet" type="text/css"/>
            <link href="http://mealmatcher.localhost/files/css/style.css" rel="stylesheet" type="text/css"/>
    
</head>

<body onload="initialize()">
    <div class="nav-collapse">
    <ul class="nav pull-right">
        <li class="active"><a href="/">Início</a></li>
        <li><a href="/servicos">Serviços</a></li>
        <li><a href="/fotos">Fotos</a></li>
        <li><a href="/sobre">Sobre</a></li>
        <li><a href="/contato">Contato</a></li>
    </ul>
</div>

    <!-- Busca de Imoveis do Portfolio -->
    <section class="wrapper-lg">
        <div class="container">
            <div class="row">
                <div class="error-page">
                        <h2 class="headline text-info"> 404</h2>
                        <div class="error-content">
                            <h3><i class="fa fa-warning text-yellow"></i> Oops! Página não encontrada.</h3>
                            <p>
                                Não encontramos a página requisitada.
                                Clique <a href='javascript: window.history.go(-1);'>aqui</a> para voltar para a página anterior.
                            </p>
                        </div><!-- /.error-content -->
                    </div><!-- /.error-page -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- /busca imoveis portfolio -->

        <script type="text/javascript" src="http://mealmatcher.localhost/files/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/materialize.min.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/init.js"></script>
    <script type="text/javascript" src="http://mealmatcher.localhost/files/js/FacebookSDK.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</html>
</body>


<?php }} ?>
