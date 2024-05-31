<?php
include 'conexao.php';
$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = R::load('usuarios', $id);
$usuario->cpf = $cpf;
$usuario->nome = $nome;
$usuario->email = $email;
$usuario->senha = $senha;


R::store($usuario);

    echo "<script language='javascript' type='text/javascript'>
    alert('Usuário Recuperado);
    window.location.href='index.php'; 
    </script>";
//salvar

?>