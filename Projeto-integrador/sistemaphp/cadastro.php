<?php
include('../php/conectar.php');
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
      <?php
      include('../php/admcomp.php');
      ?>
    </ul>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="login-page">
        <?php
        $sql = "SELECT usuario,nivel FROM userform WHERE usuario LIKE '$_SESSION[usuario]'";
        $resultconfiradm = mysqli_query($conn, $sql);
        $verificador = mysqli_fetch_array($resultconfiradm);
        
        $nivel = $verificador['nivel'];
        if ($nivel == 'Admin') {
          echo "        
          <div class='form'>
            <p>Cadastrar novo usuario</p>
            <form name='login-form' class='formulario' action='../php/sendbd.php' method='POST'>
              <input name='login' type='text' placeholder='Usuario' />
              <input name='passwd' type='password' placeholder='Senha' />
              <div class='campo'>
                <select class='desc-opcao' name='verifica' required>
                <option value='Admin'>Admin</option>
                <option value='Comum'>Comum</option>
                </select>
              </div>
              <button class='botao' type='submit'>Registrar</button>
            </form>
          </div>";
        }else{
          echo "
          <div class='form'>
          <p>Erro 401 favor verificar seu nivel de acesso!</p>
          </div>";
        }
        ?>

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