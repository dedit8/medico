<?php

try {

   $conexion=mysqli_connect('localhost','root','','turnos');

}
catch (Exception $e)
{
   echo $e->getMessage(); //Me muestra un mensaje si no se pudo conectar a la db.
}

?>
