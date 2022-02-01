<?php
    $mysqli = mysqli_connect("localhost","root","","bd_caleidoscopio");

    $usu_codigo = intval$_GET['usuario']

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
        }

    $sql_code = "DELETE FROM acervo WHERE id = '$usu_codigo'"
    $sql_query = $mysqli->($sql_code) or die($mysqli->error);
    
    if($sql_query)
        echo "
        <script>
            location.href='index.php?p=inicial'; 
        </script>"
    else
        echo "
        <script>
            alert('Nao foi possível deletar o usuário.')
            location.href='index.php?p=inicial' 
        </script>"
    
?>

