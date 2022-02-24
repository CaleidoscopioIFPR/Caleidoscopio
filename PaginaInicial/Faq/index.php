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
    <link rel="stylesheet" type="text/css" href="../../CSS/faq.css">
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
            <a href="../../index.php"><input type="image" name="botaoCaleidoscopio" src="../Imagens/logoCaleidoscopio.png"
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

    <div class="titulo">
       <h2>Faq</h2>
    </div>


    <div class="collapsible-wrapper"> 

<button class="collapsible">Qual a origem do projeto Caleidoscópio?</button>
<div class="content">
  <p>O projeto Caleidoscopio surgiu em 2019 com a iniciativa da professora Ligia Battezzati de
            reunir outros projetos artísticos já existentes no IFPR. Todos os projetos que o Caleidoscópio engloba são criações da prof Ligia com outros alunos.
            O Caleidoscópio vem para trazer mais pessoas para o meio artístico, independente da vertente.</p>
</div>

<button class="collapsible">O projeto Caleidoscópio é apenas para os estudantes do IFPR?</button>
<div class="content">
  <p>Não. Apesar do projeto ter nascido no IFPR, ele abrange a comunidade externa à instituição, tanto para
                acompanhar apresentações/encontros quanto para contribuir no Caleidoscópio</p>
</div>

<button class="collapsible">Quem está por dentro do projeto Caleidoscópio?</button>
<div class="content">
  <p>A professora Ligia Battezzati é a fundadora e principal diretora do projeto, contudo temos 
                diversos outros contribuintes, como a professora Isis Tavares que desempenhou a função de coorientadora do site Caleidoscópio. 
                Caso se interesse em saber todos que já participaram ou ainda participam, possuimos um destaque no Instagram com 
                informações mais detalhadas e ainda a página "sobre nós" aqui no rodapé do site</p>
</div>

<button class="collapsible">Qual o objetivo principal do projeto Caleidoscópio?</button>
<div class="content">
  <p>O Caleidoscópio tem como objetivo principal a aproximação de cada vez mais pessoas com a arte. Queremos que 
                a arte seja admirada e valorizada como acreditamos que ela devia ser.</p>
</div>

    </div>

    <footer >
            <div class = container>
                <div style="background-image: url(../Imagens/logoCaleidoscopioCompleto.png); background-size:180px 180px; width: 180px; height: 180px; margin-top: 40px;">
                </div>
                <div>
                    <img class = "logoNac" src="../Imagens/logoNac.png">
                    
                </div>
                
                <hr width="2" size="250" color="black">
                <div class = links>
                    <ul>
                        <li><a href = "../SobreNós/index.php">Sobre Nós</a></li>
                        <li><a href = "../Contato/index.php">Contato</a></li>
                        <li><a href = "PaginaInicial/Faq/index.php">FAQ</a></li>
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
        <script src="../../js/hoverImgCollection.js"></script>

        <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</body>