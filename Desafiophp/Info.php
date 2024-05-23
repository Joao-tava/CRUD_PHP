<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuario;
//Receber dados e cadastro
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'] ;
    $novo = $usuario->inserir($nome, $email , $senha);

}
/*
//Mostrar dados 
elseif($_){
    $lista = usuario->listarTodos($nome , $email , $senha);

}
//Atualizar os dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'] ;
$atualizar = usuario->atualizar();
}

//Excluir os dados 
else(){
$delete = usuario->excluir();
}
*/