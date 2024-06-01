<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuarios($pdo);
//Receber dados e cadastro
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS );
    $email =filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL) ;
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS)  ;
    $novo = $usuario->inserir($nome , $email ,$senha);
    header('Location:lista.php');
    echo  "Usuário cadastrado com sucesso!!!!";
}else{
    echo "Algo errado ao cadastrar";
}
