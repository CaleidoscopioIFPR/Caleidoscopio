<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio - Sobre Nós</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../CSS/sobre-nos.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/Unna/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
    <style>
        .cover {
            object-fit: cover;
        }

        .none {
            object-fit: none;
        }
    </style>

</head>

<body>

    <header>
        <div class="LogoCaleidoscopio">
            <a href="../../index.php"><input type="image" name="botaoCaleidoscopio" src="Imagens/logoCaleidoscopio.png"
                    width="85" alt="logo"> </a>
        </div>
        <button class = "btn-menu"><i class="fas fa-bars"></i></button>
        <nav class = "menu">
            <a class = "btn-close"><i class="fas fa-times"></i></a>
            <div class = "container">
                <div class = "left">
                </div>
                <div class = "right">
                    <a class="itens" href="../../index.php">Home</a>
                    <a class="itens" href="../Projetos/index.php">Projetos</a>
                    <a class="itens" href="../Acervo/index.php">Acervo</a>
                    <a class="itens" href="../Arte e suas Manifestações/index.php">Arte e suas manifestações</a>
                    <a class="itens" href="../SobreNós/index.php">Sobre Nós</a>
                    <?php if(isset($_SESSION['usuario'])): ?>
                    <a class="itens" href="../Cadastro/index.html" >Perfil</a>
                    <?php endif; ?>
                    <?php if(!isset($_SESSION['usuario'])): ?>
                    <a class="itens"href="../Autenticacao/index.html">Login</a>
                    <?php endif; ?>
                </div>
        </div>
        </nav>

        
    </header>



</body>