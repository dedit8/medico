<?php
require 'conexion.php';
require '1u.php';

$dni = $_POST["dni"];
$mutual = $_POST["mutual"];
$obra  = $_POST["obra"];
$carnet = $_POST["carnet"];
$tel = $_POST["tel"];


   $id = $_POST['id'];

 $sql_update = mysqli_query($conexion, "UPDATE dni SET dni = '$dni', mutual = '$mutual',
   obra='$obra', carnet='$carnet', tel = '$tel'





    WHERE id='$id'")
   or die ("El dni ya esta en uso");
       mysqli_close($conexion);
         echo '
         <script type="text/javascript">
         alert("Los datos han sido actualizados correctamente");
         window.location.href="modifidat.php";
         </script>
         ';
       exit();

  session_destroy();
    $_SESSION['dni'] = $dni;
  session_start();
      $_SESSION['dni'] = $dni;


   ?>
