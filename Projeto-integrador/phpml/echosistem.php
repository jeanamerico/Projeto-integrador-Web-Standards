<?php
echo '
    <div class="conteiner-formulario">
      <form name="formulario" class="formulario" action="pesquisa.php" method="POST">
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
        <div class="tabelanomes">Arquivar</div>
      </li>
    </ul>
';
