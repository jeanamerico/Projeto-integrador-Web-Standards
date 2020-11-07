<?php
include('conectar.php');
include('verifica.php');

$sql = "SELECT usuario,nivel FROM userform WHERE usuario LIKE '$_SESSION[usuario]'";
$resultconfiradm = mysqli_query($conn, $sql);

$verificador = mysqli_fetch_array($resultconfiradm);

$nivel = $verificador['nivel']; /*arrumar bug nivel admin echo navrow*/
if ($nivel != 'Admin') {
    include('logout.php');
    exit();
}
?>