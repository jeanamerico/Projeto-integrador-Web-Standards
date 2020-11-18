<?php
include('conectar.php');

$id = $_GET['id'];

$arquivodb = "INSERT INTO arquivo SELECT id,nome,sobrenome,email,telefone,mensagem,opcao,termo FROM formulario where id = '$id'";
$resultadoarquivar = mysqli_query($conn, $arquivodb);

$deletebd = "DELETE FROM formulario where id = '$id'";
$resultdelete = mysqli_query($conn, $deletebd);

if(mysqli_insert_id($conn)){
    header("location: ../sistemaphp/sistema.php");
}
header("location: ../sistemaphp/sistema.php");
?>