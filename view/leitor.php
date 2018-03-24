<?php
include_once 'inc/sidebar.php';
include_once 'inc/header-mini.php';

$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");

$read->exeRead(PRE . "capitulo", "WHERE id = :nn", "nn={$link->getUrl()[1]}");
if($read->getResult()) {
    $dados = $read->getResult()[0];
    $dados['manga'] = \Entity\Entity::read("manga", $dados['manga']);
    $dados['galeria'] = json_decode($dados['galeria'], true);

    $tpl->show("leitor", $dados);
} else {
    header("Location: " . HOME . "404");
}

include_once 'inc/footer.php';
