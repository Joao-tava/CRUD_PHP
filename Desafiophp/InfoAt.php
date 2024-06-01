<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuarios($pdo);
//Receber dados e atualizar
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS );
    $email =filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL) ;
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS)  ;
    $atualizar  = $usuario->atualizar($id,$nome ,$email, $senha);
    var_dump($user);
    header('Location:lista.php');
    exit();
}else{
    $mens = "Usuário não atualizado";
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
        <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($user['nome']); ?>" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']) ;//ERRO NÃO MOSTRA O EMAIL?>" required><br>
        <label for="nome">Senha:</label><br>
        <input type="password" id="senha" name="senha" required><br>
        <input type="submit" value="Atualizar">
    </form>
    
        
</body>
</html>