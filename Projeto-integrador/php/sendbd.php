<?php
include('conectar.php');

$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'passwd');
$nivel = filter_input(INPUT_POST, 'verifica');


if($nivel == 'Admin' || 'Comum') {
    $inserirbd = "INSERT INTO userform VALUES ('', '$login', md5('{$passwd}'), '$nivel')";
    $resutadofinal = mysqli_query($conn, $inserirbd);
    if(mysqli_insert_id($conn)){
    header("Location: ../sistemaphp/cadastro.php");
    }
}else if($nivel == 'Excluir') {
    $deletbd = "INSERT INTO userform VALUES ('', '$login', '$passwd', '$nivel')";
    $resutadofinal = mysqli_query($conn, $deletbd);
}
header("Location: ../sistemaphp/index.php");
?>