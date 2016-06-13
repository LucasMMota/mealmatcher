<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:12:39
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\sobre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6078575e24a7478115-35179659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '489d3abd230a002d90d68da7cefea22ba342bb1f' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\sobre.tpl',
      1 => 1465787557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6078575e24a7478115-35179659',
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
  'unifunc' => 'content_575e24a74f0447_77049789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e24a74f0447_77049789')) {function content_575e24a74f0447_77049789($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<br>
<h5 align="center">Sobre</h5>
<br>

<div style="z-index: 0;" class="slider">
    <h1>Aguardando Texto</h1>

    <h2>Enquanto isso coloco aqui um video para ocupar o lugar</h2>
    <iframe width="420" height="315" src="https://www.youtube.com/embed/2lkVuDj715U" frameborder="0"
            allowfullscreen></iframe>
</div>
</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
