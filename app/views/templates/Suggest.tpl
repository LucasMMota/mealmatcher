<?php
session_start();
/*
if ($_SESSION['nome_usuario'] == '' && $_SESSION['sobrenome_usuario'] == '') {
    header("Location: index.php");
}

if ($_REQUEST && isset($prato) && $prato != '') {
    extract($_REQUEST);

    if ($prato != ' ' && $prato != '') $_SESSION['prato_sug'] = $prato;
    if ($bebida != ' ' && $bebida != '') $_SESSION['bebida_sug'] = $bebida;
    if ($nota != '') $_SESSION['nota_sug'] = $nota;
    $_SESSION['comentario_sug'] = $comentario;

    global $g_sugestao;
    $g_sugestao = array();

    $a_sugestao = array([$prato, $bebida, $comentario]);

    $g_sugestao = $g_sugestao + $a_sugestao;

//	var_dump($g_sugestao);
    #retorno para meus matches
    header("Location /Matches.php");
}*/

#se não logado é redirecionado
if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    header("Location: /index.php");
}
//echo var_dump(date('his'));
if ($_POST) {
    extract($_REQUEST);
    if (isset($prato) && $prato != "") {
        #cria a sugestao
        $chave = date('his');
        $_SESSION['sugs'][$chave]['prato'] = $prato;
        $_SESSION['sugs'][$chave]['bebida'] = $bebida;
//armazena nota
		$_SESSION['sugs'][$chave]['nota'] = $nota;
//fim armazena nota
        $_SESSION['sugs'][$chave]['comentario'] = $comentario;
        $_SESSION['sugs'][$chave]['data'] = date('d/m/Y H:i:s');

        #retorno para meus matches
        header("Location: Matches.php");
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="theme-color" content="#ef5350">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

    <title>Meal Matcher</title>

    <!-- Comentários até 82 caracteres cabem no card dos comentários -->

    <!-- CSS  -->

    <link href="css/materialize.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
	
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

		<ul id="dropdown1" class="dropdown-content">
	  <li><a href="Top Matches.php">Top Matches</a></li>
	  <li><a href="Suggest.php">Sugerir</a></li>
	  <li><a href="Combinations.php">Combinações</a></li>
	</ul>
	
	<ul id="dropdown2" class="dropdown-content">
	  <li><a href="Profile.php">Meu Perfil</a></li>
	  <li><a href="Matches.php">Meus Matches</a></li>
	</ul>

<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="Profile.php" class="brand-logo">Sugestão</a>

 		<ul class="right hide-on-med-and-down">
				
				<li><a class="dropdown-button" href="#!" data-activates="dropdown2">Meu Perfil<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Matches<i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="sair.php">Sair</a></li>
			</ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="Profile.php">Meu Perfil</a></li>
            <li><a href="Matches.php">Meus Matches</a></li>
            <li><a href="Top Matches.php">Top Matches</a></li>
            <li><a href="Suggest.php">Sugerir</a></li>
            <li><a href="Combinations.php">Combinações</a></li>
            <li><a href="sair.php">Sair</a></li>
            <li><a href="sobre.php">Sobre</a></li>
        </ul>


        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                class="mdi-navigation-menu"></i></a>
    </div>
</nav>

<form id="suggest" name="suggest" action="Suggest.php" method="post">
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="row center">

                    <h5 align="center">Compartilhe sua combinação com os outros
                        usuários</h5>
                    <br>

                    <div class="input-field col s12">
                        <select name="prato" required>
                            <option value="" disabled selected>Escolha o prato</option>
                            <option value="Batata Frita">Batata frita</option>
                            <option value="Escondidinho">Escondidinho</option>
                            <option value="Feijoada">Feijoada</option>
                            <option value="Fondue">Fondue</option>
                            <option value="Moqueca Capixaba">Moqueca Capixaba</option>
                            <option value="Ratatouille">Ratatouille</option>
                            <option value="Torta de Limão">Torta de Limão</option>
                            <option value="Virado a Paulista">Virado a Paulista</option>
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="bebida" required>
                            <option value="" disabled selected>Escolha a bebida</option>
                            <option value="Cerveja">Cerveja</option>
                            <option value="Coca Cola">Coca cola</option>
                            <option value="Martini">Martini</option>
                            <option value="Pisco">Pisco</option>
                            <option value="Suco de Fruta">Suco de fruta</option>
                            <option value="Vinho Branco">Vinho branco</option>
                            <option value="Vinho Tinto">Vinho tinto</option>
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <select name="nota" required>
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
                            <textarea id="comentario" class="materialize-textarea"
                                      length="140"></textarea>
                        <label for="comentario">Comentário</label>
                        <input type="hidden"  name="comentario" id="comentario_daGambi">
                    </div>

                    <button class="btn waves-effect waves-light" style="z-index: 0;"
                            type="submit" name="action" onclick="valida()">
                        Enviar <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>

<script type="text/javascript">


    $(document).ready(function () {
        $('select').material_select();

        $("#comentario").focusout(function(){
            $("#comentario_daGambi").val($("#comentario").val());
        });
    });

    function sleep(milliseconds) {
        var start = new Date().getTime();
        for (var i = 0; i < 1e7; i++) {
            if ((new Date().getTime() - start) > milliseconds) {
                break;
            }
        }
    }

    function valida() {


            Materialize.toast('Comentário enviado com sucesso', 4000, 'rounded', function () {
                location.reload();
            });
    }
</script>

</body>
</html>