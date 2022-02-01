<?php 
require("conexao.php");
$conexaoClass = new Conexao();
$conexao = $conexaoClass->conectar();

if (isset($_GET['t']) && isset($_POST['senha'])) {
    
            $geraToken = function () use (&$geraToken, $conexao) {
                $length = 16;
                $a = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
                $b = array();
    
                for ($i = 0; $i < $length; $i++) {
                    $r = rand(0, sizeof($a) - 1);
                    $b[$i] = $a[$r];
                }
                $token = join("", $b);
                $query = $conexao->prepare("SELECT token FROM usuario WHERE token = ?");
                $query->execute(array($token));
    
                if ($query->rowCount() > 0) {
                    return $geraToken();
                } else {
                    return $token;
                }
            };

            $newToken = $geraToken();

            try {
                $query = $conexao->prepare("UPDATE usuario SET senha = ?, token = ? WHERE token = ?");
                $query->execute(array($_POST['senha'], $newToken, $_GET['t']));
                echo "Sua senha foi atualizada";
            } catch (PDOException $erro) {
                echo "erro";
            }
};
?>

<form action="#" method="POST">
    <input type="password" name='senha'>
    <input type="submit" value="enviar">
</form>