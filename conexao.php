<?php
include 'rb.php';
// R::setup('mysql:host=localhost;dbname=redesocial','root','');
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'redesocial';

$mysqli = new mysqli($servername, $username, $password, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>;
