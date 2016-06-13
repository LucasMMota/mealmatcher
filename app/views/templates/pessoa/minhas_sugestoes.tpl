{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<br>
<h5 align="center">Suas últimas combinações</h5>
<br>

<ul class="collapsible popout" data-collapsible="accordion">
    {foreach $sugestoes as $sugest}
        <li>
            <div class="collapsible-header">
                <b>{$sugest['sug']}
                    <div class="right">
                        em {$sugest['data']|date_format:"%d/%m/%Y às %H:%M"}</b>
            </div>
            </div>
        </li>
        {foreachelse}
        <li>
            <div class="collapsible-header">
                <b>Você ainda não fez nenhuma sugestão.</b>
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