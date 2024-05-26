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
                <label for="nome">Usuário</label>
                <input type="text" placeholder="Usuário" name="nome" id="nome" required>
            </div>
            <div class="textfield">
                <label for="email">Email</label>
                <input type="email" placeholder="Email" name="email"  id="email" required>
            </div>
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" placeholder="Senha" name="senha" id="senha" required>
            </div>
                  <input type="submit" value="Cadstre-se" class="button">
            <div>
                <input type="submit" value="Ver lista" class="button"
                   <?php
                   $lista = $usuario->listarTodos($nome , $email , $senha);
echo "Listando ".PHP_EOL;
echo "==================================".PHP_EOL;
print_r($lista);
                   ?>>
            </div>
                  <div>
                      <a href="Deletar.php">Deletar</a><br>
                      <a href="Index.php">Cadastre-se</a>
                  </div>
                </form> <br>
        </div>
    </div>
</body>
</html>