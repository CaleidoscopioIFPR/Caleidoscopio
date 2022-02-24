<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Caleidoscópio - Sobre Nós</title>
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

    <div class="LogoCaleidoscopio">
        <a href="../../index.php"><input type="image" name="botaoCaleidoscopio" src="Imagens/logoCaleidoscopio.png"
                width="85" heigh="85" alt="logo"> </a>
    </div>

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
    <div class="cabecalho">

        <div style="display: flex;">
            <div id="animacao">
                <img src="Imagens/pato.gif" alt="animamcao" width="300px" height="400px">
            </div>
            <div id="cabecalho-textos">
                <div id="titulo">
                    <p class="titulo">sobre nós</p>
                </div>
                <div id="legenda">
                    <p class="legenda1"> O site do Caleidoscópio foi desenvolvido por uma equipe de estudantes concluintes do curso técnico integrado de Informática como projeto de conclusão de curso no Instituto Federal do Paraná - Campus Curitiba.
                        O grupo é composto por três alunos fascinados pelo mundo da técnologia e amantes da arte. Além disso, o trio foi orientado por uma professora graduada em artes visuais e coorientado por uma professora com licenciatura em educação artística.
                        Todos os integrantes desse projeto foram cruciais para a criação e desenvolvimento técnico do site.
                
                        
                    </p>
                </div>
            </div>

        </div>
    </div>
    <div id="conteudo">
        <div id="devs">

            <div class="dev">
                <img src="Imagens/brebFoto.jpg" alt="icone" />
                <p> <strong> Brenda Alves </strong></p>
                <p> Artista visual e futura estudante de design na UTFPR com grande interesse em programação</p>
            </div>

            <div class="dev">
                <img src="Imagens/brazas2Foto.jpg" alt="icone" />
                <p><strong>Gabriel Brasil</strong></p>
                <p> Aficionado em desenvolvimento de sistemas e atleta amador</p>
                </div>

            <div class="dev">
                <img src="Imagens/solerFoto.jpg" alt="icone" />
                <p><strong>Gabriel Soler</strong></p>
                    <p> Apaixonado por tecnologia e tudo que envolve lógica matemática</p> 
            </div>

            <div class="dev">
                <img src="Imagens/ligiaFoto.jpg" alt="icone" />
                <p><strong>Ligia Battezzati</strong></p>
                <p> Professora de Artes no IFPR e criadora do projeto Caleidoscópio</p>
            </div>

            <div class="dev">
                <img src="Imagens/isisFoto.jpeg" alt="icone" />
                <p><strong>Isis Tavares</strong></p>
                <p> Também professora de Artes no IFPR e coorientadora do site Caleidoscópio</p>
            </div>

        </div>
        <div id="devsFotos">
            <div class="grupo-wrapper">
            <img class="random" src="Imagens/fotoRandom2.jpg" />
            <legend class="legendText"><i> Foto com todos os integrantes da equipe </i> </legend>
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
        });
        $(".btn-close").click(function(){
            $(".menu").hide();
        })
    </script>

</body>