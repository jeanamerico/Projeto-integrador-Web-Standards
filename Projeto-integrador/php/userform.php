<?php
include('conectar.php');

if (empty($_POST['login']) || empty($_POST['passwd'])) {
    header('Location: ../user/login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['passwd']);

$query = "SELECT usuario FROM userform WHERE usuario LIKE '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: ../sistemaphp/trocarsenha.php');
    exit();
}else {
    $_SESSION['Não autenticado'] = true;
    header('location: ../user/login.php');
    exit();
}


/*$queryacess = "SELECT acesso FROM userform Where usuario like '{$usuario}' AND acesso = '0'";
    $resultq = mysqli_query($conn, $queryacess);
    $numr = mysqli_num_rows($resultq);
    if($numr == 1){
        header("location: ../sistemaphp/trocarsenha.php?usuario=$_POST[login]");
    }*/
?>