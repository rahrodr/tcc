<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php include("config.php");?>
    <div class="containerlogin">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input class="email" type="email" name="email" placeholder="E-mail" required>
            <input class="senha" type="password" name="senha" placeholder="Senha" required>
            <button class="entrar" type="submit">Entrar</button>
        </form>
        <p class="pgnt">Não possui login? <a href="cadastro.php" class="c">Cadastre-se</a></p>
    </div>
  
    
</body>
</html>
