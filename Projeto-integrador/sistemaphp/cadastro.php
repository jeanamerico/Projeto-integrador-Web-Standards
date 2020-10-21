<?php
include('../php/verifica.php');
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS ASSESSORIA LOGISTICA</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style-default.css">
  <link rel="stylesheet" href="/css/footer.css">
  <link rel="stylesheet" href="../css/cad-user.css">
</head>

<body>
  <div class="row">
    <ul class="subnav">
      <li><a class="tabnav" href="index.php">Home</a></li>
      <li><a class="tabnav" href="cadastro.php">Cadastrar usuario</a></li>
      <li><a class="tabnav" href="sistema.php">Solicitações</a></li>
      <li><a class="tabnav" href="../php/logout.php">Sair</a></li>
    </ul>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="login-page">
        <div class="form">
          <p>Cadastrar novo usuario</p>
          <form name="login-form" class="formulario" action="../php/sendbd.php" method="POST">
            <input name="login" type="text" placeholder="Usuario" />
            <input name="passwd" type="password" placeholder="Senha" />
            <div class="campo">
              <select class="desc-opcao" name="verifica" required>
                <option value="Admin">Admin</option>
                <option value="Comum">Comum</option>
              </select>
            </div>
            <button class="botao" type="submit">Registrar</button>
          </form>
        </div>
        <div class="form">
          <p>Excluir acesso</p>
          <form name="login-form" class="formulario" action="../php/delete.php" method="POST">
            <input name="login" type="text" placeholder="Usuario" />
            <div class="campo">
            <input name="Verifica"  type="checkbox" value="Excluir">
                <label for="Checkbox">Excluir acesso</label>
            </div>
            <button class="botao" type="submit">Excluir</button>
          </form>
        </div>
      </div>
      <div class="rodape">
        <footer>
          <h1 class="cont-footer">Entrem em contato</h1>
          <div class="desc-tel">
            <img class="img-footer" src="/img/icons/tel.png" alt="">
            <p>11 2358-0870</p>
          </div>
          <p class="cont-footer">&copy Copyright 2019 - 2020</p>
          <p class="cont-footer">JS ASSESSORIA LOGISTICA | CNPJ 35.035.569/0001-77</p>
        </footer>
      </div>
    </div>

  </main>
</body>

</html>