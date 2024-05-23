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
        <div class="left-login">
           <img src="img/logo-taiff.png" alt="logo">
        </div>
        
        <div class="right-login">
            <div class="card-login">
                <h1>Cadastro</h1>
                <form action="cadastro.php" method="POST">
            <div class="textfield">
                <label for="Usuario">Usuário</label>
                <input type="text" placeholder="Usuário" name="Id" required>
            </div>
            <div class="textfield">
                <label for="Email">Email</label>
                <input type="email" placeholder="Email" name="Email" required>
            </div>
            <div class="textfield">
                <label for="Senha">Senha</label>
                <input type="password" placeholder="Senha" name="Senha" required>
            </div>
                  <input type="submit" value="Cadstre-se" class="button">
            <div>
                <input type="submit" value="Ver lista" class="button">
            </div>
                </form> <br>
        </div>
    </div>
</body>
</html>

