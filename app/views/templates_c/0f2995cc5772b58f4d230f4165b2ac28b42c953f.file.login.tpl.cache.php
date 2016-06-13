<?php /* Smarty version Smarty-3.1.19, created on 2016-06-13 00:27:53
         compiled from "C:\wamp\www\mealmatcher\app\views\templates\pessoa\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9620575e283977a752-86020812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f2995cc5772b58f4d230f4165b2ac28b42c953f' => 
    array (
      0 => 'C:\\wamp\\www\\mealmatcher\\app\\views\\templates\\pessoa\\login.tpl',
      1 => 1465788089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9620575e283977a752-86020812',
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
  'unifunc' => 'content_575e28398208d6_41840625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_575e28398208d6_41840625')) {function content_575e28398208d6_41840625($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['head']->value;?>

<body style="background-color: #efebe9">

<?php echo $_smarty_tpl->tpl_vars['sidebar_logado']->value;?>




<div class="container">
    <div class="section">
        <div class="row center">
            <div class="row">
                <form name="login" id="login" class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pes_email" id="email" type="email" class="validate" required> <label
                                    for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="pes_senha" id="senha" type="password" class="validate" required> <label
                                    for="senha">Senha</label>
                        </div>
                    </div>

                    <br><br><br>
                    <button type="button" name="action"
                            class="btn waves-effect waves-light orange" onclick="valida()">Entrar
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    function valida() {
        if ((login.senha.value == "") || (login.email.value == "")) {
            Materialize.toast('Preencha todos os campos!', 4000, 'rounded');
        } else {
            $.ajax({
                url: '/index/login',
                type: "POST",
                dataType: "JSON",
                data: $("#login").serialize(),
                success: function (dataReturn) {
                    if (dataReturn.type == 'success')
                        window.location.href = '/pessoa/perfil';
                    else
                        Materialize.toast('Usuário/senha inválidos!', 4000, 'rounded');
                }
            });
        }
    }
</script>

</body>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
<?php }} ?>
