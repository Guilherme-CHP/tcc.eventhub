<?php
session_start();

// Encerra a sessão
session_destroy();

// Redireciona de volta para a página de login
header("Location: index.php");
exit();
?>
