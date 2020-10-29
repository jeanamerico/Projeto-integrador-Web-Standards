<?php
include('conectar.php');
include('verifica.php');

$sql = "SELECT usuario FROM userform";
$resultado = mysqli_real_escape_string($conn, $sql);

while($verificador = mysqli_fetch_array($sql)){
    $adm = $verificador['nivel'];
    if($adm = 'admin'){
        echo '
        <li><a class="tabnav" href="deletar.php">Excluir usuario</a></li>
        <li><a class="tabnav" href="cadastro.php">Cadastrar usuario</a></li>
        ';
    }else{
        echo '
        <li><a class="tabnav" href="../index.html">Home</a></li>
        <li><a class="tabnav" href="../html/servicos.html">Serviços</a></li>
        ';
    }
}
?>