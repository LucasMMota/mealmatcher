<?php
session_start();
//pau no cu do henrique

#gravar
if ($_POST) {
    extract($_REQUEST);

    $_SESSION['usu']['nome_usuario'] = $nome;
    $_SESSION['usu']['sobrenome_usuario'] = $sobrenome;
    $_SESSION['usu']['email_usuario'] = $email;
    $_SESSION['usu']['sexo_usuario'] = $sexo;

    $_SESSION['logado'] = true;
    #senao existir pode dar erro no Matches.php
    $_SESSION['sugs'] = array();

    header("Location: Profile.php");

}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Cadastro</title>

    <!-- CSS  -->

    <link href="css/materialize.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
</head>
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
                <form name="cadastro" class="col s12" action="Cadastre.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input name="nome" id="nome" type="text" class="validate" required> <label
                                for="nome">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input name="sobrenome" id="sobrenome" type="text" class="validate" required> <label
                                for="sobrenome">Sobrenome</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email" class="validate" required> <label
                                for="email">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="senha" id="senha" type="password" class="validate" required> <label
                                for="senha">Senha</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="confirmarsenha" id="confirmarSenha" type="password" class="validate" required>
                            <label
                                for="confirmarSenha">Confirmar Senha</label>
                        </div>
                    </div>

                    <form name="sexo">
                        <div class="row">

                            <div class="input-field col s5">
                                <input class="with-gap" name="sexo" value="1" type="radio"
                                       id="test3" checked/> <label for="test3">Masculino</label>
                            </div>

                            <div class="input-field col s5">
                                <input class="with-gap" name="sexo" value="2" type="radio"
                                       id="test2"/> <label for="test2">Feminino</label>
                            </div>

                    </form>
                    <br><br><br>
                    <button type="submit" name="action"
                            class="btn waves-effect waves-light orange" onclick="valida()">Continuar
                    </button>
                </form>
            </div>

        </div>

    </div>
</div>

<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script type="text/javascript">


    /*  function valida(){
     if ((cadastro.nome.value == "")||(cadastro.sobrenome.value == "")||(cadastro.senha.value == "")||(cadastro.confirmarSenha.value == ""))
     {
     Materialize.toast('Preencha todos os campos!', 4000, 'rounded');
     }
     else
     {
     if (cadastro.senha.value == cadastro.confirmarSenha.value){
     document.location = "Profile.php";
     }else{
     Materialize.toast('As senhas digitadas não coincidem', 4000, 'rounded');
     }
     }
     }
     */
</script>

</body>
</html>