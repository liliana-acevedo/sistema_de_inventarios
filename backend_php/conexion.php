<?php

$server  = "localhost";
$user = "root";
$pass = "";
$bd = "bolsosL&L";

$conexion = new mysqli ($server, $user, $pass, $bd);

if ($conexion->connect_errno) {
    die("conexion fallida".$conexion->errno);  
}


?>