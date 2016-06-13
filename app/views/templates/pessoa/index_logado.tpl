{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<div style="z-index: 0;" class="slider">
    <ul class="slides">
        <li><a href="/pessoa/meus_matches"> <img src="/files/img/lorem3.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Meus Matches</h3>
                    <h5 class="light grey-text text-lighten-3">Clique aqui e Veja aqui suas ultimas
                        combinações.</h5>
                </div>
            </a></li>
        <li><a href="/pessoa/sugerir"> <img src="/files/img/lorem4.jpg"> <!-- random image -->
                <div class="caption left-align">
                    <h3>Sugerir combinações</h3>
                    <h5 class="light grey-text text-lighten-3">Compartilhe suas
                        experiências (boas ou ruins).</h5>
                </div>
            </a></li>
        <li><a href="/matches"> <img src="/files/img/lorem5.jpg"> <!-- random image -->
                <div class="caption right-align">
                    <h3>Pesquisar</h3>
                    <h5 class="light grey-text text-lighten-3">Veja as sugestões da
                        comunidade</h5>
                </div>
            </a></li>
        <li><a href="/matches"> <img src="/files/img/lorem6.jpg"> <!-- random image -->
                <div class="caption center-align">
                    <h3>Melhores escolhas</h3>
                    <h5 class="light grey-text text-lighten-3">Matches que todo mundo
                        gosta.</h5>
                </div>
            </a></li>
    </ul>
</div>

<br>

<ul class="collection mh-95">
    <li class="collection-item avatar mh-95">
        <img src="/files/img/profilepic.jpg" class="circle">
        <span class="title"><b>{$pessoa['nome']}</b></span>

        <p>
            Avaliador{if $pessoa['sexo']==2}a{/if} Sênior <br>
            Número de Avaliações: {$pessoa['numAva']} <br>
            Número de Matches: {$pessoa['numMatches']} <br>
        </p>
        {*<a href="#!" class="secondary-content"> <i
                    class="small mdi-hardware-keyboard-alt"></i>
        </a>*}
    </li>
</ul>

</body>
{$footer}