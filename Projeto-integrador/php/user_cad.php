<?php
include('conectar.php');
include('verifica.php');

$user = filter_input(INPUT_POST, 'user');
$passwd = filter_input(INPUT_POST, 'passwd');
$tipo = filter_input(INPUT_POST, 'nivel');


$inserirbd = "INSERT INTO userform VALUES ('$user', md5('$passwd'), '$tipo')";
$resutadofinal = mysqli_query($conn, $inserirbd);

if (mysqli_insert_id($conn)) {
    header("Location: ../html/contato.html");
}
header("Location: ../html/login.html");
?>