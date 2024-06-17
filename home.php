<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: logSite.php");
    exit();
}

include 'conexao.php';


if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Buscar eventos do banco de dados em ordem decrescente de criação (assumindo que a coluna 'id' é auto_increment)
$sql = "SELECT nome, data, hora, local, descricao, imagem, imagem_tipo FROM eventos ORDER BY id DESC";
$result = $conn->query($sql);

if ($result === false) {
    die("Erro na consulta SQL: " . $conn->error);
}
?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventhub</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="css/site.css">
</head>

<body>
    <nav>
        <div class="container">
            <h2 class="logo">
                EventHub
            </h2>
            <div class="create">
                <label for="create-post"><a class="btn btn-primary" href="logout.php">Sair do EventHub</a></label>
            </div>

        </div>
    </nav>

    <!-------------------------------- MAIN ----------------------------------->
    <main>
        <div class="container">
            <!----------------- LEFT -------------------->
            <div class="left">
                <a class="profile">
                    <div class="profile-photo">
                        <img src="./images/profile-1.jpg">
                    </div>
                    <div class="handle">
                        <h4><?php echo $_SESSION['usuario_nome']; ?></h4>
                    </div>
                </a>

                <!----------------- SIDEBAR -------------------->
                <div class="sidebar">
                    <a class="menu-item active">
                        <span><i class="uil uil-home"></i></span>
                        <h3>Home</h3>
                    </a>
                    <a class="menu-item">
                        <span><i class="uil uil-compass"></i></span>
                        <h3>Eventos</h3>
                    </a>
                    <!--------------- END NOTIFICATION POPUP --------------->
                    </a>
                    <a class="menu-item" id="messages-notifications">
                        <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span>
                        <h3>Messages</h3>
                    </a>
                    <a class="menu-item" id="theme">
                        <span><i class="uil uil-palette"></i></span>
                        <h3>Theme</h3>
                    </a>
                </div>
                <!----------------- END OF SIDEBAR -------------------->
                <label for="create-post"><a class="btn btn-primary" href="criar_evento/cadevento.php">Create
                        Post</a></label>

            </div>

            <!----------------- MIDDLE -------------------->
            <div class="middle">
                <!----------------- FEEDS -------------------->
                <div class="feeds">
                    <!----------------- FEED 1 -------------------->
                    <div class="feed">
                        <?php
                        if ($result->num_rows > 0) {
                            // Saída de dados de cada linha
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='event'>";
                                echo "<div class='info'>";
                                echo "<h2>" . $row["nome"] . "</h2>";
                                echo "<p><strong>Imagem do Evento:</strong></p>";
                                echo "</div>";
                                echo "<img src='data:" . $row["imagem_tipo"] . ";base64," . base64_encode($row["imagem"]) . "' alt='" . $row["nome"] . "' style='max-width: 100%; height: auto;'>";
                                echo "<p><strong>Data:</strong> " . $row["data"] . "</p>";
                                echo "<p><strong>Hora:</strong> " . $row["hora"] . "</p>";
                                echo "<p><strong>Local:</strong> " . $row["local"] . "</p>";
                                echo "<p><strong>Descrição:</strong> " . $row["descricao"] . "</p>";
                                echo "</div>";
                            }
                        } else {
                            echo "<p>Nenhum evento encontrado.</p>";
                        }
                        $conn->close();
                        ?>
                    </div>
                    <!----------------- END OF FEED 1 -------------------->
                </div>
                <!----------------- END OF FEEDS -------------------->
            </div>
            <!----------------- END OF MIDDLE -------------------->

            <!----------------- RIGHT -------------------->
            <div class="right">
                <!------- MESSAGES ------->
                <div class="messages">
                    <div class="heading">
                        <h4>Messages</h4>
                        <i class="uil uil-edit"></i>
                    </div>
                    <!------- SEARCH BAR ------->
                    <div class="search-bar">
                        <i class="uil uil-search"></i>
                        <input type="search" placeholder="Search messages" id="message-search">
                    </div>
                    <!------- MESSAGES CATEGORY ------->
                    <div class="category">
                        <h6 class="active">Primary</h6>
                        <h6 class="message-requests">Requests (7)</h6>
                    </div>
                    <!------- MESSAGES ------->
                    <div class="message">
                        <div class="profile-photo">
                            <img src="./images/profile-6.jpg">
                        </div>
                        <div class="message-body">
                            <h5>Daniella Jackson</h5>
                            <p class="text-bold">2 new messages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------- END OF RIGHT -------------------->
        </div>
    </main>
    <!----------------- THEME CUSTOMIZATION -------------------->
    <div class="customize-theme">
        <div class="card">
            <h2>Customize your view</h2>
            <p class="text-muted">Manage your font size, color, and background</p>

            <!----------- FONT SIZE ----------->
            <div class="font-size">
                <h4>Font Size</h4>
                <div>
                    <h6>Aa</h6>
                    <div class="choose-size">
                        <span class="font-size-1"></span>
                        <span class="font-size-2 active"></span>
                        <span class="font-size-3"></span>
                        <span class="font-size-4"></span>
                        <span class="font-size-5"></span>
                    </div>
                    <h3>Aa</h3>
                </div>
            </div>

            <!----------- PRIMARY COLORS ----------->
            <div class="color">
                <h4>Color</h4>
                <div class="choose-color">
                    <span class="color-1 active"></span>
                    <span class="color-2"></span>
                    <span class="color-3"></span>
                    <span class="color-4"></span>
                    <span class="color-5"></span>
                </div>
            </div>

            <!----------- BACKGROUND COLORS ----------->
            <div class="background">
                <h4>Background</h4>
                <div class="choose-bg">
                    <div class="bg-1 active">
                        <span></span>
                        <h5 for="bg-1">Light</h5>
                    </div>
                    <div class="bg-2">
                        <span></span>
                        <h5 for="bg-2">Dim</h5>
                    </div>
                    <div class="bg-3">
                        <span></span>
                        <h5 for="bg-3">Dark</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>