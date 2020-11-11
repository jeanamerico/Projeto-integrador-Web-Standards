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
  <link rel="stylesheet" href="../css/logon.css">
</head>

<body>
  <div class="row">
    <?php
      include('../defaultphp/nav-bar.php');
    ?>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="login-page">
        <div class="form">
          <form name="login-form" class="formulario" action="../php/userform.php" method="POST">
            <input name="login" type="text" placeholder="Usuario" />
            <input name="passwd" type="password" placeholder="Senha" />
            <button type="submit">login</button>
          </form>
        </div>
      </div>
      <div class="rodape">
        <?php
          include('../defaultphp/footer.php');
        ?>
      </div>
    </div>
  </main>

</body>

</html>