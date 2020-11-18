<?php
include('../php/conectar.php');
include('../defaultphp/headerLog.php');

?>

<title>JS ASSESSORIA LOGISTICA - Primeiro acesso</title>
<link rel="stylesheet" href="../css/cad-user.css">

<body>
  <main>
    <div class="conteiner-geral">
      <div class="default-page">
        <?php
        echo "
        <div class='form'>
          <p>Cadastrar nova senha</p>
          <div class='nomeuser'> $_SESSION[usuario] </div>";
          echo "
          <form name='login-form' class='formulario' action='../php/trocarsenha.php' method='POST'>
            <input name='passwd' type='password' placeholder='Senha'/>
            <input name='passwd2' type='password' placeholder='Confirme sua senha'/>
            <button type='submit'>Cadastrar</button>
          </form>
        </div>";
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
