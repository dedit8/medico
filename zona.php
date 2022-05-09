<?php require 'conexion.php';
  require 'navara.php';
//resivimos los datos de lfet
  $dia = $_POST["dia"];
  $hora = $_POST["hora"];
  $med = $_POST["med"];



//insertamos los datos obtenidos
$inserto = "INSERT INTO turn (dia, hora, med)
                      VALUES ('$dia','$hora','$med')";



  $resultado = mysqli_query($conexion, $inserto);
  if (!$resultado) {
    echo "error al registrar";
  }else {
    echo '<script type="text/javascript">
    alert("Se agregó el pedido correctamente");
    window.location.href="adm.php";
    </script>';
  }
  mysqli_close($conexion);

  ?>
