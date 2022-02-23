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
    } else {
        echo "<script>window.location = '../Autenticacao/index.html'</script>";
    }
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio - Administrador</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../CSS/conteudosArtisticosAdm.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body>

    <!-- <header>
        <div class="LogoCaleidoscopio">
            <a href="../../../index.html"><input type="image" name="botaoCaleidoscopio" src="../../Acervo/Imagens/logoCaleidoscopio.png" width="85" heigh="85"  alt="logo"> </a>          
        </div> 
    </header> -->

    <input type="checkbox" id="nav-toggle">

    <div class="sidebar">
        <div class="sidebar-brand">
            <span><a href="../../index.php"><img class="logoCaleidoscopio" src="../Imagens/logoCaleidoscopio.png" alt="logoTitulo"
                width="50" height="50"></a></span>
            <h2><span>Caleidoscópio</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php" ><span class="fas fa-columns"></span>
                    <span>Painel de Controle</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="fas fa-palette"></span>
                    <span>Conteúdos Artísticos</span></a>
                </li>
                <li>
                    <a href=""><span class="fas fa-images"></span>
                    <span>Imagens no Acervo</span></a>
                </li>
                <li>
                    <a href="conta.html"><span class="far fa-user-circle"></span>
                    <span>Conta</span></a>
                </li>

            </ul>
        </div>
    </div>

    
    <div class="main-content">
        <header>        
                <h2>
                    <label for="nav-toggle">
                        <span class="fas fa-bars"> </span>
                    </label>
                    Conteúdos Artísticos
                </h2>

                <div class="user-wrapper">
                    <img src="Imagens/professora.png"60px" height="60px">
                    <div>
                        <h4>Professora Johnson</h4>
                        <small>Administrador(a)</small>
                    </div>
                </div>
                
        </header>

        <main>
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Conteúdos Artísticos</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="tableTop">
                                    <p>Título</p>
                                    <p>Data Adicionado</p>
                                    <a href = "Adicionar Conteudo Artistico/index.php">
                                        <div class = "adicionarBtn">
                                            <button>+Adicionar</button>     
                                        </div>
                                    </a>
                                </div>
                                
                                <?php 
                                    $sql = "SELECT * FROM conteudos_artisticos";
                                    $consulta = mysqli_query($mysqli,$sql);

                                    while($dados = mysqli_fetch_array($consulta)){
                                        $id = $dados[0];
                                        $title = $dados[1];
                                        $conteudo = $dados[2];
                                        $imagem = $dados[3];
                                        $data = $dados[4];
                                        $autor = $dados[5];
                                        echo"<div class='linha'>
                                        
                                        <p>$title</p>
                                        <p>$data</p>
                                        <button class='collapsible'><i class='fas fa-arrow-down' id='iconeSeta'></i></button>
                                        <div class='content'>
                                            <img src='../Arte e suas Manifestações/Imagens/upload/$imagem' alt='' height='300px' width='300px'>
                                            <p>Título: $title</p>
                                            <p>(ID da obra: $id)</p>
                                            <p>Conteúdo: $conteudo</p>
                                            
                                        </div>
                                    </div>";
                                    }
                                    ?>
                                </div>
                                
                                
                            </div>
                        </div>

                    </div>

        </main>
    </div>

    <script src="../../js/botaoSeta.js"></script>
</body>
</html>