<?php

$mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

            $msg = false;
            $titulo = isset($_POST['titulo'])?$_POST['titulo']:"";
            $autor = isset($_POST['autor'])?$_POST['autor']:"";
            $descricao = isset($_POST['descricao'])?$_POST['descricao']:"";
            $categoria =  isset($_POST['meios'])?$_POST['meios']:"";
            $imagem = isset($_FILES['arquivoImagem'])?$_FILES['arquivoImagem']:"";
            // echo "$titulo, $autor, $descricao, $categoria, $novo_nome" ;
            
    if(isset($_FILES['arquivoImagem'])){
    

        $extensao = strtolower(substr($_FILES['arquivoImagem']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "Imagens/Upload/";


        move_uploaded_file($_FILES['arquivoImagem']['tmp_name'], $diretorio.$novo_nome);

        $sql_code = "INSERT INTO acervo (arquivo, id, dataEnvio, titulo, autor, categoria, descricao) VALUES ('$novo_nome', NULL, NOW(), '$titulo', '$autor', '$categoria', '$descricao')";

        if($mysqli->query($sql_code)){
            $msg = "Dados enviados com sucesso !!";
            session_start();
            $_SESSION['acervo'] = $msg;
            header('Location: ../Administrador/index.php');
           
        }else{
            $msg = "Falha ao enviar dados da obra, tente novamente mais tarde.";
        }
    }
        

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../CSS/addImagem.css">
    <link rel="stylesheet" type="text/css" href="../../CSS/Fonts/thabitregular/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="LogoCaleidoscopio">
            <a href="../../index.php"><input type="image" name="botaoCaleidoscopio" src="Imagens/logoCaleidoscopio.png"
                    width="85" heigh="85" alt="logo"> </a>
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
                    <a class="itens" href="../Acervo/index.html">Acervo</a>
                    <a class="itens" href="../Arte e suas Manifestações/index.html">Arte e suas manifestações</a>
                    <a class="itens" href="../SobreNós/index.html">Sobre Nós</a>
                    <a class="itens" href="../Cadastro/index.html">Perfil</a>
                </div>
        </div>
        </nav>
    </header>
    
    <div id="icone">
        <i class="fas fa-plus addIcon"></i>
        <i class="fas fa-image pictureIcon"></i>
    </div>
    <form action="adicionarImagem.php" method="POST" enctype="multipart/form-data" id="formulario">

        <fieldset class="fieldsetForm1">
            <legend class="legenda"> Dê um título à sua obra</legend>
            <input class="tituloInput" type="text" name="titulo" size="50" required="required" placeholder="Título">
        </fieldset>

        <fieldset class="fieldsetForm3">
            <legend class="legenda"> Autor</legend>
            <input class="autorInput" type="text" name="autor" size="50" placeholder="Opcional">
        </fieldset>


        <fieldset class="fieldsetForm2">
            <legend class="legenda"> Descreva o momento</legend>
            <textarea class="descricaoInput" name="descricao" cols="50" rows="5" maxlength="255"
                placeholder="Descreva o momento"></textarea>
        </fieldset>

        <div id="MotherUploadTag">
            <div class="botaoUpload">
                <input type="file" name="arquivoImagem" id="uploadBtn" value="Escolha o arquivo" hidden />
                <label for="uploadBtn">Escolha o arquivo</label>
                <span id="file-chosen">

                </span>
            </div>

            <div class="botaoSelect">
                <!-- <p class="projeto">Projeto pertencente:</p> -->
                <select name="meios">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="artesVisuais">Artes Visuais</option>
                    <option value="teatro">Teatro</option>
                    <option value="musica">Música</option>
                    <option value="danca">Dança</option>
                    <option value="audioVisual">Audiovisual</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
        </div>
        <input type="submit" name="Enviar">
    </form>

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
    <div class = "copyright">
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
    <script src="../../js/botaoUpload.js"></script>
</body>