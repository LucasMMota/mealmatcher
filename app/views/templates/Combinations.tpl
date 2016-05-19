<?php 
	session_start();

#se não logado é redirecionado
if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    header("Location: /index.php");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="theme-color" content="#ef5350">
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />

<title>Meal Matcher</title>

<!-- CSS  -->

<link href="css/materialize.css" type="text/css" rel="stylesheet"
	media="screen,projection" />
<link href="css/style.css" type="text/css" rel="stylesheet"
	media="screen,projection" />
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
			<a id="logo-container" href="Profile.php" class="brand-logo">Combinações</a>

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
				<li><a href="index.php">Sair</a></li>
				<li><a href="sair.php">Sobre</a></li>
			</ul>


			<a href="#" data-activates="nav-mobile" class="button-collapse"><i
				class="mdi-navigation-menu"></i></a>
		</div>
	</nav>

	<form name="combination">
		<div class="container">
			<div class="section">

				<div class="row">
					<div class="row center">
						<h5 align="center">Veja aqui as melhores combinações</h5>
						<br></br>
						<div class="input-field col s12">
							<select name="prato">
								<option value="">Escolha o prato</option>
								<option value="1">Batata frita</option>
								<option value="2">Escondidinho</option>
								<option value="3">Feijoada</option>
								<option value="4">Fondue</option>
								<option value="5">Moqueca capixaba</option>
								<option value="6">Ratatouille</option>
								<option value="7">Torta de limão</option>
								<option value="8">Virado a Paulista</option>
							</select>
						</div>

						<div class="input-field col s12">
							<select name="bebida">
								<option value="">Escolha a bebida</option>
								<option value="1">Cerveja</option>
								<option value="2">Coca cola</option>
								<option value="3">Martini</option>
								<option value="4">Pisco</option>
								<option value="5">Suco de fruta</option>
								<option value="6">Vinho branco</option>
								<option value="7">Vinho tinto</option>
							</select> <br></br> <br></br> <br></br>

						</div>
						<div>
							<button class="btn waves-effect waves-light" style="z-index: 0;"
								type="reset" onclick="valida()">Match</button>
						</div>
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
	$(document).ready(function() {
		$('select').material_select();
	});
	
	function valida(){
		
		if ((combination.bebida.value == "")&&(combination.prato.value == "")){
			Materialize.toast('Selecione pelo menos um item', 4000, 'rounded');
		}
		else
		{
			document.location ="comentario.php";
		}
	}
    </script>

</body>
</html>