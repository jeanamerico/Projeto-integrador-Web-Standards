<?php

$servidor= "localhost";
$usuario= "root";
$senha = "";
$dbname= "projeto_integrador";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'snome');
$email = filter_input(INPUT_POST, 'email');
$msg = filter_input(INPUT_POST, 'textarea');
$tel = filter_input(INPUT_POST, 'telefone');

$inserirbd = "INSERT INTO formulario VALUES ('$nome', '$sobrenome', '$email', '$tel', '$msg')";
$resutadofinal = mysqli_query($conn, $inserirbd);
 
if(mysqli_insert_id($conn)){
    header("Location: ../html/contato.html");
}else{
    header("Location: ../html/contato.html");
}

?>