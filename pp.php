<?php
require 'conexion.php';
session_start();
  $id = $_SESSION['id'];

    $q= "SELECT COUNT(*) as contar from turn where id = '$id'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['id'] = $id;
      header("location:modm.php");

    }else {
      // Mensaje de alerta con su respectivo redireccionamiento
      echo "dni no encontado";
    }
 ?>
