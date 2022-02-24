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
            $query3 = $conexao->prepare("DELETE FROM acervo WHERE id = ?");
            $query3->execute(array($id2));
            
            if($query3 = $conexao->prepare("DELETE FROM acervo WHERE id = ?")) {
                echo"deu certo";
            }
        }

        
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Caleidoscópio - Administrador</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../CSS/painelDeControle.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
    if($adm) :
         
?>
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
                    <a href="" class="active"><span class="fas fa-columns"></span>
                    <span>Painel de Controle</span></a>
                </li>
                <li>
                    <a href="conteudosArtisticos.php"><span class="fas fa-palette"></span>
                    <span>Conteúdos Artísticos</span></a>
                </li>
                <li>
                    <a href="conta.php"><span class="far fa-user-circle"></span>
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
                    Painel de Controle
                </h2>

                <div class="user-wrapper">
                    <img src="Imagens/profile_icon.png"60px" height="60px">
                    <div>
                        <?php 
                            echo"<h4>$nome $sobrenome</h4>"
                            ?>
                        <small>Administrador(a)</small>
                        <a href="../Autenticacao/acess/logout.php"><small><strong>Sair</strong></small></a>
                    </div>
                </div>
                
        </header>

        <main>

            <!-- <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Conteúdos Artísticos</span>
                    </div>
                    <div>                    
                        <span class="fas fa-palette"></span>
                    </div>
                </div>
            
                <div class="card-single">
                    <div>
                        <h1>61</h1>
                        <span>Envios no Acervo</span>
                    </div>
                    <div>
                        <span class="fas fa-images"></span>
                    </div>
                </div>
                

                <div class="card-single">
                    <div>
                        <h1>21</h1>
                        <span>Edições</span>
                    </div>
                    <div>
                        <span class="fas fa-edit"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>152</h1>
                        <span>Solicitações Analisadas</span>
                    </div>
                    <div>
                        <span class="far fa-eye"></span>
                    </div>
                </div>

            </div>       -->
            
            

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Solicitações de envios artísticos</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="tableTop">
                                    <p>Nome do Autor</p> 
                                    <p>Projeto Pertencente</p> 
                                    <p>Data</p>
                                    <p></p>
                                    <p></p>                                    
                                </div>
                                <?php 

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
                                            <div class='botoes'>
                                            
                                                <button class='noBt'><span class='fas fa-times-circle'></span></button>
                                                <button class='yesBt' name='id'><span class='fas fa-check-circle'></span></button>
                                            
                                            </div>
                                        </div>
                                    </div>";
                                    
                                    }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

                
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Aceitar Solicitação</h3>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                <p>Selecione o ID da Imagem:</p>
                        <form action="../Acervo/index.php" method="POST">
                            <select name="id">

                            <?php

                            $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");
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

                                echo 
                                "

                                <option>$id</option>

                                ";

                            }
                            ?>
                            </select>
                            <button>Enviar Imagem</button>
                        </form>
                    </div>
                </div>

                    <div class="customers">
                        <div class="card">
                            <div class="card-header">
                                <h3>Recusar Solicitação</h3>
                            </div>
                            <div class="card-body">
                                <div class="customer">
                                    <div class="info">
                                    <p>Selecione o ID da Imagem:</p>
                            <form action="index.php" method="POST">
                                <select name="id">

                                <?php

                                $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");
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

                                    echo 
                                    "

                                    <option>$id</option>

                                    ";

                                }
                                ?>
                                </select>
                                <button class="">Excluir Imagem</button>
                            </form>
                        </div>
                    </div>


                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>Administradores</h3>

                            <!-- <button>Ver todos <span class="fas fa-arrow-right">
                            </span></button> -->
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/User_icon.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Prof. Ligia Battezzati</h4>
                                        <small>Criadora do Caleidoscopio</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        ligia.battezzati@ifpr.edu.br
                                        <br>
                                        Telefone:
                                        (41)9956-1761                               
                                    </div> 
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/User_icon.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Prof. Isis</h4>
                                        <small>Coorientadora do Projeto</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        isis.tavares@ifpr.edu.br
                                        <br>
                                        Telefone:
                                        (41)9614-0594                                   </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/User_icon.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Brenda Alves</h4>
                                        <small>Desenvolvedora</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        bre.alves2004@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9833-6023                                  </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/User_icon.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gabriel Brasil</h4>
                                        <small>Desenvolvedor</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel.paulabrasil@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922                                    </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/User_icon.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gabriel Soler</h4>
                                        <small>Desenvolvedor</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gsoler.yamamoto@gmail.com
                                        <br>
                                        Telefone:
                                        (41)8770-1616
                                    </div>
                            </div>
                                
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- <form action="../Acervo/index.php" method="POST">
                    <label>Voce tem certeza que deseja excluir essa solicitação?</label>
                    <button class='yesBt' name="btConfirmar"><span class='fas fa-check-circle'></span></button>
                    <button class='noBt' name="btExcluir"><span class='fas fa-times-circle'></span></button>
            </form>      -->
        </main>
    </div>
    <?php endif;
    ?>

    <?php if(!$adm) : ?>
    <script>
        window.location = "../../index.php"
    </script>
    <?php endif; ?>

    <script src="../Autenticacao/script/jquery.js"></script>
    <script src="adicionarEnvio.js"></script>
    <script src="excluirEnvio.js"></script>
    <script src="../../js/botaoSeta.js"></script>
</body>
</html>