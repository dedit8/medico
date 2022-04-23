<?php
require 'conexion.php';

$id = $_POST['id'];

$pdo = "DELETE FROM turn WHERE id = '$id'";
$query = mysqli_query($conexion, $pdo);

mysqli_close($conexion);
