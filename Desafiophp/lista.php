<?php
global $pdo;
require_once("config.php");
require("Usuario.php");
$usuario = new Usuarios($pdo);
$lista = $usuario->listarTodos($id, $nome , $email , $senha);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listar Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Lista de Usuários</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome Completo</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($lista as $user): ?>
        <tr>
            <td><?php echo htmlspecialchars($user['id']); ?></td>
            <td><?php echo htmlspecialchars($user['nome']); ?></td>
            <td><?php echo htmlspecialchars($user['email']); ?></td>
            <td><?php echo htmlspecialchars($user['senha']); ?></td>
            <td>
                <a href="InfoAt.php?id=<?php echo $user['id']; ?>">Editar</a>
                <a href="InfoDelt.php?id=<?php echo $user['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <a href="index.php">Cadastre-se</a>
    </table>
</body>
</html>
