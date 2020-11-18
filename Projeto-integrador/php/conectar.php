<?php
session_start();

$envPath = 'env.ini';
$env = parse_ini_file($envPath);

$conn = mysqli_connect($env['host'], $env['user'], $env['password'], $env['dbname']);

?>