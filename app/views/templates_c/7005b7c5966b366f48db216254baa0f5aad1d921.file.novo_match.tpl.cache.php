<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:32:32
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\novo_match.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32244575e2950dcd9e6-97296614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7005b7c5966b366f48db216254baa0f5aad1d921' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\novo_match.tpl',
      1 => 1464899293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32244575e2950dcd9e6-97296614',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'head' => 0,
    'sidebar_logado' => 0,
    'pratos' => 0,
    'bebidas' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_575e2950ed2630_02586258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e2950ed2630_02586258')) {function content_575e2950ed2630_02586258($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\mealmatcher\\system\\libs\\smarty\\plugins\\function.html_options.php';
?>﻿<?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body>
<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>


<form id="match" name="match">
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="row center">

                    <h5 align="center">Compartilhe sua combinação com os outros
                        usuários</h5>
                    <br>

                    <div class="input-field col s12">
                        <select name="prato" id="prato" required>
                            <option value="" disabled selected>Escolha o prato</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['pratos']->value),$_smarty_tpl);?>

                            
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="bebida" id="bebida" required>
                            <option value="" disabled selected>Escolha a bebida</option>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['bebidas']->value),$_smarty_tpl);?>

                            
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <select name="nota" id="nota" required>
                            <option value="" disabled selected>Dê a nota</option>
                            <option value="1">Péssimo</option>
                            <option value="2">Ruim</option>
                            <option value="3">Regular</option>
                            <option value="4">Bom</option>
                            <option value="5">Ótimo</option>
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-editor-mode-edit prefix"></i>
                            <textarea id="comentario" name="comentario" class="materialize-textarea"
                                      length="140"></textarea>
                        <label for="comentario">Comentário</label>
                        
                    </div>

                    <button class="btn waves-effect waves-light" style="z-index: 0;"
                            type="button" name="action" onclick="valida()">
                        Enviar <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
