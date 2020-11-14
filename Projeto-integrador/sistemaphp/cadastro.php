<?php
include('../php/conectar.php');
include('../defaultphp/headerLog.php');
?>

<title>JS ASSESSORIA LOGISTICA - Cadastro</title>
<link rel="stylesheet" href="../css/cad-user.css">

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
      <div class="default-page">
        <div class="apresentacao">
          <div class="boavinda">
            <?php
            include('../php/saudacao.php');
            ?>
          </div>
        </div>
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
          <div class='form' style='margin:160px 0;'>
          <p>Erro 401 favor verificar seu nivel de acesso!</p>
          </div>";
        }
        ?>

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