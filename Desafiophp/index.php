<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
        <div class="right-login">
            <div class="card-login">
                <h1>Cadastro</h1>
                <form action="Info.php" method="POST">
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
                      <a href="lista.php">Ver lista</a><br>                    
                  </div>
                </form> <br>
        </div>
    </div>
</body>
</html>

