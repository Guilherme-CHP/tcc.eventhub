<?php
include '..//conexao.php';

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $eventName = $_POST['event_name'];
    $eventDate = $_POST['event_date'];
    $eventTime = $_POST['event_time'];
    $eventLocation = $_POST['event_location'];
    $eventDescription = $_POST['event_description'];
    $eventImage = $_FILES['event_image']['tmp_name'];
    $imageType = $_FILES['event_image']['type'];

    // Verifica se o arquivo é uma imagem real ou falso
    $check = getimagesize($eventImage);
    if ($check === false) {
        die("O arquivo não é uma imagem.");
    }

    // Lê o conteúdo da imagem no formato binário
    $imgData = file_get_contents($eventImage);

    // Preparar e vincular
    $stmt = $conn->prepare("INSERT INTO eventos (nome, data, hora, local, descricao, imagem, imagem_tipo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $eventName, $eventDate, $eventTime, $eventLocation, $eventDescription, $imgData, $imageType);

    if ($stmt->execute()) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Evento criado com sucesso!!!');
        window.location.href='..//home.php'; 
        </script>";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>;
