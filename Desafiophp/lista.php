<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuario;
$lista = $usuario->listarTodos($nome , $email , $senha);
echo "Listando ".PHP_EOL;
echo "==================================".PHP_EOL;
print_r($lista);