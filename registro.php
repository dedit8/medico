<?php require 'conexion.php';
require 'navar.php';

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    div.contenedor-inputs{
      text-align: center;

    }
  body{
background-color: rgb(22, 105, 158);

  }
    </style>
  </head>
  <body>
    <body>
      <h1 style="text-align: center; color: rgb(175, 47, 108);">registrese</h1>
      <div class="contenedor-inputs">

          <form class="form_order" action="regis.php" method="POST">
              <input type="text" placeholder="DNI" name="dni" required>
                <input type="text" placeholder="mutual" name="mutual" required>
                  <input type="text" placeholder="obra social" name="obra" required>
                    <input type="text" placeholder="carnet" name="carnet" required>
                    <input type="text" placeholder="telefono" name="tel" required>

              <input class="button-modal" type="submit" value="Enviar">
          </form>
      </div>
  </body>
</html>
