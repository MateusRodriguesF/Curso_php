<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
    // o Recurso acima serve para invocar a variavel $BASE_URL dentro do arquivo url.php ...
    //Pois por ser um arquivo php e não html é preciso dessa variavel para trabalhar com pastas
?>
<!-- ESSE ARQUIVO TERMINA COM A TAG <BODY> ABERTA E ELA SO SERA FECHADA NO ARQUIVO FOOTER.PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Code</title>
    <!-- ESTILOS DO PROJETO --> 
    <!-- Abixo pode se observar a variavel $BASE_URL sendo utilizada 
    para chamar o arquivo css dentro da pasta /css/. Sem esse recurso nao seria possivel fazer isso. -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
        <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">Categorias</a></li>
                <li><a href="" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>