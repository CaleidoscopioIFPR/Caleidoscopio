<?php 
    
    session_start();
    $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

    if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
        require("../Autenticacao/acess/conexao.php");
    
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
    <title>Caleidoscópio - Nossos Projetos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../css/projetos.css">
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

<body style="background-color: #fbfbf8;">

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
                        <a class="itens"href="../Acervo/index.php">Acervo</a>
                        <a class="itens"href="../Arte e suas Manifestações/index.php">Arte e suas manifestações</a>
                        <a class="itens"href="../SobreNós/index.php">Sobre Nós</a>
                        <?php if(!isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="../Autenticacao/index.html">Login</a>
                        <?php endif; ?>
                        <?php if($adm) : ?>
                        <a class="itens"href="../Administrador/index.php">Painel de Controle</a>
                        <?php endif; ?>                       
                        <?php if(isset($_SESSION['usuario'])): ?>
                        <a class="itens"href="../Autenticacao/acess/logout.php">Sair</a>
                        <?php endif; ?>
                        
                </div>
        </div>
        </nav>

    </header>
    
    <div class="cabeçalho">
        
        <div class=gifFofo>
            <img src="Imagens/gifFofo.gif">
        </div>
        <div class="titulo-legenda">
            <h1 class=titulos> PROJETOS</h1>  
            <p class=legenda><q>Eu tenho natureza, arte e poesia, e se isso não for o suficiente, o que é suficiente?</q>
            </p>
        </div>
        <div class=gifFofo2>
            <img src="Imagens/gifFofo.gif">
        </div>
    </div>

        <h1 class="subtitulo esquerda">dançart</h1>
        <div class=bloco style="background-color: #CE7D7D;">
            <img class = imagem src = "Imagens/DancartPaginaInicial.jpg">
                <div class="texto">
                    <p class = "direita"> O Dançart surgiu da ideia de mostrar que a dança não é algo exclusivo e seletivo,
                        e sim uma linguagem da arte que todos podem experimentar como um meio de se expressar, se comunicar, 
                        se permitir sentir e conhecer o próprio corpo, independente de ter uma experiência anterior.</p>
                </div>
        </div>
        <h1 class="subtitulo direita">rabiscando</h1>
        <div class=bloco style = "background-color: #F8EB7E;">
            <div class="texto">
                <p class = "esquerda">O Rabiscando é uma ação idealizada pelos estudantes que desejavam ampliar 
                    o tempo para produção de trabalhos das Artes Visuais. Ele surge como um momento em que as 
                    pessoas interessadas se encontram, semanalmente, para trocar ideias, materiais, 
                    técnicas e experiências relacionadas a essa linguagem artística.</p>
            </div>

                    <img class = imagem src="Imagens/RabiscandoPaginaInicial.jpg">

        </div>
        <h1 class="subtitulo esquerda">poesiando</h1>
        <div class=bloco style = "background-color: #97D382;">

                    <img class = imagem src="Imagens/PoesiandoPaginaInicial.jpg">

                <div class="texto">
                    <p class="direita">O Poesiando propõe promover um espaço criativo e
                    democrático de expressão e reflexão, criar um ambiente de posicionamento e exposição de
                    sentimentos, reunindo estudantes para que compartilhem momentos artísticos e íntimos,
                    sendo também um escape para as preocupações no contexto do ensino técnico.</p>
                </div>
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
                    <li><a href = "../Faq/index.php">FAQ</a></li>
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