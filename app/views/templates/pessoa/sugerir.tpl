{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<div class="row center">

	<h5 align="center">Compartilhe sua ideia com os outros
		usuários</h5>
	<br>

	<div class="input-field col s12">
		<input id="prato" type="text" class="validate">
		<label for="prato">Nome do prato</label>
	</div>

	<div class="input-field col s12">
		<input id="bebida" type="text" class="validate">
		<label for="bebida">Bebida</label>
	</div>

	<button class="btn waves-effect waves-light" style="z-index: 0;" type="submit" name="action" onclick="enviarSugestao()">
		Enviar <i class="mdi-content-send right"></i>
	</button>
</div>
</body>
{$footer}