<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];
include 'conexao.php';

$usuario = R::dispense('usuarios');
$usuario->nome = $nome;
$usuario->email = $email;
$usuario->senha = $senha;
$usuario->genero = $genero;
$usuario->idade = $idade;

R::store($usuario);

echo "<script language='javascript' type='text/javascript'>
    alert('Usuário Cadastrado');
    window.location.href='index.php'; 
    </script>";
    
?>;