<?php
global $pdo;

require_once("config.php");
require_once("Usuario.php");

$usuario = new Usuarios($pdo);
//Receber dados e deletar
$id = $_GET['id'];
$deletar = $usuario->excluir($id);
header('Location lista.php');
exit();