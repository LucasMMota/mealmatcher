<?php /* Smarty version Smarty-3.1.19, created on 2016-06-08 20:52:03
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\index_logado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113365758afa35c8049-00089992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2d07a9a29c93f1c4cc5567db715da25bca262c7' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\index_logado.tpl',
      1 => 1464895360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113365758afa35c8049-00089992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'pessoa' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5758afa35faac5_15964575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5758afa35faac5_15964575')) {function content_5758afa35faac5_15964575($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<div style="z-index: 0;" class="slider">
    <ul class="slides">
        <li><a href="Matches.php"> <img src="/files/img/lorem3.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Meus Matches</h3>
                    <h5 class="light grey-text text-lighten-3">Veja aqui suas ultimas
                        combinações.</h5>
                </div>
            </a></li>
        <li><a href="Suggest.php"> <img src="/files/img/lorem4.jpg"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Sugerir combinações</h3>
                    <h5 class="light grey-text text-lighten-3">Compartilhe suas
                        experiências (boas ou ruins).</h5>
                </div>
            </a></li>
        <li><a href="Combinations.php"> <img src="/files/img/lorem5.jpg"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Pesquisar</h3>
                    <h5 class="light grey-text text-lighten-3">Veja as sugestões da
                        comunidade</h5>
                </div>
            </a></li>
        <li><a href="Top Matches.php"> <img src="/files/img/lorem6.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Melhores escolhas</h3>
                    <h5 class="light grey-text text-lighten-3">Matches que todo mundo
                        gosta.</h5>
                </div>
            </a></li>
    </ul>
</div>

<br>

<ul class="collection mh-95">
    <li class="collection-item avatar mh-95">
        <img src="/files/img/profilepic.jpg" class="circle">
        <span class="title"><b><?php echo $_smarty_tpl->tpl_vars['pessoa']->value['nome'];?>
</b></span>

        <p>
            Avaliador<?php if ($_smarty_tpl->tpl_vars['pessoa']->value['sexo']==2) {?>a<?php }?> Sênior <br>
            Número de Avaliações: <?php echo $_smarty_tpl->tpl_vars['pessoa']->value['numAva'];?>
 <br>
            Número de Matches: <?php echo $_smarty_tpl->tpl_vars['pessoa']->value['numMatches'];?>
 <br>
        </p>
        
    </li>
</ul>

</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
