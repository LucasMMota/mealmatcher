{$head}
<body style="background-color: #efebe9">
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
			<a id="logo-container" href="#" class="brand-logo">Meu Perfil</a>
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




	<div style="z-index: 0;" class="slider">
		<ul class="slides">
			<li><a href="Matches.php"> <img src="lorem3.jpg"> <!-- random image -->
					<div class="caption center-align">
						<h3>Meus Matches</h3>
						<h5 class="light grey-text text-lighten-3">Veja aqui suas ultimas
							combinações.</h5>
					</div>
			</a></li>
			<li><a href="Suggest.php"> <img src="lorem4.jpg"> <!-- random image -->
					<div class="caption left-align">
						<h3>Sugerir combinações</h3>
						<h5 class="light grey-text text-lighten-3">Compartilhe suas
							experiências (boas ou ruins).</h5>
					</div>
			</a></li>
			<li><a href="Combinations.php"> <img src="lorem5.jpg"> <!-- random image -->
					<div class="caption right-align">
						<h3>Pesquisar</h3>
						<h5 class="light grey-text text-lighten-3">Veja as sugestões da
							comunidade</h5>
					</div>
			</a></li>
			<li><a href="Top Matches.php"> <img src="lorem6.jpg"> <!-- random image -->
					<div class="caption center-align">
						<h3>Melhores escolhas</h3>
						<h5 class="light grey-text text-lighten-3">Matches que todo mundo
							gosta.</h5>
					</div>
			</a></li>
		</ul>
	</div>

	<br>

	<ul class="collection">
		<li class="collection-item avatar"><img src="profilepic.jpg" alt=""
			class="circle"> <span class="title"><b><?php echo $_SESSION['usu']['nome_usuario']. ' ' . $_SESSION['usu']['sobrenome_usuario'];?></b></span>
			<p>
				<?php if ($_SESSION['usu']['sexo_usuario']=='1') echo 'Avaliador'; else echo 'Avaliadora';?> Sênior <br>
				Quantidade de Avaliações: <?php echo count($_SESSION['sugs']);?>
			</p> <a href="#!" class="secondary-content"> <i
				class="small mdi-hardware-keyboard-alt"></i>
		</a></li>
	</ul>


	<!--  Scripts-->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/init.js"></script>
	<script> 
		$(document).ready(function(){    
			$('.slider').slider({full_width: true});
		});
  </script>


</body>
{$footer}