<?php
include('conectar.php');

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'snome');
$email = filter_input(INPUT_POST, 'email');
$tel = filter_input(INPUT_POST, 'telefone');
$msg = filter_input(INPUT_POST, 'textarea');
$verif = filter_input(INPUT_POST, 'verifica');
$termuso = filter_input(INPUT_POST, 'termouso');

if($termuso == 'Concordo' && $verif == 'Consultoria' || $verif == 'Transporte' || $verif == 'Exclusão') {
    $inserirbd = "INSERT INTO formulario VALUES ('', '$nome', '$sobrenome', '$email', '$tel', '$msg', '$verif', '$termuso')";
    $resutadofinal = mysqli_query($conn, $inserirbd);
    if(mysqli_insert_id($conn)){
    header("Location: ../sistemaphp/cadastro.php");
    }
}
header("Location: ../sistemaphp/index.php");
?>