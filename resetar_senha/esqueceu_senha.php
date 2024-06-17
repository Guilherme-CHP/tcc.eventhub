<!DOCTYPE html>
<html>
<head>
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="..//css/login.css">
</head>
<body>
    <div class="login-container">
    <h2>Redefinir Senha</h2>
    <form action="redefinir_senha.php" method="post">
        <label for="email">Digite seu e-mail</label><br>
        <input type="text" id="email" name="email" required><br><br>
        <label for="nova_senha">Digite a nova senha</label><br>
        <input type="password" id="nova_senha" name="nova_senha" required><br><br>
        <input type="submit" value="Redefinir Senha">
    </form>
    </div>
   
</body>
</html>
