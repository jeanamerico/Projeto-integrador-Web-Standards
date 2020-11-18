<?php
include('conectar.php');

if (empty($_POST['login']) || empty($_POST['passwd'])) {
    header('Location: ../user/login.php');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['passwd']);

//usuario após o primeiro login
$query = "SELECT usuario FROM userform WHERE usuario LIKE '{$usuario}' AND senha = SHA2('{$senha}', 256) and acesso = '1'";
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);

//usuario primeiro login
$queryacess = "SELECT acesso FROM userform Where usuario like '{$usuario}' AND acesso = '0'";
$resultq = mysqli_query($conn, $queryacess);
$numr = mysqli_num_rows($resultq);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: ../sistemaphp/sistema.php');
    exit();
}else if ($numr == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: ../sistemaphp/trocarsenha.php');
    exit();
}else {
    $_SESSION['Não autenticado'] = true;
    header('location: ../user/login.php');
    exit();
}
?>