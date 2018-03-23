{foreach item=cap key=i from=$data}
    <div class="col padding-right">
        <div class="col left" style="width: 80px">
            <img src="{$home}image/{$cap.capa[0]['url']}&w=80&h=80" alt="cap {$cap.capitulo}: {$cap.subtitulo}"
                 title="Cap. {$cap.capitulo}: {$cap.subtitulo}" height="80" width="80" style="width: 80px"/>
        </div>
        <p class="col left font-xxxlarge margin-0" style="width: 70px; padding-left: 25px">
            {$cap.capitulo}
        </p>
        <div class="col right color-text-grey font-large padding-16" style="width: 110px">
            {$cap.data}
        </div>
        <div class="rest">
            <p class="col left color-text-grey">
                {$cap.subtitulo}
            </p>
        </div>
    </div>
{/foreach}