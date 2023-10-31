<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "S7ven";

    //criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    //testar conexão
    if ($conn->connect_error) {
        die("Falha na conexão:". $conn ->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>

    <div class="containercadastro">
        <h1 class="logarcom">Cadastro</h1>
        <form action="salvar-usuario.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <input class="nome" name="nome" id="nome" type="text" placeholder="Username" required>
            <input class="email" name="email" id="email" type="email" placeholder="E-mail" required>
            <input class="senha" name="senha" id="senha" type="password" placeholder="Senha" required>
            <button class="cadastrar" type="submit">Finalizar</button>
        </form>
        <p class="pgnt">Já possui login? <a href="index.php" class="c">Faça o login</a></p>
    </div>
  
</body>
</html>
