<?php /* Smarty version Smarty-3.1.19, created on 2016-06-08 21:57:45
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284625758bf09797bf6-79748380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '284625758bf09797bf6-79748380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'navegacao' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758bf097a6e21_27810164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758bf097a6e21_27810164')) {function content_5758bf097a6e21_27810164($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body onload="initialize()">
    <?php echo $_smarty_tpl->tpl_vars['navegacao']->value;?>


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

    <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</body>


<?php }} ?>
