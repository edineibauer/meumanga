<section class="col border color-white">

    <header class="col container padding-16 border-bottom">
        <div class="col" style="width: 80px">
            <i class="material-icons left padding-right font-jumbo color-text-red opacity">{$icon}</i>
        </div>
        <div class="col right" style="width: 100px">
            <button class="btn-small border color-white radius-small opacity hover-opacity-off" style="padding-bottom: 0"><i class="material-icons">keyboard_arrow_left</i></button>
            <button class="btn-small border color-white radius-small opacity hover-opacity-off" style="padding-bottom: 0"><i class="material-icons">keyboard_arrow_right</i></button>
        </div>
        <div class="rest">
            <h2 class="color-text-grey font-medium font-bold padding-0">{$subTitle}</h2>
            <h1 class="font-xlarge padding-0 font-bold">{$title}</h1>
        </div>
    </header>

    <div class="col container padding-16">
        {foreach from=$data item=datum}
            <article class="col left margin-right" style="width: 237px">
                <div class="col relative overflow-hidden border" style="height: 300px;">
                    <a href="{$home}manga/{$datum.name}" class="article-image overflow-hidden">
                        <img src="tim.php?src={$datum.imagem}&h=316&w=237" alt="{$datum.titulo}" title="{$datum.titulo}"
                             style="height: auto; width: 237px;"
                             class="hover-opacity article-img">
                    </a>
                </div>
                <header class="col padding-15">
                    <a href="{$home}manga/{$datum.name}">
                        <h1 class="font-large overflow-hidden" style="height: 52px;">{$datum.titulo}</h1>
                    </a>
                </header>
            </article>
        {/foreach}
    </div>
</section>