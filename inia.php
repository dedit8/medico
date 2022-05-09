<?php
require 'conexion.php';
require 'navar.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <style media="screen">
    div.contenedor-inputs{
      text-align: center;

    }
    body{background-color: rgb(0, 0, 0);}
    </style>
  </head>
  <body>

    <div class="overlay" id="overlay">
      <div class="cuerpo_forms">
        <div class="popup" id="popup">
          <a href="#" id='btn-cerrar-popup' class="btn-cerrar-popup"><i class="fas fa-times" id='btn-cerrar-popup'></i></a>
          <div class="form_head">
          <h1 style="text-align: center; color: rgb(9, 126, 249);">Inicio de Sesión del Administrador</h1>
          </div>
          <div class="contenedor-inputs">
            <form class="form_order" action="logad.php" method="post">
              <input class="entrada" type="text" name="usu" placeholder="usu" required  />
              <input class="entrada" type="password" name="contra" placeholder="Contraseña" required  />
              <input type="submit" class="button-modal" value="Enviar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
