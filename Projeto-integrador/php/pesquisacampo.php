<?php
include('../php/conectar.php');

$email = filter_input(INPUT_POST, 'emailpesq');

$select = "SELECT * FROM formulario where email like '$email'";
?>