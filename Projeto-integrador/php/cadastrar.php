<?php
include('../php/verifica.php');
include('../php/conectar.php');

?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS ASSESSORIA LOGISTICA - Login</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style-default.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/cad_sistema.css">
</head>

<body>
  <div class="row">
    <ul class="subnav">
      <li><a class="tabnav" href="../index.html">Home</a></li>
      <li><a class="tabnav" href="../html/sistema.php">Dados</a></li>
      <li><a class="tabnav" href="logout.php">Sair</a></li>
    </ul>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="apresentacao">
        <div class="boavinda">
          <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
        </div>
      </div>
      <div class="login-page">
        <div class="form">
          <form name="login-form" class="formulario" action="../php/user_cad.php" method="POST">
            <p>Cadastrar novo usuario</p>
            <input name="user" type="text" placeholder="Usuario" />
            <input name="passwd" type="password" placeholder="Senha" />
            <div class="Nivel_acesso">
              <select class="acesso" name="nivel">
                <option value="administrador">Administrador</option>
                <option value="Comum">Comum</option>
                <option value="excluir">Excluir acesso</option>
              </select>
            </div>
            <button type="submit">Registrar</button>
          </form>
        </div>
      </div>


      <div class="rodape">
        <footer>
          <h1 class="cont-footer">Entrem em contato</h1>
          <div class="desc-tel">
            <img class="img-footer" src="../img/icons/tel.png" alt="icone do telefone">
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