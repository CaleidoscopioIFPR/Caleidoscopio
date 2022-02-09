<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Caleidoscópio - Ver Mais</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../css/vermais.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/Unna/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
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
    <div class="obra-info" style = "margin-top:150px">
        <div class="obra-img">
            <img src="Imagens/imagem-ilustrativa.jpg.jpg" />
        </div>
        <div class="obra-txt">
            <p class="obra-titulo">
                Arte de Rua
            </p>
            <p class="obra-desc">
                Lorem ipsum dolor sit amet. Aut voluptatem ratione est molestiae quae et accusamus totam vel voluptatem
                delectus ea doloribus iste aut nemo vitae id nobis corporis. 33 deserunt quia id maxime laboriosam sed
                autem enim est eius temporibus non maxime libero et eligendi quis. Qui tempora commodi qui incidunt
                obcaecati eos similique harum 33 debitis tenetur aut odit blanditiis. Aut officia voluptate et rerum
                distinctio non libero nisi. Qui ipsa quaerat et distinctio modi et unde dolor est quis corporis et rerum
                necessitatibus. Et velit quos ex laboriosam expedita et distinctio doloremque non illum exercitationem
                eos aperiam exercitationem. Qui Quis voluptatum qui galisum nobis aut aliquid expedita non delectus
                sint. Cum neque perferendis rem omnis eius et fugit dignissimos qui libero sint aut eligendi nostrum. Id
                ipsam illo quo dolor consectetur eum consequatur odit quo consequuntur mollitia ut nulla dolorem?
                Ea facere minus qui adipisci maiores eum omnis commodi cum reprehenderit fuga est pariatur asperiores
                sed
                ducimus quae est quia autem. Id soluta laborum ut alias quae eum ipsam itaque ut maxime quaerat? Qui
                voluptatibus eaque eos expedita quidem aut totam similique et accusamus dignissimos in maxime similique?
                Qui dolores quam sed culpa beatae non consectetur dolor sed quos neque. Quo dolorem laborum et numquam
                magni sit assumenda illo et repudiandae quia et esse dolores sed sapiente ullam. Qui sunt voluptatem sed
                quas accusamus id itaque nihil a Quis dignissimos At debitis numquam? Id incidunt rerum non galisum quia
                aut doloremque incidunt At repudiandae alias ad autem aliquid 33 veniam quas est nulla architecto. Est
                molestiae placeat id quibusdam dolore qui consequatur facere. Ut quae ipsam praesentium inventore est
                saepe nihil.
            </p>
        </div>
    </div>

    <div class = "continueText"> 
        <p>Continue navegando...</p>
    </div>
    <div class="lista-imgs">
        <a class="imagem-wrapper" href="VerMais.html">
            <div>
                <img class=cover src="Imagens/imagem-ilustrativa.jpg.jpg" alt " figura ilustrativa " width="450"
                    height="515,94">
                <p class="descricao-img">kjeskfjfjkesskdarflodkfkrgjgjdfjsllsfj</p>
            </div>
        </a>
        <a class="imagem-wrapper" href="VerMais.html">
            <div>
                <img class=cover src="Imagens/imagem-ilustrativa.jpg.jpg" alt " figura ilustrativa " width="450"
                    height="515,94">
                <p class="descricao-img">kjeskfjfjkesskdrflodkfkrgjgjdfjsllsfj</p>
            </div>
        </a>
        <a class="imagem-wrapper" href="VerMais.html">
            <div>
                <img class=cover src="Imagens/imagem-ilustrativa.jpg.jpg" alt " figura ilustrativa " width="450"
                    height="515,94">
                <p class="descricao-img">kjeskfjfjkesskdrflodkfkrgjgjdfjsllsfj</p>
            </div>
        </a>
        <a class="imagem-wrapper" href="VerMais.html">
            <div>
                <img class=cover src="Imagens/imagem-ilustrativa.jpg.jpg" alt " figura ilustrativa " width="450"
                    height="515,94">
                <p class="descricao-img">kjeskfjfjkesskdrflodkfkrgjgjdfjsllsfj</p>
            </div>
        </a>
        <a class="imagem-wrapper" href="VerMais.html">
            <div>
                <img class=cover src="Imagens/imagem-ilustrativa.jpg.jpg" alt " figura ilustrativa " width="450"
                    height="515,94">
                <p class="descricao-img">kjeskfjfjkesskdrflodkfkrgjgjdfjsllsfj</p>
            </div>
        </a>
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