<?php
session_start();
$mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

            $msg = false;
            $titulo = isset($_POST['titulo'])?$_POST['titulo']:"";
            $autor = isset($_POST['autor'])?$_POST['autor']:"";
            $conteudo = isset($_POST['conteudo'])?$_POST['conteudo']:"";
            $imagem = isset($_FILES['arquivoImagem'])?$_FILES['arquivoImagem']:"";
            // echo "$titulo, $autor, $descricao, $categoria, $novo_nome" ;
            
    if(isset($_FILES['arquivoImagem'])){
    

        $extensao = strtolower(substr($_FILES['arquivoImagem']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "../../Arte e suas Manifestações/Imagens/upload/";


        move_uploaded_file($_FILES['arquivoImagem']['tmp_name'], $diretorio.$novo_nome);

        $sql_code = "INSERT INTO conteudos_artisticos (arquivo, id, dataEnvio, titulo, autor, conteudo) VALUES ('$novo_nome', NULL, NOW(), '$titulo', '$autor', '$conteudo')";

        if($mysqli->query($sql_code)){
            $msg = "Dados enviados com sucesso !!";
            session_start();
            $_SESSION['acervo'] = $msg;
            header('Location: ../conteudosArtisticos.php');
           
        }else{
            $msg = "Falha ao enviar conteúdo artístico, tente novamente mais tarde.";
        }
    }
        

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Celeidoscópio - Administrador</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Um ensaio sobre a arte by Caleidoscopio" />
    <meta name="robots" content="dofollow" />
    <meta http-equiv="author" content="Brenda Alves, Gabriel Brasil e Gabriel Soler" />
    <meta http-equiv="pragma" content="no-cache" />
    <link rel="stylesheet" type="text/css" href="../../../CSS/addConteudoArtistico.css">
    <link rel="stylesheet" type="text/css" href="../../../CSS/Fonts/Unna/stylesheet.css">
    <script src="https://kit.fontawesome.com/70fa70d7b9.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="LogoCaleidoscopio">
            <a href="../../../index.php"><input type="image" name="botaoCaleidoscopio" src="../../Acervo/Imagens/logoCaleidoscopio.png" width="85" heigh="85"  alt="logo"> </a>          
        </div>
        <div class="tiulos">
            <h1 class="titulos"> Adicionar conteúdo <br> artístico </h1>
        </div>

    </header>
    
    <form action="index.php" method="POST" enctype="multipart/form-data" id="formulario">

        <fieldset class="fieldsetForm1">
            <legend> Título</legend>           
            <input class="tituloInput" type="text" name="titulo" size="50" required="required">
        </fieldset>

        <fieldset class="fieldsetForm2" >
            <legend> Conteúdo</legend>
            <textarea class="descricaoInput" name="conteudo" cols="50" rows="15" maxlength=""></textarea>            
        </fieldset>

        <div id="MotherUploadTag">
            <div class="botaoUpload">
                <input type="file" name="arquivoImagem" id="uploadBtn" value="Escolha o arquivo" hidden/>
                <label for="uploadBtn">Escolha o arquivo</label>
                <span id="file-chosen">Nenhum arquivo escolhido</span>
            </div>
        </div>
        <input type="submit" name="Enviar">
    </form>

    <footer class="rodape"></footer>
    <script src="../../../js/botaoUpload.js"></script>
</body>

</html>