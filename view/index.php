<?php include_once 'inc/sidebar.php'; ?>

<?php
$header = "";
$read = new \ConnCrud\Read();
$sql = new \ConnCrud\SqlCommand();
$tpl = new \Helpers\Template("meumanga");

$sql->exeCommand("SELECT count(*) as total FROM " . PRE . "login");
$num = number_format($sql->getResult()[0]['total']);

$read->exeRead(PRE . "header", "ORDER BY id DESC LIMIT 3");
if ($read->getResult())
    $header = HOME . str_replace('\\', '/', json_decode($read->getResult()[rand(0, (count($read->getResult()) - 1))]['imagem'], true)[0]['url']);
?>

<div class="main relative">
    <?php include_once 'inc/header.php'?>

    <?php
    /*
    $read = new \ConnCrud\Read();
    $read->exeRead(PRE . "novidades", "ORDER BY id DESC LIMIT 1");
    if($read->getResult()) {
        $tpl = new \Helpers\Template("meumanga");
        foreach ($read->getResult() as $item) {
            $item['imagem'] = HOME . json_decode($item['imagem'], true)[0]['url'];
            $tpl->show("novidade", $item);
        }
    }
    */
    ?>

    <section class="row padding-32 container z-depth-2 first-content relative color-grey-light">
        <div class="container">

            <?php
            $read->exeRead(PRE . "manga", "ORDER BY id DESC LIMIT 4");
            if ($read->getResult()) {
                $result = $read->getResult();
                foreach ($result as $i => $item)
                    $result[$i]['imagem'] = HOME . json_decode($item['imagem'], true)[0]['url'];

                $data = [
                    "title" => "Novos Mangas",
                    "subTitle" => "Mangas Saindo do Forno",
                    "icon" => "whatshot",
                    "data" => $result
                ];

                $tpl->show("container", $data);
                echo "<p class='col padding-16'></p>";
                $tpl->show("container", $data);
            }
            ?>
        </div>
    </section>

    <section class="col container align-center z-depth-inset-2 login padding-64">
        <h2 class="font-light font-xlarge padding-32 container color-text-white text-shadow">
            <p><b class="upper">Acompanhe, Descubra, Compartilhe</b></p>


            <p class="font-xxlarge">Nunca mais perca um episódio novamente</p>
        </h2>

        <div class="container padding-32">
            <a href="<?= HOME ?>cadastro-usuario" style="margin: auto;float: initial"
               class="btn-large hover-shadow upper theme-d1 font-xxlarge font-bold">Criar Conta!</a>
        </div>
    </section>

    <section class="col container color-grey-light padding-64">
        <div class="row container">
            <?php
            $data = [
                [
                    "icon" => "dashboard",
                    "title" => "Do Seu Jeito",
                    "content" => "Crie sua própria lista de mangas e animes em uma Dashboard personalizada"
                ],
                [
                    "icon" => "star_half",
                    "title" => "Classificação",
                    "content" => "Método de avaliação inovador para um comparativo mais acurado"
                ],
                [
                    "icon" => "av_timer",
                    "title" => "Acompanhe",
                    "content" => "Não perca mais episódios, acompanhe em sua dashboard os lançamentos"
                ]
            ];
            foreach ($data as $datum)
                $tpl->show("feature", $datum);
            ?>
        </div>

    </section>

    <section class="col container color-white border-bottom border-top padding-64">
        <header class="col container">
            <h1 class="col align-center">Tradutor de Manga</h1>
        </header>
        <p class="col align-center font-xlarge color-text-grey-dark">
            A ferramenta de tradução da <b>Meu Manga</b> permite traduções 10x mais rápido.
            <br>Se você é um <b>tradutor</b>, essa ferramenta é para você!</p>

        <div class="container col align-center padding-32">
            <a href="<?= HOME ?>cadastro-usuario" style="margin: auto;float: initial"
               class="btn-large hover-shadow upper color-orange color-text-white font-xxlarge font-bold">
                <span class="hide-small">Começe a </span>Traduzir
            </a>
        </div>
    </section>

    <section class="col padding-32 container relative color-grey-light">
        <div class="container">

            <?php
            $read->exeRead(PRE . "manga", "ORDER BY id DESC LIMIT 5");
            if ($read->getResult()) {
                $result = $read->getResult();
                foreach ($result as $i => $item)
                    $result[$i]['imagem'] = HOME . json_decode($item['imagem'], true)[0]['url'];

                $data = [
                    "title" => "Novos Mangas",
                    "subTitle" => "Mangas Saindo do Forno",
                    "icon" => "whatshot",
                    "data" => $result
                ];

                $tpl->show("top", $data);
                $data['data'] = array_reverse($data['data']);
                $tpl->show("top", $data);
                $tpl->show("top", $data);
            }
            ?>
        </div>
    </section>

    <section class="col container color-grey-light padding-32">
        <header class="col">
            <h1 class="align-center">Junte-se à <?=$num?> Pessoas...</h1>
            <div class="col align-center">
                <button class="btn-large theme font-xxlarge hover-shadow upper font-bold" style="margin: auto;float:initial">Criar Conta!</button>
            </div>
        </header>


    </section>

   <?php include_once 'inc/footer.php'?>
</div>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>