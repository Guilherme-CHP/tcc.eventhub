<?php

include '..//conexao.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Recebe os dados do formulário
    $email = $_POST['email'];
    $novaSenha = $_POST['nova_senha'];

    // Verifica se o e-mail existe no banco de dados
    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->execute([$email]);
    $usuario = $stmt->fetch();

    if ($usuario) {
        // Atualiza a senha no banco de dados
        $stmt = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $stmt->execute([password_hash($novaSenha, PASSWORD_DEFAULT), $email]);

        echo "<script language='javascript' type='text/javascript'>
        alert('Senha redefinida com sucesso!!!');
        window.location.href='..//index.php'; 
        </script> $email.";
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('E-mail não encontrado.');
        window.location.href='..//index.php'; 
        </script> $email.";
    }

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>;