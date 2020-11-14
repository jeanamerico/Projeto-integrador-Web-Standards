<?php
include('defaultphp/headerUser.php');
?>
<link rel="stylesheet" href="/css/home.css">
<title>JS ASSESSORIA LOGISTICA</title>

<body>
  <div class="row">
    <?php
      include('defaultphp/nav-bar.php');
    ?>
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
        <?php
          include('defaultphp/footer.php');
        ?>
      </div>
    </div>

  </main>
</body>

</html>