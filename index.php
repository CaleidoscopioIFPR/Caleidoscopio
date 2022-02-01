<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio</title>
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
                        <a class="itens" href="PaginaInicial/Projetos/index.html">Projetos</a>
                        <a class="itens"href="PaginaInicial/Acervo/index.php">Acervo</a>
                        <a class="itens"href="PaginaInicial/Arte e suas Manifestações/index.html">Arte e suas manifestações</a>
                        <a class="itens"href="PaginaInicial/SobreNós/index.html">Sobre Nós</a>
                        <?php if(isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="PaginaInicial/Cadastro/index.html">Perfil</a>
                        <?php endif; ?>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="PaginaInicial/Autenticacao/index.html">Login</a>
                        <?php endif; ?>
                </div>
        </div>
        </nav>
    </header>
    <div id="titulo" style="margin-top:30px;">
        <h1> CALEIDOSCÓPI </h1>
        <img class="logoCaleidoscopio" src="PaginaInicial/Imagens/logoCaleidoscopio.png" alt="logoTitulo"
            width="90" height="90">
    </div>

    <div class="legenda">
        <p style="text-align: left;">ca.lei.dos.co.pi.o<br>
            1. Tubo cilíndrico com jogo interno de espelhos que produzem múltiplas imagens simétricas<br>
            2. Conjunto de objetos, cores, formas etc. que formam imagens em constante mutação</p>
    </div>

    <div id="animacao">
        <img src="PaginaInicial/Imagens/gifTeste2.gif" alt="animamcao" width="400px" height="500px">
    </div>

    

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
            echo"<a class='item' href='PaginaInicial/Acervo/index.html'>
                    <img src='PaginaInicial/Acervo/Imagens/Upload/$imagem' />
                </a>";
        }
        ?> 
            
            <!-- <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa2.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa3.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa4.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa5.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa6.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa7.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa8.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Acervo/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa1 copy.jpg" />
            </a> -->
        </div>

    </div>


    <div id="arteEManifestacoes">
        <a href="PaginaInicial/Arte e suas Manifestações/index.html">
            <h2 class="subtitulo ArteEManifestacoes">Arte e suas Manifestações</h2>
        </a>
    </div>

    <div class="items-wrapper">

        <div class="items">
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa1.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa2.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa3.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa4.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa5.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa6.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa7.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa8.jpg" />
            </a>
            <a class="item" href="PaginaInicial/Arte e suas Manifestações/index.html">
                <img src="PaginaInicial/Imagens/FiguraIlustrativa1 copy.jpg" />
            </a>
        </div>

    </div>


    <div id="projetos">
        <a href="PaginaInicial/Projetos/index.html">
            <h2 class="subtitulo Projetos"> nossos projetos</h2>
        </a>
    </div>


    <div id="blocos">
        <a href="PaginaInicial/Projetos/index.html">
            <div class="bloco-dançart">
                <h2 class="nomeProj"> dançart</h2>
            </div>
        </a>

        <a href="PaginaInicial/Projetos/index.html">
            <div class="bloco-rabiscando">
                <h2 class="nomeProj">rabiscando</h2>
            </div>
        </a>

        <a href="PaginaInicial/Projetos/index.html">
            <div class="bloco-poesiando">
                <h2 class="nomeProj"> poesiando </h2>
            </div>
        </a>
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
                    <li><a href = "PaginaInicial/SobreNós/index.html">Sobre Nós</a></li>
                    <li><a href = "PaginaInicial/Contato/index.html">Contato</a></li>
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