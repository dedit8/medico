<?php
require 'conexion.php';
require 'navara.php';
require '1a.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="pedido_adm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<style media="screen">

</style>
  </head>
  <body>
    <div class="cuerpo_ped_adm">
      <div class="nuevo_pedido">
        <h1>Ingrese Para Un Nuevo Turno</h1>
        <form class="inputs_adm" action="zona.php" method="post">
          <input type="text"placeholder="dni para pedido manual" name="dni"  />
            <input type="text"placeholder="nombre y apellido medico" name="med" required  />
          <input type="date" name="dia" required  />
          <input type="time" name="hora" placeholder="hora" required  />
          <input class="button" type="submit" value="Enviar">
        </form>

      </div>

  </body>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
    </head>
    <body>
      <div class="cuerpo_ped">
        <header class="header_ped">


        </header>
        <div class="orden_pedidos">
          <!DOCTYPE html>
          <html>
            <head>
              <meta charset="UTF-8">
              <link rel="stylesheet" href="pedido_adm.css">
              <style media="screen">
              .button_small-check, .button_small-del{
                width: 2rem;
                height: 8rem;
                padding: 3rem;
                  margin: 0.1rem 0.3rem;
                  border: none;
                  border-radius: 100px;
                  transition: 10ms;
              }
              </style>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
              <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
              <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
            </head>
            <body>
              <div class="cuerpoPedidos">
                <div class="pedidosUsuarios">
                  <h1>Pedidos de los Usuarios</h1>
                  <div>
                    <table id="pdo_register">
                      <thead>
                        <tr>
                          <th class="id_ped"></th>

                          <th>dni</th>
                          <th>medico</th>
                          <th>dia</th>
                          <th>hora</th>
                          <th>atendido</th>
                          <th>pedir turno</th>

                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <script src="tableu1.js"></script>
            </body>
          </html>


    </body>
  </html>
