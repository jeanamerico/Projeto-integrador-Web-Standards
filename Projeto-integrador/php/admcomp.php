<?php
include('conectar.php');

$sql = "SELECT usuario FROM userform WHERE nivel LIKE 'Admin' ORDER BY 'usuario'";
$resultado = mysqli_query($conn, $sql);

if ($_SESSION['usuario'] == $resultado) {
    header('Location: ../php/pintocerto');//comparar usuario com nivel de autorização
    exit();
}
?>