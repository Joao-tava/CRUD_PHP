<?php

global $pdo;

require_once("conecta.php");
require_once("Usuarios.php");

$usuario = new Usuarios($pdo);


$lista = $usuario->listarTodos();
echo "Listando - 01:".PHP_EOL;
echo "==================================".PHP_EOL;
print_r($lista);

// Descomente para inserir um novo usuário

//$novo = $usuario->inserir("alberane","alberane@teste.com.br","123456");
//$novo = $usuario->inserir("thiago","thiago@teste.com.br","1234567");
//$novo = $usuario->inserir("jordana","jordana@teste.com.br","12345678");
//echo "Id do novo usuário: ". $novo . PHP_EOL;


// Descomente para atualizar
//$atualizado = $usuario->atualizar(3,"maria","maria@teste.com.br","novasenha");

//$lista = $usuario->listarTodos();
//echo "Listando - 02:".PHP_EOL;
//echo "==================================".PHP_EOL;
//print_r($lista);


// Descomente para deletar um ID
//$deletado = $usuario->excluir(3);
//
//$lista = $usuario->listarTodos();
//echo "Listando - 03:".PHP_EOL;
//echo "==================================".PHP_EOL;
//print_r($lista);