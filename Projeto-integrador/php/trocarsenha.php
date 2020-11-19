<?php
include('conectar.php');

if (empty($_POST['passwd']) || empty($_POST['passwd2'])) {
    header('Location: ../sistemaphp/trocarsenha.php');
    exit();
}

$senha = filter_input(INPUT_POST, 'passwd');
$senha2 = filter_input(INPUT_POST, 'passwd2');

if($senha == $senha2){
    $alterbd = "UPDATE userform SET senha = SHA2('$senha', 256), acesso = '1' WHERE userform.usuario = '$_SESSION[usuario]'";
    $resutadofinal = mysqli_query($conn, $alterbd);
    if(mysqli_insert_id($conn)){
        header("Location: ../user/login.php");
        include('logout.php');
        exit();
    }else{
        header("Location: ../user/login.php");
        include('logout.php');
        exit();
    }
}else{
header("Location: ../sistemaphp/trocarsenha.php");
exit();
}

?>