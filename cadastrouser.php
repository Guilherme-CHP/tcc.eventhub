<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Login</title>
  <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>

  <div class="login-container">
    <h2>Formulário de Login</h2>
    <form action="caduser.php" method="post">
    <input type="text" name="nome" placeholder="Nome:" required>
      <input type="email" name="email" placeholder="E-mail:" required>
      <input type="password" name="senha" placeholder="Senha:" required>
      <input type="number" name="idade" placeholder="Idade:" required>
      <div>
         <select name="genero" required>
        <option value="" disabled selected>Selecione seu gênero:</option>
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="outro">Outro</option>
      </select>
      </div>
      <input type="submit" name="submit" id="submit" value="Cadastrar">
    </form>
    <br>
    <h2>Selecione a imagem de perfil</h2>
    <br>
    <form method="POST" enctype="multipart/form-data" action="">
      <label for="">Selecione o arquivo</label>
      <input name="arquivo" type="file">
      <button name="upload" type="submit">Enviar</button>
    </form>
  </div>

</body>

</html>