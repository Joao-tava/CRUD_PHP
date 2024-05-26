<!DOCTYPE html>
<?php
global $pdo;
require 'confi.php';
require 'Usuario.php';
$usario = new Usuario($pdo);


?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="main-login">
        
        <div class="right-login">
            <div class="card-login">
                <h1>Deletar</h1>
                <form action="InfoDelt.php" method="POST">
            <div class="textfield">
                <label for="nome">Usuário</label>
                <input type="text" placeholder="Usuário" name="nome" id="nome" required>
            </div>
            <div class="textfield">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email"  id="email" required>
            </div>
            </div>
                  <div>
                      <a href="Index.php">Cadastre-se</a><br>
                      <a href="Atualizar.php">Atualizar</a>
                  </div>
                </form> <br>
        </div>
    </div>
</body>
</html>