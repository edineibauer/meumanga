<?php
$user = !empty($_SESSION['userlogin']) ? $_SESSION['userlogin'] : ['nome' => 'Anônimo', 'nome_usuario' => 'anonimo', 'imagem' => ''];
?>

<nav class="sidebar card collapse color-white animate-left" id="mySidebar">
    <div class="col padding-small margin-bottom relative margin-top" style="height: 50px">
        <?=!empty($user['imagem']) ? "<img src='" . HOME . "tim.php?src=" . HOME . $user['imagem'] . "&h=70&w=70' class='sidebar-img left radius-circle' style='height:auto;max-width:50px;width:100%' />": '<i class="material-icons left font-xxxlarge">account_circle</i>'?>

        <span class="sidebar-nome sidebar-menu container padding-16"><?=$user['nome']?></span>

    </div>
    <div class="bar-block sidebar-menu-ul relative col">
        <span class="bar-item button relative padding-0">
            <i class="material-icons left padding-right i-search padding">search</i>
            <span class="left sidebar-menu" style="width: 200px">
                <input type="search" placeholder="buscar..." class="color-white search" id="searchSidebar"/>
            </span>
        </span>
        <a href="<?=HOME?>" onclick="w3_close()" class="bar-item button color-grey-light text-theme relative">
            <i class="material-icons left padding-right">home</i>
            <span class="left sidebar-menu">Início</span>
        </a>
        <a href="<?=HOME?>dashboard" onclick="w3_close()" class="bar-item button color-hover-grey-light hover-text-theme relative">
            <i class="material-icons left padding-right">dashboard</i>
            <span class="left sidebar-menu">Meu Painel</span>
        </a>
        <a href="<?=HOME?>dashboard" onclick="w3_close()" class="bar-item button hover-text-theme color-hover-grey-light relative">
            <i class="material-icons left padding-right">create</i>
            <span class="left sidebar-menu">Minhas Histórias</span>
        </a>
        <a href="<?=HOME?>seguindo" onclick="w3_close()" class="bar-item button hover-text-theme color-hover-grey-light relative">
            <i class="material-icons left padding-right">rss_feed</i>
            <span class="left sidebar-menu">Seguindo</span>
        </a>
        <a href="<?=HOME?>discovery" onclick="w3_close()" class="bar-item button hover-text-theme color-hover-grey-light relative">
            <i class="material-icons left padding-right">location_searching</i>
            <span class="left sidebar-menu">Descobrir</span>
        </a>
        <a href="<?=HOME?>blog" onclick="w3_close()" class="bar-item button hover-text-theme color-hover-grey-light relative">
            <i class="material-icons left padding-right">list</i>
            <span class="left sidebar-menu">Blog</span>
        </a>
    </div>
    <div class="panel font-large">
        <i class="fa fa-facebook-official hover-opacity"></i>
        <i class="fa fa-instagram hover-opacity"></i>
        <i class="fa fa-snapchat hover-opacity"></i>
        <i class="fa fa-pinterest-p hover-opacity"></i>
        <i class="fa fa-twitter hover-opacity"></i>
        <i class="fa fa-linkedin hover-opacity"></i>
    </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="overlay hide-large animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"
     id="myOverlay"></div>

<link rel="stylesheet" href="<?=HOME?>assets/sidebar.css">
<script src="<?=HOME?>assets/sidebar.js" defer ></script>