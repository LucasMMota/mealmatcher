{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
    {foreach $matches as $match}
        <li>
            <div class="collapsible-header">
                <b>{$match['pra_nome']|truncate:7:"...":true} & {$match['beb_nome']|truncate:7:"...":true}</b>

                <div class="right">
                    {for $i=1 to $match['com_nota']}
                        <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                    {/for}
                </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">{$match['pra_nome']} & {$match['beb_nome']}</p>
                <p class="comment-comm">{$match['com_descricao']|default:"nenhum comentário adicionado"}</p>
            </div>
        </li>
        {foreachelse}
        <li>
            <div class="collapsible-header">
                <b>Você ainda não fez nenhuma combinação.</b>
            </div>
        </li>
    {/foreach}
</ul>

<script type="text/javascript">
    $(document).ready(function () {
        $('select').material_select();
    });
</script>

</body>
{$footer}