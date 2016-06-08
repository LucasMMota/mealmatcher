{$head}
<body>
{$sidebar_logado}

<form id="match" name="match">
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="row center">

                    <h5 align="center">Compartilhe sua combinação com os outros
                        usuários</h5>
                    <br>

                    <div class="input-field col s12">
                        <select name="prato" id="prato" required>
                            <option value="" disabled selected>Escolha o prato</option>
                            {html_options options=$pratos}
                            {*
                            <option value="Batata Frita">Batata frita</option>
                            <option value="Escondidinho">Escondidinho</option>
                            <option value="Feijoada">Feijoada</option>
                            <option value="Fondue">Fondue</option>
                            <option value="Moqueca Capixaba">Moqueca Capixaba</option>
                            <option value="Ratatouille">Ratatouille</option>
                            <option value="Torta de Limão">Torta de Limão</option>
                            <option value="Virado a Paulista">Virado a Paulista</option>*}
                        </select>
                    </div>

                    <div class="input-field col s12">
                        <select name="bebida" id="bebida" required>
                            <option value="" disabled selected>Escolha a bebida</option>
                            {html_options options=$bebidas}
                            {* <option value="Cerveja">Cerveja</option>
                            <option value="Coca Cola">Coca cola</option>
                            <option value="Martini">Martini</option>
                            <option value="Pisco">Pisco</option>
                            <option value="Suco de Fruta">Suco de fruta</option>
                            <option value="Vinho Branco">Vinho branco</option>
                            <option value="Vinho Tinto">Vinho tinto</option>*}
                        </select>

                    </div>

                    <div class="input-field col s12">
                        <select name="nota" id="nota" required>
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
                            <textarea id="comentario" name="comentario" class="materialize-textarea"
                                      length="140"></textarea>
                        <label for="comentario">Comentário</label>
                        {* <input type="hidden" name="comentario" id="comentario_daGambi">*}
                    </div>

                    <button class="btn waves-effect waves-light" style="z-index: 0;"
                            type="button" name="action" onclick="valida()">
                        Enviar <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
{$footer}