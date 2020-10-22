<?php
include('conectar.php');

$usuario = filter_input(INPUT_POST, 'usuario');
$nivel = filter_input(INPUT_POST, 'Verificaex');


if($nivel == 'Excluir') {
    $deletedb = "DELETE FROM userform WHERE id = '3'";//Exluir por nome e não por ID
    $resutadofinal = mysqli_query($conn, $deletedb);
    if(mysqli_insert_id($conn)){
        header("Location: ../sistemaphp/cadastro.php");
    }
header("Location: ../sistemaphp/index.php");   
}

?>