<?php
include('conectar.php');

$id = $_GET['id'];

$deletedb = "DELETE FROM userform WHERE id = '$id'";
$resutadofinal = mysqli_query($conn, $deletedb);

if(mysqli_insert_id($conn)){
    header("Location: ../sistemaphp/deletar.php");
}
header("Location: ../sistemaphp/deletar.php ");   

?>