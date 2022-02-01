<?php 
    session_start();

        $host = '127.0.0.1';
        $usuario = 'root';
        $senha = '';
        $dataBase = 'bd_caleidoscopio';

        $conexao = new PDO("mysql:host=$host;dbname=$dataBase", $usuario, $senha);

        $id2 = isset($_POST['id']) ? $_POST['id'] : '';

        $query = $conexao->prepare("SELECT * FROM acervo WHERE id = ?");
        $query->execute(array($id2));

        if($query->rowCount()){
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
            $query2 = $conexao->prepare("INSERT INTO acervoindex (id, arquivo, categoria, titulo, autor, descricao, dataEnvio) VALUES (?,?,?,?,?,?,?)");
            $query2->execute(array(NULL, $user[0]['arquivo'], $user[0]['categoria'],$user[0]['titulo'], $user[0]['autor'],$user[0]['descricao'],$user[0]['dataEnvio'] ));
            //echo print_r($user[0]["arquivo"]);
        }
        


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio - Acervo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../css/acervo.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        
        <div class="LogoCaleidoscopio">
            <a href="../../index.php"><input type="image" name="botaoCaleidoscopio" src="Imagens/logoCaleidoscopio.png" width="85" heigh="85"  alt="logo"> </a>          
        </div>
        <button class = "btn-menu"><i class="fas fa-bars"></i></button>
        <nav class = "menu">
            <a class = "btn-close"><i class="fas fa-times"></i></a>
            <div class = "container">
                <div class = "left">
                </div>
                <div class = "right">
                    <a class="itens" href="../../index.php">Home</a>
                    <a class="itens" href="../Projetos/index.html">Projetos</a>
                    <a class="itens" href="../Acervo/index.php">Acervo</a>
                    <a class="itens" href="../Arte e suas Manifestações/index.html">Arte e suas manifestações</a>
                    <a class="itens" href="../SobreNós/index.html">Sobre Nós</a>
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
    <div style="text-align: center; margin-top: 200px;">
        <h1 class="titulos"> ACERVO </h1>
        <p class="legenda"><q>A verdadeira viagem se faz na memória.</q></p>
    </div>

    <div id="motherButtons">       
        <div id="botoes">
            <?php if(isset($_SESSION['usuario'])): ?>
            <a href="adicionarImagem.php">
            <?php endif; ?>
            <?php if(!isset($_SESSION['usuario'])): ?>
            <a href="../Autenticacao/index.html">
            <?php endif; ?>
            <button class="botao botaoAdicionar">+ Adicionar</button>
            </a>
        </div>
       </div>
    

    <div id="fundo">
        <div class="menu-toggleSearch" onclick="closePage()">
            <div id="one"></div>
            <div id="two"></div>
        </div>
    </div>
    <img src="" id="imgHighlight">


<div id="father">
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
            echo"<div class='figuraIlustrativa'>            
            <div class='hover'> 
                $title
                <br>
                $desc    
            </div>
                <img src ='Imagens/Upload/$imagem' class='imgCollection'  onclick='onClickProv(event,this.attributes[0].value)' alt = 'Figura ilustrativa 1'>               
            </div>";
        }
        ?>   
        
        
        <!-- <div class="figuraIlustrativa">
            <div class="hover"> 
                teeste aaaa dsss                 
            </div>
            <img src="Imagens/FiguraIlustrativa2.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 2">
        </div>
        
        <div class="figuraIlustrativa">
            <div class="hover"> 
                teeste aaaa dsss                 
            </div>
            <img src="Imagens/FiguraIlustrativa3.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 3">
        </div>

        <div class="figuraIlustrativa">
            <div class="hover"> 
                teeste aaaa dsss                 
            </div>
            <img src="Imagens/FiguraIlustrativa4.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 4">
        </div>

        <div class="figuraIlustrativa">
            <div class="hover"> 
                teeste aaaa dsss                 
            </div>
            <img src="Imagens/FiguraIlustrativa5.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 5">
        </div>

        <div class="figuraIlustrativa">
            <div class="hover"> 
                teeste aaaa dsss                 
            </div>
            <img src="Imagens/FiguraIlustrativa6.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 6">
        </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa1.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 1">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa2.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 2">
                </p>
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa3.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 3">
                </p>
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa4.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 4">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa5.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 5">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa6.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 6">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa7.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 7">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa8.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 8">
                
            </div>


            
            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa1.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 9">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa2.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 10">
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa3.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 11">
                </p>
            </div>

            <div class="figuraIlustrativa">
                <div class="hover"> 
                    teeste aaaa dsss                 
                </div>
                <img src="Imagens/FiguraIlustrativa4.jpg" class="imgCollection"  onclick="onClickProv(event,this.attributes[0].value)" alt="Figura ilustrativa 12">
            </div> -->
    </div>

        <div id="Menu">
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
                        <li><a href = "../SobreNós/index.html">Sobre Nós</a></li>
                        <li><a href = "../Contato/index.html">Contato</a></li>
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
        <script src="../../js/hoverImgCollection.js"></script>
</body>

</html>