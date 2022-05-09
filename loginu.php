<?php
require 'conexion.php';
require 'navar.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    h1{
      text-align: center;
      color: rgb(230, 210, 98);
    }
    input{
      width: 640px;
      text-height: 55px;
      font-size: 35px;
    }
    body{background-color: rgb(56, 53, 53);}
    </style>
  </head>
  <body>

    <div class="form_head">
      <h1>Inicio de Sesión</h1>
    </div>
    <div class="container p-3 my-3 bg-dark text-white">

      <form class="form_order" action="login.php" method="post">
        <input class="entrada" type="number" name="dni" placeholder="DNI" required  />
        <input  type="submit" class="button-modal" value="Enviar">
      </form>
    </div>
  </body>
</html>
