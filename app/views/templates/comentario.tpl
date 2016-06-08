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
        <a id="logo-container" href="#" class="brand-logo">Comentários</a>

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


<div class="input-field col s12" style="background-color: #FFFFFF;">
    <select>
        <option value="0">Mais recentes</option>
        <option value="1">Melhores comentários</option>
        <option value="2">Piores comentários</option>
        <option value="3">Útimo mês</option>
        <option value="4">Útimos 3 meses</option>
        <option value="5">Útimos 6 meses</option>
    </select>
</div>

<ul class="collection">

    <?php
    if (count($_SESSION['sugs'])) {
        foreach ($_SESSION['sugs'] as $sugestao) {
            #verifica se o comentario nao esta em branco
            if ($sugestao['comentario'] != '') {
                ?>
                <li class="collection-item avatar">
                    <img src="profilepic.jpg" alt="" class="circle">
					<span class="title">
						<b><?php echo $_SESSION['usu']['nome_usuario']. ' ' .$_SESSION['usu']['sobrenome_usuario']; ?></b></span>

                    <p>
                        <?php
							echo $sugestao['comentario'];
						?>
						<b class="direita">
						<?php 
							$dia = substr($sugestao['data'], 0, 10);
							echo $dia;
						?>
						</b>
                    </p>
                    <!--<a href="#!" class="secondary-content"> <i
                            style="color: #ff9800" class="mdi-action-grade"></i> <i
                            style="color: #ff9800" class="mdi-action-grade"></i> <i
                            style="color: #ff9800" class="mdi-action-grade"></i> <i
                            style="color: #ff9800" class="mdi-action-grade"></i> <i
                            style="color: #ff9800" class="mdi-action-grade"></i>
                    </a>-->
					<a href="#!" class="secondary-content">
						<?php
							$nota = (int)$sugestao['nota'];
							for ($cont=0; $cont< $nota; $cont++){
								echo '<i style="color: #ff9800" class="mdi-action-grade"></i>';
							}
						?>
					</a>
                </li>
            <?php
            }
        }
    }
    ?>

    <!-- zuera never ends-->
    <li class="collection-item avatar">
        <img src="japs.jpg" alt="" class="circle"> <span class="title"><b>Camila Azuma</b></span>

        <p>
            Achei essa uma espetacular combinação!<b class="direita">13/06/2015</b>
        </p>
        <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a>
    </li>


    <li class="collection-item avatar">
        <img src="sombra.jpg" alt=""
             class="circle"> <span class="title"><b>Gabriel Sombra</b></span>

        <p>
            Combinação excelente!<b class="direita">11/06/2015</b>
        </p> <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a>
    </li>

    <li class="collection-item avatar">
        <img src="gabi.jpg" alt=""
             class="circle"> <span class="title"><b>Gabriela Oliveira</b></span>

        <p>
            A combinação é boa.<b class="direita">11/04/2015</b>
        </p> <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a>
    </li>

    <li class="collection-item avatar">
        <img src="eo.jpg" alt=""
             class="circle"> <span class="title"><b>Henrique Specian</b></span>

        <p>
            Esperava mais da combinação.<b class="direita">10/04/2015</b>
        </p> <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i> <i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a></li>

    <li class="collection-item avatar">
        <img src="jonas.jpg" alt=""
             class="circle"> <span class="title"><b>Jonas Lima</b></span>

        <p>
            Péssimo. Meu prato estava gelado e estragou tudo! :(<b
                class="direita">07/04/2015</b>
        </p> <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a></li>

    <li class="collection-item avatar">
        <img src="lucas.jpg" alt=""
             class="circle"> <span class="title"><b>Lucas Fonseca</b></span>

        <p>
            Achei a refeição bem digna.<b
                class="direita">02/04/2015</b>
        </p> <a href="#!" class="secondary-content"> <i
                style="color: #ff9800" class="mdi-action-grade"></i><i
                style="color: #ff9800" class="mdi-action-grade"></i><i
                style="color: #ff9800" class="mdi-action-grade"></i>
        </a></li>
</ul>


<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider({full_width: true});
    });

    $(document).ready(function () {
        $('select').material_select();
    });
</script>


</body>
{$footer}