<?php /* Smarty version Smarty-3.1.19, created on 2016-06-08 20:47:12
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\meus_matches.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5758ae807a1018_85080419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758ae807a1018_85080419')) {function content_5758ae807a1018_85080419($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\mealmatcher\\system\\libs\\smarty\\plugins\\modifier.truncate.php';
?>﻿<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
    <?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->_loop = true;
?>
        <li>
            <div class="collapsible-header">
                <b><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['match']->value['pra_nome'],7,"...",true);?>
 & <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['match']->value['beb_nome'],7,"...",true);?>
</b>

                <div class="right">
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['match']->value['com_nota']+1 - (1) : 1-($_smarty_tpl->tpl_vars['match']->value['com_nota'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                    <?php }} ?>
                </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det"><?php echo $_smarty_tpl->tpl_vars['match']->value['pra_nome'];?>
 & <?php echo $_smarty_tpl->tpl_vars['match']->value['beb_nome'];?>
</p>
                <p class="comment-comm"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['match']->value['com_descricao'])===null||$tmp==='' ? "nenhum comentário adicionado" : $tmp);?>
</p>
            </div>
        </li>
        <?php }
if (!$_smarty_tpl->tpl_vars['match']->_loop) {
?>
        <li>
            <div class="collapsible-header">
                <b>Você ainda não fez nenhuma combinação.</b>
            </div>
        </li>
    <?php } ?>
</ul>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
