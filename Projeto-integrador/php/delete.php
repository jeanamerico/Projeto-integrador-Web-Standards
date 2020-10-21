<?php
include('conectar.php');

$login = filter_input(INPUT_POST, 'login');
$nivel = filter_input(INPUT_POST, 'verifica');


if($nivel == 'Excluir') {
    $deletedb = "DELETE FROM userform WHERE usuario LIKE ('$login')";
    $resutadofinal = mysqli_query($conn, $inserirbd);
    if(mysqli_insert_id($conn)){
        header("Location: ../sistemaphp/cadastro.php");
    }
header("Location: ../sistemaphp/index.php");   
}

?>