<?php
include('conectar.php');
include('verifica.php');


$sql = "SELECT usuario,nivel FROM userform";
$resultado = mysqli_query($conn, $sql);
$verificador = mysqli_num_rows($resultado);

while ($verificador = mysqli_fetch_array($resultado)) {//vrificar if else imprimindo as 2 coisas
    $adm = $verificador['nivel'];
    if ($adm == "Admin") {
        echo '
        <li><a class="tabnav" href="deletar.php">Excluir usuario</a></li>
        <li><a class="tabnav" href="cadastro.php">Cadastrar usuario</a></li>
        ';
    } else {
        echo '
        <li><a class="tabnav" href="../index.html">Home</a></li>
        <li><a class="tabnav" href="../html/servicos.html">Serviços</a></li>
        ';
    }
}
?>