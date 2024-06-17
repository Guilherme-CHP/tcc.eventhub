<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'redesocial';

$mysqli = new mysqli($host, $username, $password, $dbname);
$conn = new mysqli($host, $username, $password, $dbname);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>;
