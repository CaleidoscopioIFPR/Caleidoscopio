<?php 

    session_start();
    $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<center>
    <table width='700px' height='50%' border='2px'>
        <tr>
            <td>ID</td>
            <td>TITULO</td>
            <td>AUTOR</td>
            <td>DESCRIÇÃO</td>
            <td>CATEGORIA</td>
            <td>IMAGEM</td>
            <td>DATA ENVIO</td>
        </tr>
        <?php 

    $sql = "SELECT * FROM acervo";
    $consulta = mysqli_query($mysqli,$sql);

    while($dados = mysqli_fetch_array($consulta)){
        $id = $dados[0];
        $imagem = $dados[1];
        $title = $dados[2];
        $aut = $dados[3];
        $desc = $dados[4];
        $cat = $dados[5];
        $dataEnvio = $dados[6];
        echo "

                <tr>
                    <td>$id</td>
                    <td>$title</td>
                    <td>$aut</td>
                    <td>$desc</td>
                    <td>$cat</td>
                    <td><img src='upload/$imagem'></td>
                    <td>$dataEnvio</td>
                </tr>
            ";

    }


?>
        <br>
        <br>
        <br>
        <br>
        <br>
    </table>
</center>

<body>
    crias
</body>

</html>