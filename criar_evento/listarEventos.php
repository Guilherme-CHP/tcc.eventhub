<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListarEventos</title>
</head>

<body>
    <?php
    include 'conexao.php';
    ?>
    <div class="card" id="telaListarUsuario">
        <h2>Listar Usuários</h2>
        <div class="card-body">
            <table border="1" width="100%" class="table table-striped">
                <tr>
                    <td width="10%">ID:</td>
                    <td width="40%">Nome:</td>
                    <td width="40%">E-Mail:</td>
                    <td colspan="2" align="center">Ações</td>
                </tr>
                <?php foreach ($usuarios as $usu) { ?>
                    <tr>
                        <td><?php echo $usu->id ?></td>
                        <td><?php echo $usu->nome ?> </td>
                        <td><?php echo $usu->email ?> </td>
                        <td><a class="btn btn-outline-success" class="link" href="atualizaUsuario.php?id=<?php echo $usu->id ?>">Atualizar</a>
                        <td><a class="btn btn-outline-danger" class="link" href="apagaUsuario.php?id=<?php echo $usu->id ?>">Apagar</a>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>

</body>

</html>