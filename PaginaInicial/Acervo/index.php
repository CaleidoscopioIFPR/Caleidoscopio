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
           
            if( $query2->execute(array(NULL, $user[0]['arquivo'], $user[0]['categoria'],$user[0]['titulo'], $user[0]['autor'],$user[0]['descricao'],$user[0]['dataEnvio'] ))) {
                $query3 = $conexao->prepare("DELETE FROM acervo WHERE id = ?");
                $query3->execute(array($id2));
            }
            //echo print_r($user[0]["arquivo"]);
        }

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
    <title>Caleidoscópio - Acervo</title>
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
        <script src="../../js/hoverImgCollection.js"></script>
</body>

</html>