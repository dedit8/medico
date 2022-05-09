<?php
require 'conexion.php';
session_start();
  $dni = $_POST['dni'];

    $q= "SELECT COUNT(*) as contar from dni where dni = '$dni'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['dni'] = $dni;
      header("location:home.php");

    }else {
      // Mensaje de alerta con su respectivo redireccionamiento
      echo "dni no encontado";
    }
 ?>
