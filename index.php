<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <h2>Login no Eventhub</h2>
        <form action="logSite.php" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit">Login:</button>
        </form>
        <div class="links">
            <a href="register.php">Não tem uma conta? Cadastre-se</a>
            <a href="reset.senha.php">Esqueceu sua senha?</a>
        </div>
    </div>
</body>

</html>
