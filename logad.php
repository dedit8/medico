<?php
require 'conexion.php';
require 'navar.php';
session_start();
  $usu = $_POST['usu'];
  $contra = $_POST['contra'];

    $q= "SELECT COUNT(*) as contar from adm where usu = '$usu ' and contra = '$contra'";
    $consulta = mysqli_query($conexion,$q);
    $array = mysqli_fetch_array($consulta);

    if($array['contar']>0){
      $_SESSION['usu'] = $usu;
      header("location: adm.php");

    }else {
      echo '
      <script type="text/javascript">
      alert("Datos incorrectos");
      window.location.href="login_pag.php";
      </script>
      ';
    }
 ?>
