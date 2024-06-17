<?php
session_start();

include 'conexao.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];

        header("Location: home.php");
        exit();
    } else {
        echo "<script language='javascript' type='text/javascript'>
    alert('Usuário ou senha esta incorreto!!!!!');
    window.location.href='index.php'; 
    </script>";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

?>;