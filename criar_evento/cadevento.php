<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Evento</title>
    <link rel="stylesheet" href="..//css/create_event.css">
</head>
<body>
    <div class="container">
        <h1>Criar Novo Evento</h1>
        <form action="create_event.php" method="post" enctype="multipart/form-data">
            <label for="event_name">Nome do Evento:</label>
            <input type="text" id="event_name" name="event_name" required>
            
            <label for="event_date">Data do Evento:</label>
            <input type="date" id="event_date" name="event_date" required>
            
            <label for="event_time">Hora do Evento:</label>
            <input type="time" id="event_time" name="event_time" required>
            
            <label for="event_location">Local do Evento:</label>
            <input type="text" id="event_location" name="event_location" required>
            
            <label for="event_description">Descrição do Evento:</label>
            <textarea id="event_description" name="event_description" required></textarea>
            
            <label for="event_image">Imagem do Evento:</label>
            <input type="file" id="event_image" name="event_image" accept="image/*" required>
            
            <button type="submit">Criar Evento</button>
        </form>
    </div>
</body>
</html>
    