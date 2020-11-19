<?php
include('conectar.php');


$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'passwd');
$nivel = filter_input(INPUT_POST, 'verifica');


if (empty($_POST['login']) || empty($_POST['passwd'])) {
    header('Location: ../sistemaphp/cadastro.php');
    exit();
}

if($nivel == 'Admin' || 'Comum') {
    $inserirbd = "INSERT INTO userform VALUES ('', '$login', SHA2('$senha', 256), '$nivel', '0')";
    $resutadofinal = mysqli_query($conn, $inserirbd);
    if(mysqli_insert_id($conn)){
    header("Location: ../sistemaphp/sistema.php");
    }
}
header("Location: ../sistemaphp/cadastro.php");
?>