<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:01:30
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\sugerir.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5031575e220ad47b93-18525060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fb32e4615ac47f80fead38a85210827294825fb' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\sugerir.tpl',
      1 => 1465783643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5031575e220ad47b93-18525060',
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
  'unifunc' => 'content_575e220ad871a9_16855936',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e220ad871a9_16855936')) {function content_575e220ad871a9_16855936($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<div class="row center">

	<h5 align="center">Compartilhe sua ideia com os outros
		usuários</h5>
	<br>

	<div class="input-field col s12">
		<input id="prato" type="text" class="validate">
		<label for="prato">Nome do prato</label>
	</div>

	<div class="input-field col s12">
		<input id="bebida" type="text" class="validate">
		<label for="bebida">Bebida</label>
	</div>

	<button class="btn waves-effect waves-light" style="z-index: 0;" type="submit" name="action" onclick="enviarSugestao()">
		Enviar <i class="mdi-content-send right"></i>
	</button>
</div>
</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
