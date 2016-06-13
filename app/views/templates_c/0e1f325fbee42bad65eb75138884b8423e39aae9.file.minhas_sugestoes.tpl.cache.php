<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:16:01
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\minhas_sugestoes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29101575e2571b4ad99-94693404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1f325fbee42bad65eb75138884b8423e39aae9' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\minhas_sugestoes.tpl',
      1 => 1465787226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29101575e2571b4ad99-94693404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'sugestoes' => 0,
    'sugest' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e2571c27c28_04544760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e2571c27c28_04544760')) {function content_575e2571c27c28_04544760($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wamp\\www\\mealmatcher\\system\\libs\\smarty\\plugins\\modifier.date_format.php';
?>﻿<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
    <?php  $_smarty_tpl->tpl_vars['sugest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sugest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sugestoes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sugest']->key => $_smarty_tpl->tpl_vars['sugest']->value) {
$_smarty_tpl->tpl_vars['sugest']->_loop = true;
?>
        <li>
            <div class="collapsible-header">
                <b><?php echo $_smarty_tpl->tpl_vars['sugest']->value['sug'];?>

                    <div class="right">
                        em <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sugest']->value['data'],"%d/%m/%Y às %H:%M");?>
</b>
            </div>
            </div>
        </li>
        <?php }
if (!$_smarty_tpl->tpl_vars['sugest']->_loop) {
?>
        <li>
            <div class="collapsible-header">
                <b>Você ainda não fez nenhuma sugestão.</b>
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
