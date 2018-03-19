<?php
$user = !empty($_SESSION['userlogin']) ? $_SESSION['userlogin'] : ['nome' => 'Anônimo', 'nome_usuario' => 'anonimo', 'imagem' => ''];
?>


<nav class="sidebar card collapse color-white animate-left" id="mySidebar"><br>
    <div class="row padding-small margin-bottom">
        <?=!empty($user['imagem']) ? "<img src='" . HOME . "tim.php?src=" . HOME . $user['imagem'] . "&h=90&w=90' class='left radius-circle' style='height:60px;width:60px' />": '<i class="material-icons left font-jumbo">account_circle</i>'?>

        <span class="left container padding-16"><?=$user['nome']?></span>

    </div>
    <div class="bar-block">
        <a href="#portfolio" onclick="w3_close()" class="bar-item button padding color-grey-light text-theme">
            <i class="material-icons left padding-right">home</i>
            <span class="left">Início</span>
        </a>
        <a href="#portfolio" onclick="w3_close()" class="bar-item button padding color-hover-grey-light hover-text-theme">
            <i class="material-icons left padding-right">dashboard</i>
            <span class="left">Meu Painel</span>
        </a>
        <a href="#contact" onclick="w3_close()" class="bar-item button padding hover-text-theme color-hover-grey-light">
            <i class="material-icons left padding-right">create</i>
            <span class="left">Minhas Histórias</span>
        </a>
        <a href="#about" onclick="w3_close()" class="bar-item button padding hover-text-theme color-hover-grey-light">
            <i class="material-icons left padding-right">location_searching</i>
            <span class="left">Descobrir</span>
        </a>
        <a href="#contact" onclick="w3_close()" class="bar-item button padding hover-text-theme color-hover-grey-light">
            <i class="material-icons left padding-right">list</i>
            <span class="left">Blog</span>
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