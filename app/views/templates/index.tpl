{$head}
<body background="/files/img/back.jpg">
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '598195416989183',
            xfbml: true,
            version: 'v2.3'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "http://connect.facebook.net/pt_BR/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

{$sidebar_logado}
{*<nav class="#ef5350 red lighten-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">MealMatcher</a>
        <ul id="nav-mobile" class="side-nav">
            <li><a href="/pessoa/novo_match">Novo Match!</a></li>
            <li><a href="/matches/">Top Matches</a></li>
            <li><a href="/index/sobre">Sobre</a></li>
        </ul>


        <ul id="nav-mobile" class="side-nav">
            <li><a href="sobre.php">Sobre</a></li>
        </ul>

        <a href="#" data-activates="nav-mobile" class="button-collapse"><i
                    class="mdi-navigation-menu"></i></a>
    </div>
</nav>*}


<div class="container">
    <div class="section">
        <div class="row">
            <div class="row center">
                <br>
                <br> <br>
                <br> <br>
                <br> <br>
                <br> <a href="/index/cadastro" id="login-button"
                        class="btn-large waves-effect waves-light orange">Cadastrar</a> <br>
                <br> <a href="/index/login" id="login-button"
                        class="btn-large waves-effect waves-light orange">Login</a> <br>
                <br> <br>
                <br>

                {*<div class="fb-login-button" data-max-rows="1" data-size="large"
                     data-show-faces="false" data-auto-logout-link="false"></div>*}
                <!--<a href="#" id="facebook-button" class="btn-large waves-effect waves-light blue">Entrar com Facebook</a>-->
                <!--<div class="fb-like" data-share="true" data-width="450" data-show-faces="true">
            </div>-->

            </div>
        </div>
    </div>
</div>
</body>
{$footer}