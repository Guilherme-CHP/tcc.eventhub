
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="login-container">
        <h2>Recuperar Senha</h2>
        <form action="atusenha.php" method="post">
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" name="email" required value="<?php echo $usuario->email ?>" size="54px">
            </div>
            <div class="form-group">
                <label for="senha">Digite a sua nova senha:</label>
                <input type="text" name="senha" required value="<?php echo $usuario->senha ?>" size="54px">
            </div>
            <button type="submit">Recuperar</button>
        </form>
    </div>
</body>

</html>