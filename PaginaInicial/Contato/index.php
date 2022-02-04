<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang=pt-br>

<head>
    <title>Celeidoscópio - Contato </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../CSS/contato.css">
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
        <div class="cabeçalho">
            <div class="LogoCaleidoscopio">
                <a href="../../index.php"><input type="image" name="botaoCaleidoscopio"
                    src="Imagens/logoCaleidoscopio.png" width="85" heigh="85" alt="logo"> </a>
                </div>
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
                        <a class="itens"href="../Cadastro/index.html">Perfil</a>
                        <?php endif; ?>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="../Autenticacao/index.html">Login</a>
                        <?php endif; ?>
                    </div>
            </div>
            </nav>
    </header>
    <div id=titulo style = "margin-top: 200px;">
        <h1 class="titulo"> <strong>contato</strong></h1>
    </div>
    <div class="conteudo">
        <div id=feedback>
            <h2 class="texto1"> Algum problema? Feedback? Mande um email para nós! </h2>
            <p class="texto2"> caleidoscopio.ifpr@gmail.com </p>
        </div>
        <div id=endereço>
            <h2 class="texto1"> IFPR Campus Curitiba </h2>
            <p class="texto2"> R. João Negrão, 1285 - Rebouças, Curitiba - PR, 80230-150 </p>
        </div>
    </div>

    <footer >
        <div class = container>
            <div>
                <img class ="logoCaleidoscopio" src="../Imagens/logoCaleidoscopioCompleto.png">
            </div>
            <div>
                <img class = "logoNac" src="../Imagens/logoNac.png">
                
            </div>
            
            <hr width="2" size="250" color="black">
            <div class = links>
                <ul>
                    <li><a href = "../SobreNós/index.php">Sobre Nós</a></li>
                    <li><a href = "../Contato/index.php">Contato</a></li>
                    <li><a href = "">FAQ</a></li>
                    <li><a href = "">Termos</a></li>
                </ul>
            </div>
            <div class = "quadro">
                <div class = "quote">
                    <q>Temos a arte para não morrer da verdade.</q>
                </div>
                <p>-Friedrich Nietzsche</p>
            </div>
            <div class = social-area>
                <ul class = "redes-sociais">
                    <li><a href = "https://www.instagram.com/caleidoscopio_ifpr/" target="_blank"><i class="fab fa-instagram" style="font-size: 1.5em;"></i></a></li>
                    <li><a href = "https://www.youtube.com/channel/UCs-VtrzZ-b91gw64TBDxNPg" target="_blank"><i class="fab fa-youtube" style="font-size: 1.5em;" ></i></a></li>
                    <li><a href = "https://www.tiktok.com/@caleidoscopio_ifpr" target="_blank"><i class="fab fa-tiktok" style="font-size: 1.5em;"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div class = copyright>
        <p>Todos os direitos reservados - Caleidoscópio © 2022</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(".btn-menu").click(function(){
            $(".menu").show();
            $("footer").hide();
        });
        $(".btn-close").click(function(){
            $(".menu").hide();
            $("footer").show();
        })
    </script>

</body>

</html>