<?php
include('conectar.php');


$senha = filter_input(INPUT_POST, 'passwd');
$senha2 = filter_input(INPUT_POST, 'passwd2');

if($senha == $senha2){
    $alterbd = "UPDATE `userform` SET `senha` = md5('$senha'), `acesso` = '1' WHERE `userform`.`usuario` = '$_SESSION[usuario]'";
    $resutadofinal = mysqli_query($conn, $alterbd);
    if(mysqli_insert_id($conn)){
        header("Location: ../user/login.php");
        exit();
    }else{
        header("Location: ../user/login.php");
        exit();
    }
}else{
header("Location: ../sistemaphp/trocarsenha.php");
exit();
}

?>