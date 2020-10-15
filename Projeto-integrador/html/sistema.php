<?php
include('../php/verifica.php');
include('../php/conectar.php');

?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS ASSESSORIA LOGISTICA - Login</title>
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
        <div class='cadastrar-usuario'>
        <?php
        $sql = "SELECT nivel from userform WHERE nivel like nivel";//erro na seleção do banco?
        $resultado = mysqli_query($conn, $sql);//n da echo
        $teste = mysqli_fetch_array($resultado);
        if($teste == 'administrador'){
          echo "<a href='../php/cadastrar.php'>Cadastrar</a>";  
        }
        ?>
        </div>
        
      </div>
      <div class="conteudo-bd">
        <table>
          <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>Mensagem</td>
            <td>Opção</td>
            <td>Termo</td>
          </tr>
          <?php
          $sql = "SELECT * FROM formulario WHERE termo LIKE termo";
          $resultado = mysqli_query($conn, $sql);

          while ($registro = mysqli_fetch_array($resultado)) {
            $nome = $registro['Nome'];
            $sobrenome = $registro['Sobrenome'];
            $email = $registro['Email'];
            $telefone = $registro['Telefone'];
            $mensagem = $registro['Mensagem'];
            $opcao = $registro['Opcao'];
            $termo = $registro['Termo'];
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