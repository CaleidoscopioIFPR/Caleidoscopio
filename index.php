<?php 
    
    session_start();
    $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

    if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        require("PaginaInicial/Autenticacao/acess/conexao.php");
    
        $conexaoClass = new Conexao();
        $conexao = $conexaoClass->conectar();
    
        $nome = $_SESSION['usuario'][0];
        $sobrenome = $_SESSION['usuario'][1];
        $adm = $_SESSION['usuario'][2];
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Caleidoscópio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="css/paginainicial.css">
    <link rel="stylesheet" type="text/css" href="CSS/Fonts/thabitregular/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body style="height: 100% ; width: 100% ;">

    <header>
        <button class = "btn-menu"><i class="fas fa-bars"></i></button>
        <nav class = "menu">
            <a class = "btn-close"><i class="fas fa-times"></i></a>
            <div class = "container">
                <div class = "left">
                </div>
                <div class = "right">
                    
                        <a class="itens" href="index.php">Home</a>
                        <a class="itens" href="PaginaInicial/Projetos/index.php">Projetos</a>
                        <a class="itens"href="PaginaInicial/Acervo/index.php">Acervo</a>
                        <a class="itens"href="PaginaInicial/Arte e suas Manifestações/index.php">Arte e suas manifestações</a>
                        <a class="itens"href="PaginaInicial/SobreNós/index.php">Sobre Nós</a>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="PaginaInicial/Autenticacao/index.html">Login</a>
                        <?php endif; ?>
                        <?php if($adm) : ?>
                        <a class="itens"href="PaginaInicial/Administrador/index.php">Painel de Controle</a>
                        <?php endif; ?>                       
                        <?php if(isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="PaginaInicial/Autenticacao/acess/logout.php">Sair</a>
                        <?php endif; ?>
                        
                </div>
        </div>
        </nav>
    </header>
    <div class = "titulo-container">
        <img class = "logoCaleidoscopio" src="PaginaInicial/Imagens/logoCaleidoscopioCompleto.png">
        <div class = "legenda">
            <p style="text-align: left;">ca.lei.dos.co.pi.o</br>
                1. Tubo cilíndrico com jogo interno de espelhos que produzem múltiplas imagens simétricas</br>
                2. Conjunto de objetos, cores, formas etc. que formam imagens em constante mutação</p>
            </div>
    </div>

    <!--
    <div id="animacao">
        <img src="PaginaInicial/Imagens/gifTeste2.gif" alt="animamcao" width="400px" height="500px">
    </div>
  -->
    

    <div id="acervo">
        <a href="PaginaInicial/Acervo/index.php">
            <h2 class="subtitulo Acervo">ACERVO</h2>
        </a>
    </div>


    <div class="items-wrapper">

        <div class="items">
        <?php 
        $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");
        $sql = "SELECT * FROM acervoindex";
        $consulta = mysqli_query($mysqli,$sql);

        while($dados = mysqli_fetch_array($consulta)){
            $id = $dados[0];
            $imagem = $dados[1];
            $desc = $dados[2];
            $title = $dados[3];
            $dataEnvio = $dados[4];
            $aut = $dados[5];
            $cat = $dados[6];
            echo"<a class='item' href='PaginaInicial/Acervo/index.php'>
                    <img src='PaginaInicial/Acervo/Imagens/Upload/$imagem' />
                </a>";
        }
        ?> 
        </div>

    </div>


    <div id="arteEManifestacoes">
        <a href="PaginaInicial/Arte e suas Manifestações/index.php">
            <h2 class="subtitulo ArteEManifestacoes">Arte e suas Manifestações</h2>
        </a>
    </div>

    <div class="items-wrapper">

        <div class="items">
        <?php 
        $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");
        $sql = "SELECT * FROM conteudos_artisticos";
        $consulta = mysqli_query($mysqli,$sql);

        while($dados = mysqli_fetch_array($consulta)){
            $id = $dados[0];
            $title = $dados[1];
            $desc = $dados[2];
            $imagem = $dados[3];
            $dataEnvio = $dados[4];
            $aut = $dados[5];
            echo"<a class='item' href='PaginaInicial/Arte e suas Manifestações/index.php'>
                    <img src='PaginaInicial/Arte e suas Manifestações/Imagens/Upload/$imagem' />
                </a>";
        }
        ?> 
        </div>

    </div>

    <div id="projetos">
        <a href="PaginaInicial/Projetos/index.php">
            <h2 class="subtitulo Projetos"> nossos projetos</h2>
        </a>
    </div>
    <div id="blocos-container">
        <div class="bloco dancart">
            <a href="PaginaInicial/Projetos/index.php">
                <div>
                    <img src="PaginaInicial/Imagens/DancartPaginaInicial.jpg">
                </div>
                <div>
                    <h2 class = "nomeProj"> dançart</h2>
                </div>
            </a>
        </div>

        <div class="bloco rabiscando">
            <a href="PaginaInicial/Projetos/index.php">
                <div>
                    <img src="PaginaInicial/Imagens/RabiscandoPaginaInicial.jpg">
                </div>
                <div>
                    <h2 class = "nomeProj">rabiscando</h2>
                </div>
            </a>
        </div>

        <div class="bloco poesiando">
            <a href="PaginaInicial/Projetos/index.php">
                <div>
                    <img src="PaginaInicial/Imagens/PoesiandoPaginaInicial.jpg">
                </div>
                <div>
                    <h2 class = "nomeProj">poesiando</h2>
                </div>
            </a>
        </div>
    </div>

    <div id="Menu">
    </div>

    <footer >
        <div class = container>
            <div>
                <img class ="logoCaleidoscopio" src="PaginaInicial/Imagens/logoCaleidoscopioCompleto.png">
            </div>
            <div>
                <img class = "logoNac" src="PaginaInicial/Imagens/logoNac.png">
                
            </div>
            
            <hr width="2" size="250" color="black">
            <div class = links>
                <ul>
                    <li><a href = "PaginaInicial/SobreNós/index.php">Sobre Nós</a></li>
                    <li><a href = "PaginaInicial/Contato/index.php">Contato</a></li>
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
    <script src="js/slideShow.js"></script>
</body>

</html>