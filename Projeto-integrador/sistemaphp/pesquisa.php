<?php
include('../php/verifica.php');
include('../php/conectar.php');
?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS ASSESSORIA LOGISTICA - Solicitações</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style-default.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/default-php.css">
  <link rel="stylesheet" href="../css/sistema.css">
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
      <div class="default-page">
        <div class="apresentacao">
          <div class="boavinda">
            <?php
            include('../php/saudacao.php');
            ?>
          </div>
        </div>
        <div class="conteudo-bd">
            <div class="conteiner-formulario">
              <form class="formulario" action="pesquisa.php" method="POST">
                <input id="form1" name="emailpesq" type="text" placeholder="Pesquise o email">
                <button class="botao" type="submit">Pesquisar</button>
              </form>
            </div>
            <ul class="tabelatitulo">
              <li class="tabela">
                <div class="tabelanomes">Nome</div>
                <div class="tabelanomes">Sobrenome</div>
                <div class="tabelanomes">E-mail</div>
                <div class="tabelanomes">Telefone</div>
                <div class="tabelanomes">Mensagem</div>
                <div class="tabelanomes">Opção</div>
                <div class="tabelanomes">Termo</div>
              </li>
            </ul>
            <?php
            $resultpesq = $_POST['emailpesq'];
            $sql = "SELECT nome,sobrenome,email,telefone,mensagem,opcao,termo FROM formulario where email like '$resultpesq'";
            $resultado = mysqli_query($conn, $sql);
            if($resultado == null || $resultpesq == null){
              echo("Favor informar um email valido para a pesquisa");
            }
            include('../php/sistema-while.php');
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