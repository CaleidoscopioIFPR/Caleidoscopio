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
            <span><img class="logoCaleidoscopio" src="../Imagens/logoCaleidoscopio.png" alt="logoTitulo"
                width="50" height="50"></span>
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
                                </div>
                                <div class = "linha">
                                    <p>Arte de Rua</p>
                                    <p>19/02/2022</p>
                                    <button class='collapsible'><i class='fas fa-arrow-down' id='iconeSeta'></i></button>
                                    <div class='content'>
                                        <img src = "../Imagens/FiguraIlustrativa2.jpg"/>
                                        <h4>Título</h4>
                                        <p>Conteúdo: Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                            Nulla eu tellus purus. Praesent consectetur neque quis eros accumsan,
                                             non gravida elit malesuada. Nulla dapibus feugiat massa vel suscipit. 
                                             Suspendisse eget urna sit amet lectus venenatis luctus. Vivamus feugiat 
                                             nisi in enim tempus auctor. Sed et leo et elit egestas sodales. Integer 
                                             lobortis risus sed varius efficitur. Integer in mattis turpis. In iaculis 
                                             lorem sed vehicula eleifend. Cras sodales posuere arcu et varius. Donec suscipit 
                                             egestas sapien.</p>
                                    </div>
                                </div>
                                <?php 
                                /*

                                    $sql = "SELECT * FROM acervo";
                                    $consulta = mysqli_query($mysqli,$sql);

                                    while($dados = mysqli_fetch_array($consulta)){
                                        $imagem = $dados[0];
                                        $id = $dados[1];
                                        $dataEnvio = $dados[2];
                                        $title = $dados[3];
                                        $aut = $dados[4];
                                        $desc = $dados[5];
                                        $cat = $dados[6];
                                        echo"<div class='linha'>
                                        
                                        <p>$aut</p>
                                        <p>$cat</p>
                                        <p>$dataEnvio</p>
                                        <button class='collapsible'><i class='fas fa-arrow-down' id='iconeSeta'></i></button>
                                        <div class='content'>
                                            <img src='../../PaginaInicial/Acervo/Imagens/Upload/$imagem' alt='' height='300px' width='300px'>
                                            <p>(ID da obra: $id)</p>
                                            <p>Título: $title</p>
                                            <p>Descrição: $desc</p>
                                            <div>
                                            
                                                <button class='noBt'><span class='fas fa-times-circle'></span></button>
                                                <button class='yesBt' name='idUsuario'><span class='fas fa-check-circle'></span></button>
                                            
                                            </div>
                                        </div>
                                    </div>";
                                    
                                    }
                                    */
                                ?>
                                
                            </div>
                        </div>

                    </div>

        </main>
    </div>

    <script src="../../js/botaoSeta.js"></script>
</body>
</html>