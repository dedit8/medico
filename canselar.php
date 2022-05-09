<?php
$id = $_GET['id'];

require 'conexion.php';
session_start();
$dni = $_SESSION['dni'];
$sql="SELECT * from dni where dni='$dni'";
$result=mysqli_query($conexion,$sql);




$pdo = "UPDATE turn set dni = '' WHERE id = '$id'";
$query = mysqli_query($conexion, $pdo);
header("location:misturn.php");

mysqli_close($conexion);

?>
