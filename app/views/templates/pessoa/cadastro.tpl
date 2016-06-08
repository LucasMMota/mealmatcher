{$head}
<body style="background-color: #efebe9">

<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Cadastro</a>

    </div>
</nav>


<div class="container">
    <div class="section">
        <div class="row center">
            <div class="row">
                <form name="cadastro" id="cadastro" class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="pes_nome" id="nome" type="text" class="validate" required> <label
                                    for="nome">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="pes_sobrenome" id="sobrenome" type="text" class="validate" required> <label
                                    for="sobrenome">Sobrenome</label>
                        </div>
                    </div>

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

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="confirmarSenha" type="password" class="validate" required>
                            <label
                                    for="confirmarSenha">Confirmar Senha</label>
                        </div>
                    </div>

                    <form name="sexo">
                        <div class="row">

                            <div class="input-field col s5">
                                <input class="with-gap" name="pes_sexo" value="1" type="radio"
                                       id="test3" checked/> <label for="test3">Masculino</label>
                            </div>

                            <div class="input-field col s5">
                                <input class="with-gap" name="pes_sexo" value="2" type="radio"
                                       id="test2"/> <label for="test2">Feminino</label>
                            </div>

                    </form>
                    <br><br><br>
                    <button type="button" name="action"
                            class="btn waves-effect waves-light orange" onclick="valida()">Continuar
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<script type="text/javascript">
    function valida() {
        if ((cadastro.nome.value == "") || (cadastro.sobrenome.value == "") || (cadastro.senha.value == "") || (cadastro.confirmarSenha.value == "")) {
            Materialize.toast('Preencha todos os campos!', 4000, 'rounded');
        } else {
            if (cadastro.senha.value == cadastro.confirmarSenha.value) {
                $.ajax({
                    url: '/index/cadastrar_pessoa',
                    type: "POST",
                    dataType: "JSON",
                    data: $("#cadastro").serialize(),
                    success: function (dataReturn) {
                        if (dataReturn.type == 'success')
                            window.location.href = '/pessoa/perfil';
                        else
                            Materialize.toast('Houve um erro ao cadastrar, recarregue e tente novamente!', 4000, 'rounded');
                    }
                });
            } else {
                Materialize.toast('As senhas digitadas não coincidem', 4000, 'rounded');
            }
        }
    }
</script>

</body>
{$footer}