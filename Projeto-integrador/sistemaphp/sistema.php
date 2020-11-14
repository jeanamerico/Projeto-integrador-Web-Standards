<?php
include('../defaultphp/headerLog.php');
?>
<title>JS ASSESSORIA LOGISTICA - Solicitações</title>
<link rel="stylesheet" href="../css/sistema.css">
<script src="../js/validar.js"></script>

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
          $sql = "SELECT nome,sobrenome,email,telefone,mensagem,opcao,termo FROM formulario";
          $resultado = mysqli_query($conn, $sql);

          include('../phpml/sistema-while.php');
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