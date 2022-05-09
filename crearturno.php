<?php require 'conexion.php';
require 'navar.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="contenedor-inputs">
        <form class="form_order" action="manual_order.php" method="POST">
            <input type="text" placeholder="DNI" name="dni" required>
            <input class="button-modal" type="submit" value="Enviar">
        </form>
    </div>
  </body>
</html>
