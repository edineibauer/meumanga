<?php
include_once 'inc/sidebar.php';
include_once 'inc/header-mini.php';

$read = new \ConnCrud\Read();
$read->exeRead(PRE . "manga", "WHERE name = :nn", "nn={$link->getUrl()[1]}");
$data = $read->getResult() ? $read->getResult()[0] : null;

if($data) {
    $data['background'] = HOME . str_replace('\\', '/', json_decode($data['background'], true)[0]['url']);
    $tpl = new \Helpers\Template("meumanga");
    $tpl->show("manga", $data);
} else {
    header("Location: " . HOME . "404");
}

include_once 'inc/footer.php';
?>

