<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto_integrador";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (empty($_POST['login']) || empty($_POST['passwd'])) {
    header('Location: ../html/login.html');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['passwd']);

$query = "SELECT usuario FROM userform WHERE usuario LIKE '{$usuario}' AND senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: ../html/sistema.php');
    exit();
} else {
    $_SESSION['Não autenticado'] = true;
    header('location: ../html/login.html');
    exit();
}
