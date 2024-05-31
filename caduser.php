<?php
$id = $_POST['id'];
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
include 'conexao.php';
$usuario = R::dispense('usuarios');
$usuario->cpf = $cpf;
$usuario->nome = $nome;
$usuario->email = $email;
$usuario->senha = $senha;

R::store($usuario);

echo "<script language='javascript' type='text/javascript'>
    alert('Usuário Cadastrado');
    window.location.href='index.php'; 
    </script>";
    
?>;