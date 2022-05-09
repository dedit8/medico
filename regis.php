<?php require 'conexion.php';
  require 'navar.php';

//recibimos los datos de regis

  $dni       = $_POST["dni"];
  $mutual      = $_POST["mutual"];
  $obra       = $_POST["obra"];
  $carnet       = $_POST["carnet"];
  $tel      = $_POST["tel"];
//insertamos los datos obtenidos
$inserto = "INSERT INTO dni (dni, mutual, obra, carnet, tel)
                      VALUES ('$dni','$mutual','$obra','$carnet','$tel')";

 
$veri_usu = mysqli_query($conexion, "SELECT * FROM dni WHERE dni = '$dni'");
if (mysqli_num_rows($veri_usu) > 0){
echo "El DNI ya existe";
exit;
}

//ejecutamos la acción inserto
$resultado = mysqli_query($conexion, $inserto);
if (!$resultado) {
  echo  "Error al Registrar";
}else {
  echo "Registrado Correcto";
}
mysqli_close($conexion);

?>
