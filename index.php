<?php
include ('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) { {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: site.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
};
?>
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
        <form action="" method="post">
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