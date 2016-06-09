<?php /* Smarty version Smarty-3.1.19, created on 2016-06-08 21:54:59
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\top_matches.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7925758be63534e62-23839628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4462c7bc9c47e13d455215e3840bb0978aea466' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\top_matches.tpl',
      1 => 1465433691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7925758be63534e62-23839628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'matches' => 0,
    'match' => 0,
    'logado' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758be635bf5e1_73758673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758be635bf5e1_73758673')) {function content_5758be635bf5e1_73758673($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\mealmatcher\\system\\libs\\smarty\\plugins\\modifier.truncate.php';
?>﻿<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<br>
<h5 align="center">Toque nos cards para ver os comentários</h5>
<br>

<ul class="collapsible popout collection collection-custom" data-collapsible="accordion">
    <?php  $_smarty_tpl->tpl_vars['match'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['match']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['matches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['match']->key => $_smarty_tpl->tpl_vars['match']->value) {
$_smarty_tpl->tpl_vars['match']->_loop = true;
?>
        <li style="background-color: #FFF" class="avatar">
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
                    <?php if ($_smarty_tpl->tpl_vars['logado']->value) {?>
                        <span onclick="joia(<?php echo $_smarty_tpl->tpl_vars['match']->value['com_id'];?>
)">Joia</span>
                    <?php }?>
                </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det"><?php echo $_smarty_tpl->tpl_vars['match']->value['pra_nome'];?>
 & <?php echo $_smarty_tpl->tpl_vars['match']->value['beb_nome'];?>
</p>

                <p class="comment-comm"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['match']->value['com_descricao'])===null||$tmp==='' ? '' : $tmp);?>
<span> - Por: <?php echo $_smarty_tpl->tpl_vars['match']->value['pes_nome'];?>

                        em <?php echo $_smarty_tpl->tpl_vars['match']->value['data'];?>
</span></p>
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

</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
