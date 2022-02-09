<?php

session_start();

if (isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])) {
    require("acess/conexao.php");

    $conexaoClass = new Conexao();
    $conexao = $conexaoClass->conectar();

    $nome = $_SESSION['usuario'][0];
    $sobrenome = $_SESSION['usuario'][1];
    $adm = $_SESSION['usuario'][2];
} else {
    echo "<script>window.location = 'index.html'</script>";
}


?>


<html lang="pt_BR">

<body>
    <?php if ($adm) : ?>

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
    <link rel="stylesheet" type="text/css" href="../../CSS/painelDeControle.css">
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
                    <a href="" class="active"><span class="fas fa-columns"></span>
                    <span>Painel de Controle</span></a>
                </li>
                <li>
                    <a href="conteudosArtisticos.html"><span class="fas fa-palette"></span>
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
                    Painel de Controle
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

            <div class="cards">
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

            </div>            

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Solicitações de envios artísticos</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="tableTop">
                                    <p>Nome do Aluno</p> 
                                    <p>Projeto Pertencente</p> 
                                    <p>Data</p>
                                    <p></p>
                                    <p></p>                                    
                                </div>
                                <div class="linha">
                                    <p>Roberto Carlos</p>
                                    <p>Dançart</p>
                                    <p>21/4</p>
                                    <button class="collapsible"><i class="fas fa-arrow-down" id="iconeSeta"></i></button>
                                    <div class="content">
                                        <img src="Imagens/professora.png" alt="" height="300px" width="300px">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div>
                                            <button class="noBt"><span class="fas fa-times-circle"></span></button>
                                            <button class="yesBt"><span class="fas fa-check-circle"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="linha">
                                    <p>Frank Sinatra</p>
                                    <p>Poesiando</p>
                                    <p>19/4</p>
                                    <button class="collapsible"><i class="fas fa-arrow-down" id="iconeSeta"></i></button>
                                    <div class="content">
                                        <img src="Imagens/professora.png" alt="" height="300px" width="300px">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div>
                                            <button class="noBt"><span class="fas fa-times-circle"></span></button>
                                            <button class="yesBt"><span class="fas fa-check-circle"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="linha">
                                    <p>Stevie Wonder</p>
                                    <p>Rabiscando</p>
                                    <p>13/4</p>
                                    <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        <img src="Imagens/serriceti.jpg" alt="" height="300px" width="300px">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div>
                                            <button class="noBt"><span class="fas fa-times-circle"></span></button>
                                            <button class="yesBt"><span class="fas fa-check-circle"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="linha">
                                    <p>Michael Jackson</p>
                                    <p>Dançart</p>
                                    <p>07/4</p>
                                    <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        <img src="Imagens/serriceti.jpg" alt="" height="300px" width="300px">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div>
                                            <button class="noBt"><span class="fas fa-times-circle"></span></button>
                                            <button class="yesBt"><span class="fas fa-check-circle"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="linha">
                                    <p>Barry White</p>
                                    <p>Poesiando</p>
                                    <p>29/3</p>
                                    <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        <img src="Imagens/serriceti.jpg" alt="" height="300px" width="300px">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <div>
                                            <button class="noBt"><span class="fas fa-times-circle"></span></button>
                                            <button class="yesBt"><span class="fas fa-check-circle"></span></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Nome do Aluno</td>
                                            <td>Projeto Pertencente</td>
                                            <td>Data</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Roberto Carlos</td>
                                            <td>Poesiando</td>
                                            <td>
                                                <span class="status purple"></span>
                                                21/4
                                            </td>
                                            <td>
                                                <button class="collapsible"><span class="fas fa-arrow-down"></span></button>                                                                                             
                                            </td>                                           
                                                                              
                                        </tr>
                                        <tr>
                                            <td>Frank Sinatra</td>
                                            <td>Dançart</td>
                                            <td>
                                                <span class="status pink"></span>
                                                18/4
                                            </td>
                                            <td><button class="collapsible"><span class="fas fa-arrow-down"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Stevie Wonder</td>
                                            <td>Rabiscando</td>
                                            <td>
                                                <span class="status orange"></span>
                                                08/4
                                            </td>
                                            <td><button class="collapsible"><span class="fas fa-arrow-down"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Michael Jackson</td>
                                            <td>Dançart</td>
                                            <td>
                                                <span class="status purple"></span>
                                                24/3
                                            </td>
                                            <td><button class="collapsible"><span class="fas fa-arrow-down"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Barry White</td>
                                            <td>Poesiando</td>
                                            <td>
                                                <span class="status pink"></span>
                                                17/3
                                            </td>
                                            <td><button class="collapsible"><span class="fas fa-arrow-down"></span></button></td>
                                        </tr>
                                        <tr>
                                            <td>Billy Paul</td>
                                            <td>Rabiscando</td>
                                            <td>
                                                <span class="status orange"></span>
                                                12/3
                                            </td>
                                            <td><button class="collapsible"><span class="fas fa-arrow-down"></span></button></td>
                                        </tr>
                                    </tbody>
                                </table> -->
                            </div>
                        </div>
                        <table width="40%" border="1px">
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>Nome</strong></td>
            <td><strong>Sobrenome</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Senha</strong></td>
            <td><strong>ADM</strong></td>
        </tr>

         <?php

            $query = $conexao->prepare("SELECT * FROM usuario");
            $query->execute();

            $users = $query->fetchAll(PDO::FETCH_ASSOC);

            for ($i = 0; $i < sizeof($users); $i++) :
                $usuarioAtual = $users[$i];

            ?>
        <tr>
            <td><?php echo $usuarioAtual['id'] ?></td>
            <td><?php echo $usuarioAtual['nome'] ?></td>
            <td><?php echo $usuarioAtual['sobrenome'] ?></td>
            <td><?php echo $usuarioAtual['email'] ?></td>
            <td><?php echo $usuarioAtual['senha'] ?></td>
            <td><?php echo $usuarioAtual['adm'] ?></td>

        </tr>
        <?php endfor; ?> 
    </table>
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
                                    <img src="Imagens/serriceti.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gabriel Brasil</h4>
                                        <small>CEO Caleidoscopas</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922
                                        <!-- Email:
                                        <div class="email">
                                            gabriel@gmail.com
                                        </div>
                                        <br>
                                        Telefone:
                                        <div class="telefone">
                                            (41)9922-9922
                                        </div>    -->                                     
                                    </div> 
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/serriceti.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Brenda Alves</h4>
                                        <small>Diretora Caleidoscopas</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922                                    </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/serriceti.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Gabriel Soler</h4>
                                        <small>Chefe Executivo Caleidoscopas</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922                                    </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/serriceti.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Prof. Lidia</h4>
                                        <small>Fundadora Caleidoscopas</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922                                    </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="Imagens/serriceti.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Prof. Isis</h4>
                                        <small>Auxiliar Adminsitrativa Caleidoscopas</small>
                                    </div>
                                </div>
                                <button class="collapsible"><span class="fas fa-arrow-down" id="iconeSeta"></span></button>
                                    <div class="content">
                                        Email:
                                        gabriel@gmail.com
                                        <br>
                                        Telefone:
                                        (41)9922-9922                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script src="../../js/botaoSeta.js"></script>
</body>
</html>

    <?php endif; ?>
    <a href="acess/logout.php">Sair</a>
</body>

</html>