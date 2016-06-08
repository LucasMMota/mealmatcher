{$head}
<body style="background-color: #efebe9">

{$sidebar_logado}

<br>
<h5 align="center">Toque nos cards para ver os comentários</h5>
<br>
<ul class="collection collection-custom">

    {foreach $matches as $match}
        <li style="background-color: #FFF" class="collection-item avatar">
            <img src="lorem1.jpg" alt="" class="circle">
            {for $i=1 to $match['com_nota']}
                <i style="color: #ff9800" class="mdi-action-grade"></i>
            {/for}
            <p style="color: black">
                {$match['com_descricao']|default:"nenhum comentário adicionado"}
                <br>
            </p>
        </li>
        {foreachelse}
        <li>
            <div class="collapsible-header">
                <b>Ainda não há nenhuma combinação :(</b>
            </div>
        </li>
    {/foreach}
</ul>

<script type="text/javascript">
    // <![CDATA[
    $(document).ready(function () {
        $('select').material_select();
    });
    $('.tabs-wrapper .row').pushpin({
        top'.tabs-wrapper').offset().top
    })
    ;
    // ]]>
</script>


</body>
{$footer}