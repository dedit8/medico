<?php
require 'conexion.php';

$id = $_POST['id'];
$check = $_POST['atendido'];

if ($check == "si" || $check == "Si"){
    $estado = "No";
}else{
    $estado = "Si";
}
$pdo = "UPDATE turn SET atendido = '$estado' where id = '$id'";
$query = mysqli_query($conexion, $pdo);

mysqli_close($conexion);
