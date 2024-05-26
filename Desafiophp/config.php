<?php
/*
$servidor="localhost";
$dbname="banco_aula";
$user = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$servidor;$dbname=$dename",$user,$password);
} catch (Exception $ex) {
echo "Erro ao conectar com o banco de dados" . $ex->getMenssage();
}
*/

$dbFile = 'banco_aula.sqlite'; // Nome do arquivo do banco de dados

try {
    $pdo = new PDO("sqlite:$dbFile");
    // Defina o modo de erro PDO para lançar exceções
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados SQLite3 estabelecida com sucesso!\n";
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados SQLite3: " . $e->getMessage() . "\n";
    die();
}
        