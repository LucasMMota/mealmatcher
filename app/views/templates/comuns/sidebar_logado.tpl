{if isset($smarty.session.user)}
<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">MealMatcher</a>
        {*<ul class="right hide-on-med-and-down">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/pessoa/perfil">Meu Perfil</a></li>
            <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/pessoa/sugerir">Sugerir Pratos/Bebidas</a></li>
            <li><a href="/pessoa/minhas_sugestoes">Minhas Sugestões</a></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>*}
        <ul class="right hide-on-med-and-down">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Meu Perfil
                    <i class="material-icons right">arrow_drop_down</i></a>
                <ul id="dropdown2" class="dropdown-content"
                    style="width: 142px; position: absolute; top: 0px; left: 533.813px; opacity: 1; display: none;">
                    <li><a href="/pessoa/perfil">Meu Perfil</a></li>
                    <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
                    <li><a href="/pessoa/minhas_sugestoes">Sugestões</a></li>
                </ul></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Matches
                    <i class="material-icons right">arrow_drop_down</i></a><ul id="dropdown1" class="dropdown-content" style="width: 133px; position: absolute; top: 0px; left: 676.188px; opacity: 1; display: none;">
                    <li><a href="/matches/">Top Matches</a></li>
                    <li><a href="/pessoa/sugerir">Sugerir</a></li>
                    <li><a href="Combinations.php">Combinações</a></li>
                </ul></li>
            <li><a href="/index/sobre">Sobre</a></li>
            <li><a href="/index/logout">Sair</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/pessoa/perfil">Meu Perfil</a></li>
            <li><a href="/pessoa/meus_matches">Meus Matches</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/pessoa/sugerir">Sugerir Pratos/Bebidas</a></li>
            <li><a href="/pessoa/minhas_sugestoes">Minhas Sugestões</a></li>
            <li><a href="/index/logout">Sair</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse">
            <i class="mdi-navigation-menu"></i>
        </a>
    </div>
</nav>
{else}
<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">MealMatcher</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
            <li><a href="/index/login">Login</a></li>
        </ul>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
            <li><a href="/index/login">Login</a></li>
        </ul>


        <ul id="nav-mobile" class="side-nav">
            <li><a href="sobre.php">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
    </div>
</nav>
{/if}