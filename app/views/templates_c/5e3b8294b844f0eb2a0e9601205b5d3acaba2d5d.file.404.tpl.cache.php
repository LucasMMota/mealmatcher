<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:32:46
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19533575e295e392539-41700588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e3b8294b844f0eb2a0e9601205b5d3acaba2d5d' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\404.tpl',
      1 => 1465786192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19533575e295e392539-41700588',
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
  'unifunc' => 'content_575e295e3ef196_25913956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e295e3ef196_25913956')) {function content_575e295e3ef196_25913956($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body>
<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>

    <!-- Busca de Imoveis do Portfolio -->
    <div class="wrapper-lg">
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
    </div>
    <!-- /busca imoveis portfolio -->

</body>
    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>



<?php }} ?>
