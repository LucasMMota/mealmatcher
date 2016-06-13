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
                        <span style="z-index: 9999;" rel="{$match['com_id']}"
                              class="btn-curtir-span {if $match['curtiu'] === '1' || $match['curtiu'] === '0' } curtiu{/if}"
                              data-tooltip="{if $match['curtiu'] === '1'}Curtiu{elseif $match['curtiu'] === '0'}Não Curtiu{else}Curtiu{/if}">
                            <i class="material-icons dp48 btn-curtir{if $match['curtiu'] === '1' || $match['curtiu'] === '0' } curtiu{/if}">
                                {if $match['curtiu']==='1' || $match['curtiu'] === false}
                                    thumb_up
                                {else}
                                    thumb_down
                                {/if}
                            </i></span>
                    {/if}
                </div>
            </div>
            <div class="collapsible-body" style="background-color: #FFF">
                <p class="comment-det">{$match['pra_nome']} & {$match['beb_nome']}</p>

                <p class="comment-comm">{$match['com_descricao']|default:""}<span> - Por: {$match['pes_nome']}
                        em {$match['data']|date_format:"%A %e de %B de %Y às %H:%M"}</span></p>
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