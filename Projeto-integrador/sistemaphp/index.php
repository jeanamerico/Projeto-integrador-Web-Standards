<?php
include('../php/verifica.php');
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
  <link rel="stylesheet" href="/css/home.css">
</head>

<body>
  <div class="row">
    <ul class="subnav">
      <li><a class="tabnav" href="index.php">Home</a></li>
      <li><a class="tabnav" href="caduser.php">Cadastrar usuario</a></li>
      <li><a class="tabnav" href="sistema.php">Solicitações</a></li>
      <li><a class="tabnav" href="../php/logout.php">Sair</a></li>
    </ul>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="conteiner-slogan">
        <div class="imagem-slogan">
          <div class="imagem-txt">
            <h1 class="slogan-desc">JS ASSESSORIA LOGISTICA</h1>
            <hr>
            <p class="slogan-desc">Inteligencia em serviços logisticos.</p>
          </div>
        </div>
      </div>

      <div class="conteiner-tecnologia">
        <div class="tecnologia-slogan">
          <img src="/img/home/tecnologia.jpg" alt="tecnologia-imagem">
        </div>

        <div class="espacamento">
          <h1 class="titulo">Tecnologia</h1>
          <img class="separador" src="/img/global/separador.png" alt="Separador">
          <p class="desc">Nossa empresa dispõe de tecnologia WMS, TMS e atuando com nossos clientes tanto na gestão
            INBOUND quanto OUTBOUND, atingimos os resultados de forma precisa e segura.
          </p>
        </div>
      </div>

      <div class="conteiner-carga">
        <div class="carga-slogan">
          <img src="/img/home/frota_caminhao.png" alt="frota_de_caminhao">
        </div>

        <div class="espacamento">
          <h1 class="titulo">Sua carga entregue no horario</h1>
          <img class="separador" src="/img/global/separador.png" alt="Separador">
          <p class="desc">Com uma frota moderna e monitorada durante todo o trajeto, nossos clientes podem contar com
            pontualidade e qualidade nas entregas de seus produtos.
          </p>
        </div>
      </div>

      <div class="conteiner-parceiros">
        <div class="parceiro-slogan">
          <img class="parceiro-img" src="/img/home/parceiros.jpg" alt="img-parceiro">
        </div>

        <div class="espacamento">
          <h1 class="titulo">Seja nosso parceiro</h1>
          <img class="separador" src="/img/global/separador.png" alt="Separador">
          <p class="desc">Nossos negócios são desevolvidos com base em parcerias duradouras e saudáveis, assim cada
            proposta e cada escopo é avaliado junto com nossos clientes, obtendo não só os melhores resultados mais
            também o melhor custo benefício.
          </p>
        </div>
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