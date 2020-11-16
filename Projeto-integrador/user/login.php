<?php
include('../defaultphp/headerUser.php');
?>
<title>JS ASSESSORIA LOGISTICA - Login</title>
<link rel="stylesheet" href="../css/logon.css">

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
          <p class="login">Login area administrativa</p>
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