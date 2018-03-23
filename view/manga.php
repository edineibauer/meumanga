<?php
include_once 'inc/sidebar.php';
include_once 'inc/header-mini.php';

$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");


$read->exeRead(PRE . "manga", "WHERE name = :nn", "nn={$link->getUrl()[1]}");
if($read->getResult()) {
    $data = \Entity\Entity::read("manga", $read->getResult()[0]['id']);
    $tpl->show("manga", $data);
} else {
    header("Location: " . HOME . "404");
}

include_once 'inc/footer.php';
