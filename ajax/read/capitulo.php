<?php

$id = filter_input(INPUT_POST, 'manga', FILTER_VALIDATE_INT);
$off = filter_input(INPUT_POST, 'off', FILTER_VALIDATE_INT);

$off = empty($off) || $off < 1 ? 0 : $off;

$read = new \ConnCrud\Read();
$tpl = new \Helpers\Template("meumanga");

$read->exeRead(PRE . "capitulo", "WHERE manga = :ma ORDER BY id DESC LIMIT 20 OFFSET :of", "ma={$id}&of={$off}");
if($read->getResult())
    $data['data'] = $tpl->getShow("capitulo", $read->getResult());
else
    $data['data'] = "<h3 class='align-center'>Nenhum Capítulo Disponível</h3>";