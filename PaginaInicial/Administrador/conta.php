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
    <link rel="stylesheet" type="text/css" href="../../CSS/contaAdm.css">
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
                    <a href="conteudosArtisticos.php"><span class="fas fa-palette"></span>
                    <span>Conteúdos Artísticos</span></a>
                </li>
                <li>
                    <a href="" class="active"><span class="far fa-user-circle"></span>
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
                    Conta
                </h2>

                <div class="user-wrapper">
                    <img src="Imagens/profile_icon.png"60px" height="60px">
                    <div>
                        <?php 
                            echo"<h4>$nome $sobrenome</h4>"
                            ?>
                        <small>Administrador(a)</small>
                    </div>
                </div>
                
        </header>

       <!-- <main>
             <div class="card-body">
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>           
                <h2>Animated Accordion</h2>
                <p>Click on the buttons to open the collapsible content.</p>
                <button class="accordion">Section 1</button>
                <div class="panel">
                    <img src="Imagens/professora.png" alt="">
                </div>
                <button class="accordion">Section 2</button>
                <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <button class="accordion">Section 3</button>
            </div> 

            

        </main>-->

        <div class="wrapper">
            <div class="left">
                <img src="Imagens/profile_icon.png" 
                alt="user" width="100">
            </div>
            <div class="right">
                <div class="info">
                    <h3>Informações</h3>
                    <div class="info_data">
                        <div class="data">
                            <h4>Nome Completo</h4>
                            <?php 
                                echo"<h4>$nome $sobrenome</h4>"
                            ?>
                         </div>
                         <div class="data">
                            <h4>E-mail</h4>
                            <p>brauzerbrabo@gmail.com</p>
                         </div>
                         <div class="data">
                           <h4>Telefone</h4>
                            <p>0001-213-998761</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="../../js/botaoSeta.js"></script>
</body>
</html>