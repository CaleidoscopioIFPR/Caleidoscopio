<?php

class Conexao
{
    private $host = '127.0.0.1';
    private $usuario = 'root';
    private $senha = '';
    private $dataBase = 'bd_caleidoscopio';


    public function conectar()
    {
        try {
            $conexao = new PDO("mysql:host=$this->host;dbname=$this->dataBase", $this->usuario, $this->senha);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $erro) {
            $conexao = null;
        }
        return $conexao;
    }
};