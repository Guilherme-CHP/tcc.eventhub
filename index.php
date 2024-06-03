<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="login-container">
        <h2>Login no Eventhub</h2>
        <form action="logSite.php" method="post">
            <input type="text" name="email" placeholder="E-mail">
            <br>
            <input type="password" name="senha" placeholder="Senha">
            <br>
            <input type="submit" name="submit" value="Entrar">
        </form>
        <div class="links">
            <p>Não tem uma conta? <a href="cadastrouser.php">Cadastre-se</a></p>
            <a href="reset.senha.php">Esqueceu sua senha?</a>
        </div>
    </div>
</body>

</html>