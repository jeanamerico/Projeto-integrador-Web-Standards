<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS ASSESSORIA LOGISTICA - Serviços</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style-default.css">
  <link rel="stylesheet" href="../css/footer.css">
  <link rel="stylesheet" href="../css/servicos.css">
</head>

<body>
  <div class="row">
    <?php
      include('../defaultphp/nav-bar.php');
    ?>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="img-servicos">
        <div class="txt-servicos">
          <h1>Logistica sem fronteiras</h1>
          <hr>
          <p>Tecnologia que não encontra barreiras</p>
        </div>
      </div>
      <div class="desc-serv">
        <h1>Nossos Serviços</h1>
        <img src="../img/global/separador.png" alt="separador">
      </div>
      <div class="service">
        <div class="serv">
          <h1>Consultoria</h1>
          <div class="img-serv">
            <img src="../img/icons/icon-consultoria.png" alt="icone da consultoria">
          </div>
          <div class="txt-serv">
            <p>Com uma equipe especializada ofertamos a nossos clientes consultoria
              logística, gestão in house e serviços de gestão de estoque.</p>
          </div>
        </div>

        <div class="serv">
          <h1>Transportes</h1>
          <div class="img-serv">
            <img src="../img/icons/icon-transporte.png" alt="icone do transporte">
          </div>
          <div class="txt-serv">
            <p>Especializados em transportes e distribuição urbana para empresas
              de varejo e indústrias, temos as melhores soluções para lojistas,
              indústria alimentícia, vestuário, calçados e moda em geral.</p>
          </div>
        </div>

        <div class="serv">
          <h1>Movimentação</h1>
          <div class="img-serv">
            <img src="../img/icons/icon-movimentacao.png" alt="icone de movimentacao">
          </div>
          <div class="txt-serv">
            <p>Nossos serviços são devidamente monitorados, tornando o atendimento
              a nossos clientes mais rápido e eficaz,além de evitar perdas, o que irá proporcionar
              maior qualidade e ganho a sua operação.</p>
          </div>
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