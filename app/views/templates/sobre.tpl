<!DOCTYPE html>
<html lang="en">
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
<body style="background-image: url('back-about.jpg');background-repeat: no-repeat;">
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
			<a id="logo-container" href="#" class="brand-logo">Sobre</a>
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
    
		<div class="row">
		<div class="center">
			<div class="col s12 m12">
				<div  class="card white">
				    
						<div class="center-align" class="icon-block">
							<h2 class="center light-blue-text"><i class="medium material-icons">info</i></h2>
							<h5 class="center">Meal Matcher</h5>
							<p class="light">Versão do app </br>0.4</p>
						</div>
					
				</div>
			  </div>
			</div>
			</div>
		  </div>
	        
	
	<!--  Scripts-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
	<script> 
		$(".dropdown-button").dropdown();
    </script>

</body>
</html>
