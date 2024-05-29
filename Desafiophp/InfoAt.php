<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuarios($pdo);
//Receber dados e cadastro
$id = $_GET['id'];
$user = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS );
    $email =filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL) ;
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS)  ;
    $atualizar  = $usuario->atualizar($id,$nome ,$email, $senha);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Editar Usuário</h2>
    <form method="post">
        <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $nome//ERRO NÃO MOSTRA O NOME?>" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $email//ERRO NÃO MOSTRA O EMAIL?>" required><br>
        <label for="nome">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br>
        <input type="submit" value="Atualizar">
    </form>
    <?php if (isset($mensagem)) echo "<p>$mensagem</p>"; ?>
</body>
</html>