{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<br>
<h5 align="center">Toque nos cards para ver os comentários</h5>
<br>

<ul class="collapsible popout collection collection-custom" data-collapsible="accordion">
    {foreach $matches as $match}
        <li style="background-color: #FFF" class="avatar">
            <div class="collapsible-header">
                {*<img src="lorem1.jpg" alt="" class="circle">*}
                <b>{$match['pra_nome']|truncate:7:"...":true} & {$match['beb_nome']|truncate:7:"...":true}</b>

                <div class="right">
                    {for $i=1 to $match['com_nota']}
                        <i style="color: #ff9800" class="tiny mdi-action-star-rate"></i>
                    {/for}
                    {if $logado}
                        <span onclick="joia({$match['com_id']})">Joia</span>
                    {/if}
                </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">{$match['pra_nome']} & {$match['beb_nome']}</p>

                <p class="comment-comm">{$match['com_descricao']|default:""}<span> - Por: {$match['pes_nome']}
                        em {$match['data']}</span></p>
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

</body>
{$footer}