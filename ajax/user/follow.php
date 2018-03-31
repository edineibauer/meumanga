<?php
$id = filter_input(INPUT_POST, 'manga', FILTER_VALIDATE_INT);

if (empty($_SESSION)) {
    $data['response'] = 2;
    $data['error'] = "Faça login Antes";
} else {
    $read = new \ConnCrud\Read();
    $read->exeRead(PRE . "pessoa_manga_seguindo", "WHERE pessoa_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['pessoa']}&mi={$id}");
    if($read->getResult()) {
        $del = new \ConnCrud\Delete();
        $del->exeDelete(PRE . "pessoa_manga_seguindo", "WHERE pessoa_id = :li && manga_id = :mi", "li={$_SESSION['userlogin']['pessoa']}&mi={$id}");
        $data['data'] = "2";
    } else {
        $create = new \ConnCrud\Create();
        $create->exeCreate(PRE . "pessoa_manga_seguindo", ["pessoa_id" => $_SESSION['userlogin']['pessoa'],"manga_id" => $id]);
        $data['data'] = "1";
    }
}