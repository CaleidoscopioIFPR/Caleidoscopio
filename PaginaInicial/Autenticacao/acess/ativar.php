<?php
require("conexao.php");
$conexaoClass = new Conexao();
$conection = $conexaoClass->conectar();

if (isset($_GET['t'])) {
    $query = $conection->prepare("SELECT confirmarEmail FROM usuario WHERE token = ?");
    $query->execute(array($_GET['t']));

    if ($query->rowCount() == 1) {
        $confirmarEmail = $query->fetchAll(PDO::FETCH_ASSOC)[0]["confirmarEmail"];

        if (!$confirmarEmail) {
            $geraToken = function () use (&$geraToken, $conection) {
                $length = 16;
                $a = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
                $b = array();
    
                for ($i = 0; $i < $length; $i++) {
                    $r = rand(0, sizeof($a) - 1);
                    $b[$i] = $a[$r];
                }
                $token = join("", $b);
                $query = $conection->prepare("SELECT token FROM usuario WHERE token = ?");
                $query->execute(array($token));
    
                if ($query->rowCount() > 0) {
                    return $geraToken();
                } else {
                    return $token;
                }
            };

            $newToken = $geraToken();

            try {
                $query2 = $conection->prepare("UPDATE usuario SET confirmarEmail = ?, token = ? WHERE token = ?");
                $query2->execute(array(1, $newToken, $_GET['t']));
                echo "Sua conta foi confirmada";
            } catch (PDOException $erro) {
                echo "erro";
            }
        } else {
            echo "Sua conta já foi confirmada";
        }
    } else {
        echo "token nao encontrado";
    }
};