<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projeto_integrador";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: ../html/login.html');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: penisbonito.html');
    exit();
} else {
    $_SESSION['Não autenticado'] = true;
    header('location: ../index.html');
    exit();
}
