<?php
$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");

if(!empty($link->getUrl()[2]) && $link->getUrl()[2] === "capitulo") {
    $read->exeRead(PRE . "capitulo", "WHERE id = :nn", "nn={$link->getUrl()[3]}");
    if($read->getResult()) {
        $dados = $read->getResult()[0];
        $dados['manga'] = \Entity\Entity::read("manga", $dados['manga']);
        $dados['galeria'] = json_decode($dados['galeria'], true);

        $tpl->show("leitor", $dados);
    } else {
        header("Location: " . HOME . "404");
    }
} else {
    $read->exeRead(PRE . "manga", "WHERE name = :nn", "nn={$link->getUrl()[1]}");
    if($read->getResult()) {
        $data = \Entity\Entity::read("manga", $read->getResult()[0]['id']);
        $tpl->show("manga", $data);
    } else {
        header("Location: " . HOME . "404");
    }
}