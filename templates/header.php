<?php
    include_once("helpers/constantes.php");
    include_once("data/categorias.php");
    include_once("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $NOME_BLOG ?></title>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="img/logo_02.svg" alt="Logo">    
            <h4>Blog do<br> Desenvolvedor</h4>
        </a>
        <nav id="nav-bar">
            <li><a href="<?= $BASE_URL ?>">Início</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="#">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
        </nav>
    </header>