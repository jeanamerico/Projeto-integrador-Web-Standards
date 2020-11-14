<?php
include('../php/conectar.php');
include('../defaultphp/headerLog.php');
?>

<title>JS ASSESSORIA LOGISTICA - Deletar Usuario</title>
<link rel="stylesheet" href="/css/del-user.css">

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
        <?php
        $sql = "SELECT usuario,nivel FROM userform WHERE usuario LIKE '$_SESSION[usuario]'";
        $resultconfiradm = mysqli_query($conn, $sql);
        $verificador = mysqli_fetch_array($resultconfiradm);

        $nivel = $verificador['nivel'];
        if ($nivel == 'Admin') {
          echo "
            <ul class='tabelatitulo'>
              <li class='tabela'>
                <div class='tabelausuario'>id</div>
                <div class='tabelausuario'>Usuario</div>
                <div class='tabelausuario'>Nivel</div>
                <div class='tabelausuario'>Deletar</div>
              </li>";

          $sql = 'SELECT id, usuario, nivel FROM userform';
          $resultado = mysqli_query($conn, $sql);

          while ($registro = mysqli_fetch_array($resultado)) {
            $id = $registro['id'];
            $user = $registro['usuario'];
            $level = $registro['nivel'];
            echo "<li class='info-bd'>";
            echo "<div class='id'>" . $id . "</div>";
            echo "<div class='usuario'>" . $user . "</div>";
            echo "<div class='nivel'>" . $level . "</div>";
            echo "<div class='delete'>" . "<a href=../php/delete.php?id=$registro[id]\" onclick=\" return confirm('Tem certeza que deseja excluir o cadastro?')\"><img src=../img/icons/Delete.png></a>" . "</div>";
            echo "</li>";
          }
        } else {
          echo "
              <div class='form' style='margin:305px;margin: 160px auto 342px;'>
                <p>Erro 401 favor verificar seu nivel de acesso!</p>
              </div>
              ";
        }
        ?>
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