<?php
include('../php/conectar.php');
include('../defaultphp/headerLog.php');
?>

<title>JS ASSESSORIA LOGISTICA - Solicitações</title>
<link rel="stylesheet" href="../css/sistema.css">

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
            include('../phpml/saudacao.php');
            ?>
          </div>
        </div>
        <div class="conteudo-bd">
          <?php
            include('../phpml/echosistem.php');
          
            $resultpesq = $_POST['emailpesq'];
            if(strlen($resultpesq) <= 6){
              echo("
              <p style='
              display: flex;
              justify-content: center;
              margin: 10% 0 215px;
              '>Favor informar um email valido para a pesquisa</p>");
            }else{
              $sql = "SELECT id,nome,sobrenome,email,telefone,mensagem,opcao,termo FROM formulario where email like '$resultpesq'";
              $resultado = mysqli_query($conn, $sql);
              include('../phpml/sistema-while.php'); 
              }
          ?>

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