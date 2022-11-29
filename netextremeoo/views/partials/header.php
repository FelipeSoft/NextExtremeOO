<?php require '../../config.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Extreme Blog</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/home.css">
    <script src="https://use.fontawesome.com/a443ad607e.js"></script>
    <script src="<?=$base;?>/assets/js/home.js" defer></script>
</head>
<body>
    <div class="menu-mobile">
        <i class="fa fa-times"></i>
        <ul>
            <li><a href="<?=$base;?>/views/pages/index.php">Home</a></li>
            <li><a href="<?=$base;?>/views/pages/write.php">Escrever</a></li>
            <li><a href="">Portfólio</a></li>
            <li><a href="">Loja</a></li>
            <li><a href="">Mídias Sociais</a></li>  
            <li><a href="">Categorias</a></li>
        </ul>
    </div>
    <header>
        <div class="max-header">
            <div class="first-header">
                <h1>Net Extreme</h1>
                <nav>
                    <ul class="main-list">
                        <li><a href="<?=$base;?>/views/pages/index.php">Home</a></li>
                        <li><a href="<?=$base;?>/views/pages/write.php">Escrever</a></li>
                        <li><a href="">Portfólio</a></li>
                        <li><a href="">Loja</a></li>
                    </ul>
                </nav>
                <div class="social-medias">
                    <a href=""><i class="fa fa-instagram"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-github"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                </div>
                <i class="fa fa-bars" id="bars"></i>
            </div>
        </div>
        
        <div class="max-header">
            <div class="second-header">
                <h2>Blog</h2>
                <div>
                    <a href="">Entrar</a>
                    <a href="">Inscreva-se</a>
                </div>
            </div>
        </div>
    </header>