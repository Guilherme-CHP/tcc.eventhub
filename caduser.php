<?php

include 'conexao.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];
    $idade = $_POST['idade'];

    // Verifica se o e-mail já está registrado
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('E-mail já registrado.');
        window.location.href='cadastrouser.php'; 
        </script>";
    } else {
        // Hash da senha
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere o novo usuário no banco de dados
        $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, genero, idade) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $senhaHash, $genero, $idade]);

        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário Cadastrado');
        window.location.href='index.php'; 
        </script>";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

?>;