<?php
include('conectar.php');
include('verifica.php');


$sql = "SELECT usuario,nivel FROM userform WHERE usuario LIKE '$_SESSION[usuario]'"; 
$resultconfiradm = mysqli_query($conn, $sql);


$verificador = mysqli_fetch_array($resultconfiradm);
$nivel = $verificador['nivel'];
if ($nivel == "Admin") {
    echo '
    <li><a class="tabnav" href="deletar.php">Excluir usuario</a></li>
    <li><a class="tabnav" href="cadastro.php">Cadastrar usuario</a></li>
    <li><a class="tabnav" href="sistema.php">Solicitações</a></li>
    <li><a class="tabnav" href="../php/logout.php">Sair</a></li>
    ';
} else if ($nivel == "Comum"){
    echo '
    <li><a class="tabnav" href="../index.html">Home</a></li>
    <li><a class="tabnav" href="../html/servicos.html">Serviços</a></li>
    <li><a class="tabnav" href="../sistemaphp/sistema.php">Solicitações</a></li>
    <li><a class="tabnav" href="../php/logout.php">Sair</a></li>
    ';
}else{
    include("logout.php");
}
?>