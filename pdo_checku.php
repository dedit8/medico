<?php
require 'conexion.php';
session_start();
$dni = $_SESSION['dni'];
$sql="SELECT * from dni where dni='$dni'";
$result=mysqli_query($conexion,$sql);

$id = $_POST['id'];
$dni1 = $_SESSIO['dni1'];

$pdo = "UPDATE turn set dni = '$dni' WHERE id = '$id'";
$query = mysqli_query($conexion, $pdo);

mysqli_close($conexion);
