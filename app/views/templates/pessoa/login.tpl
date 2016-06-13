{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}
{*<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">Login</a>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>


        <ul id="nav-mobile" class="side-nav">
            <li><a href="sobre.php">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
    </div>
</nav>*}


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
{$footer}