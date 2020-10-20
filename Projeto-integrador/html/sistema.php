<?php
include('../php/verifica.php');

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
  <link rel="stylesheet" href="../css/sistema.css">
</head>

<body>
  <div class="row">
    <ul class="subnav">
      <li><a class="tabnav" href="../index.html">Home</a></li>
      <li><a class="tabnav" href="servicos.html">Serviços</a></li>
      <li><a class="tabnav" href="contato.html">Contato</a></li>
      <li><a class="tabnav" href="../php/logout.php">Sair</a></li>
    </ul>
  </div>

  <main>
    <div class="conteiner-geral">
      <div class="apresentacao">
        <div class="boavinda">
          <h2>Olá, <?php echo $_SESSION['usuario']; ?></h2>
        </div>
      </div>
      <div class="conteudo-bd">
        <div class="conteiner-formulario">
          <form class="formulario" action="">
            <input id="form1" type="text" placeholder="Pesquise o email">
            <button class="botao" type="submit">Pesquisar</button>
          </form>
        </div>
        <table>
          <tr class="tabelatitulo">
            <td class="tabelanomes">Nome</td>
            <td class="tabelanomes">Sobrenome</td>
            <td class="tabelanomes">E-mail</td>
            <td class="tabelanomes">Telefone</td>
            <td class="tabelanomes">Mensagem</td>
            <td class="tabelanomes">Opção</td>
            <td class="tabelanomes">Termo</td>
          </tr>
          <?php
          include('../php/conectar.php');
          $sql = "SELECT * FROM formulario WHERE termo LIKE termo";
          $resultado = mysqli_query($conn, $sql);

          while ($registro = mysqli_fetch_array($resultado)) {
            $nome = $registro['nome'];
            $sobrenome = $registro['sobrenome'];
            $email = $registro['email'];
            $telefone = $registro['telefone'];
            $mensagem = $registro['mensagem'];
            $opcao = $registro['opcao'];
            $termo = $registro['termo'];
            echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $sobrenome . "</td>";
            echo "<td>" . $email . "</td>";
            echo "<td>" . $telefone . "</td>";
            echo "<td>" . $mensagem . "</td>";
            echo "<td>" . $opcao . "</td>";
            echo "<td>" . $termo . "</td>";
            echo "</tr>";
          }
          ?>

        </table>
      </div>

      <div class="rodape">
        <footer>
          <h1 class="cont-footer">Entrem em contato</h1>
          <div class="desc-tel">
            <img class="img-footer" src="../img/icons/tel.png" alt="icone do telefone">
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