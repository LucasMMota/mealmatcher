<?php
session_start();
//sombra e henrique veadoes
#se não logado é redirecionado
if (!isset($_SESSION['logado']) || !$_SESSION['logado']) {
    header("Location: index.php");
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

    <!-- CSS  -->

    <link href="css/materialize.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
	
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
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
        <a id="logo-container" href="Profile.php" class="brand-logo">MeusMatches</a>

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
<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
    <?php
    //echo var_dump($_SESSION['sugs']);
    if (count($_SESSION['sugs'])) {
        foreach ($_SESSION['sugs'] as $sugestao) {
            ?>
            <li>
                <div class="collapsible-header">
                    <b><?php echo $sugestao['prato'] . ' & ' . $sugestao['bebida']; ?> </b>

                    <div class="right">
					<!--
                        <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
						<i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
						<i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
						<i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
						-->
						<?php
							$nota = (int)$sugestao['nota'];
							for ($cont=0; $cont< $nota; $cont++){
								echo '<i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>';

							}
						?>
                    </div>
                </div>
                <div class="collapsible-body" style="background-color: #FFF">
                    <p><?php echo $sugestao['comentario']; ?></p>
                </div>
            </li>
        <?php
        }
    } else {
        #sem matches ainda
        ?>
        <li>
            <div class="collapsible-header">
                <b>Você ainda não fez nenhuma combinação.</b>
            </div>
        </li>
    <?php
    }
    ?>
</ul>

<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

</body>
</html>