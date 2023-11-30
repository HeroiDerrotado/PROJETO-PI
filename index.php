<?php
 include('config.php');
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos do formulário foram preenchidos
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Hash da senha (recomendado para segurança)
        $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

        // Preparar a instrução SQL para a inserção
        $query = "INSERT INTO usuario
         (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

        // Executar a consulta
        if ($mysql->query($query) === TRUE) {
            echo "Registro inserido com sucesso";
        } else {
            echo "Erro ao inserir registro: " . $mysql->error;
        }
    } else {
        echo "Todos os campos do formulário devem ser preenchidos.";
    }
}
 
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Registro</title>
</head>

<body>
    <h2>Formulário de Registro</h2>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="email">senha:</label>
        <input type="senha" id="senha" name="senha" required>


        <input type="submit" value="Registrar">
    </form>
</body>

</html>