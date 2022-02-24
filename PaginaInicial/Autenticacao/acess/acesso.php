<?php

use SendMail as GlobalSendMail;

require("conexao.php");
require("phpmailer/PHPMailer.php");
require("phpmailer/SMTP.php");


class SendMail
{
    private $mail = null;

    public function mailSend()
    {
        $this->mail = new PHPMailer\PHPMailer\PHPMailer();
        $this->mail->isSMTP();

        $this->mail->Port = "465";
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->isHTML(true);

        $this->mail->SMTPSecure = "ssl";
        $this->mail->Mailer = "smtp";

        $this->mail->CharSet = "UTF-8";

        $this->mail->SMTPAuth = true;
        $this->mail->Username = "caleidoscopio.ifpr@gmail.com";
        $this->mail->Password = "caleidoscopio2017";

        $this->mail->SingleTo = true;
        $this->mail->From = "caleidoscopio.ifpr@gmail.com";
        $this->mail->FromName = "Caleidoscopio";
    }
    public function sendMailCadastro($nome, $sobrenome, $email, $token)
    {

        $file = file_get_contents("templates/confirm.html");
        $file = str_replace("[NOME_USUARIO]", $nome, $file);
        $file = str_replace("[SOBRENOME_USUARIO]", $sobrenome, $file);
        $file = str_replace("[TOKEN]", $token, $file);

        $this->mail->addAddress($email);
        $this->mail->Subject = "Confirmação do e-mail";
        $this->mail->Body = $file;

        if (!$this->mail->send()) {
            return false;
        }
        return true;
    }
    public function sendMailEsqueci($nome, $sobrenome, $email, $token)
    {

        $file = file_get_contents("templates/esqueci.html");
        $file = str_replace("[NOME_USUARIO]", $nome, $file);
        $file = str_replace("[SOBRENOME_USUARIO]", $sobrenome, $file);
        $file = str_replace("[TOKEN]", $token, $file);

        $this->mail->addAddress($email);
        $this->mail->Subject = "Mudança de senha";
        $this->mail->Body = $file;

        if (!$this->mail->send()) {
            return false;
        }
        return true;
    }
}


class Acesso extends GlobalSendMail
{
    private $con = null;
    public function __construct($conexao)
    {
        $this->con = $conexao;
        $this->mailSend();
    }


    public function send()
    {
        if (empty($_POST) || $this->con == null) {
            echo json_encode(array("erro" => 1, "mensagem" => "ocorreu um erro interno no servidor"));
            return;
        }

        switch (true) {
            case isset($_POST['type']) && $_POST['type'] == "Login" && isset($_POST['email']) && isset($_POST['senha']):
                echo  $this->login($_POST['email'], $_POST['senha']);
                break;
            case isset($_POST['type']) && $_POST['type'] == "Cadastro" && isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['confirmarSenha']):
                echo  $this->cadastro($_POST['nome'], $_POST['sobrenome'], $_POST['email'], $_POST['senha'], $_POST['confirmarSenha']);
                break;
                case isset($_POST['type']) && $_POST['type'] == "Esqueci" && isset($_POST['email']):
                    echo  $this->esqueciSenha($_POST['email']);
                    break;
        }
    }

    public function esqueciSenha($email){
        $conexao = $this->con;
        $query = $conexao->prepare("SELECT email,nome,sobrenome,token FROM usuario WHERE email = ?");
        $query->execute(array($email));

        if ($query->rowCount()) {
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
            if ($this->sendMailEsqueci($user['nome'], $user['sobrenome'], $user['email'], $user['token'])) {
                return json_encode(array("erro" => 2, "mensagem" => "Olá {$user['nome']} {$user['sobrenome']}, por favor verifique seu e-mail"));
            }
        } else {
            return json_encode(array("erro" => 1, "mensagem" => "E-mail não encontrado"));
        }
    }


    public function login($email, $senha)
    {

        $conexao = $this->con;
        $query = $conexao->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
        $query->execute(array($email,$senha));

        if ($query->rowCount()) {
            $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

            $novasenha = md5($senha);

            if($user['senha'] == md5($senha) && $user['confirmarEmail']){
                session_start();
                $_SESSION['usuario'] = array($user['nome'], $user['sobrenome'], $user['adm']);
                return json_encode(array("erro" => 0));
            }

            if ($user['senha'] == md5($senha) && !$user['confirmarEmail']) {
                return json_encode(array("erro" => 2, "mensagem" => "Olá {$user['nome']} {$user['sobrenome']}, por favor confirme sua conta"));
            }

        } else {
            return json_encode(array("erro" => 1, "mensagem" => "Email ou senha incorretos"));
        }
    }

    public function cadastro($nome, $sobrenome, $email, $senha)
    {

        $conexao = $this->con;

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
        $token = $geraToken();

        $query = $conexao->prepare("INSERT INTO usuario (nome,sobrenome,email,senha,adm,token,confirmarEmail) VALUES (?,?,?,?,?,?,?)");
        if ($query->execute(array($nome, $sobrenome, $email, md5($senha), 0, $token,  0))) {
            /*
            session_start();
            $_SESSION['usuario'] = array($nome, $sobrenome, 0);*/

            if ($this->sendMailCadastro($nome, $sobrenome, $email, $token)) {
                return json_encode(array("erro" => 2));
            }
            
        } else {
            return json_encode(array("erro" => 1, "mensagem" => "Ocorreu um erro ao cadastrar"));
        }
    }
};
$conexao = new Conexao();
$class = new Acesso($conexao->conectar());
$class->send();