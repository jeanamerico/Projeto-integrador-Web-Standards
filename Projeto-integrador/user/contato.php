<?php
include('../defaultphp/headerUser.php');
?>

<title>JS ASSESSORIA LOGISTICA - Contato</title>
<link rel="stylesheet" href="../css/contato.css">
<script src="../js/validar.js"></script>

<body>
  <div class="row">
    <?php
      include('../defaultphp/nav-bar.php');
    ?>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="img-contato">
        <div class="txt-contato">
          <h1>Entre em contato conosco</h1>
          <hr>
          <p>O que podemos fazer por você ou pelo seu negócio?</p>
        </div>
      </div>
      <div class="conteiner-m-f">
        <div class="mapa-local">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.8064841714354!2d-46.43767798440082!3d-23.431356662690614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce89f75e9ef373%3A0x781895d34345c1b0!2sR.%20Parapinanga%2C%20251%20-%20Jardim%20Pres.%20Dutra%2C%20Guarulhos%20-%20SP%2C%2007170-630!5e0!3m2!1spt-BR!2sbr!4v1600468941114!5m2!1spt-BR!2sbr"
            width="1100" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
          </iframe>
        </div>

        <div class="conteiner-formulario">
          <form name="formulario" class="formulario" action="../php/form.php" method="POST">
            <fieldset class="grupo">
              <div class="campo">
                <input id="form1" type="text"  name="nome" placeholder="Nome" onkeyup="apenasnome(this);" required>
              </div>
              <div class="campo">
                <input id="form1" type="text" name="snome" placeholder="Sobrenome" onkeyup="apenasnome(this);" required>
              </div>
              <div class="campo">
                <input id="form1" type="email" name="email" placeholder="Exemplo@dominio.com.br" required>
              </div>
              <div class="campo">
                <input id="form1" type="tel" name="telefone" placeholder="ddd + Digitos" onkeyup="somenteNumeros(this);" required>
              </div>
              <div class="campo">
                <textarea id="form1" name="textarea" rows="6" cols="30" placeholder="Seu comentario aqui." onkeyup="apenasnome(this);" required></textarea>
              </div>
              <div class="campo">
                <select class="desc-opcao" name="verifica" required>
                  <option value="Consultoria">Consultoria</option>
                  <option value="Transporte">Transporte</option>
                  <option value="Exclusão"> Exclusão de dados</option>
                </select>
              </div>
              <div class="term">
                <input name="termouso"  type="checkbox" value="Concordo" onclick="validar()">
                <label for="Checkbox">Estou de acordo com o </label>
                <a href="termofuse.php">termo de uso. </a>
              </div>
              <div class="campo">
                <button class="botao" type="submit" onclick="return validar()">Enviar</button>
              </div>
            </fieldset>
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