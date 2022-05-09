<?php
require 'conexion.php';
require 'navara.php';
require '1a.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pedido_adm.css">
    <style media="screen">
    .button_small-check, .button_small-del{
      width: 2rem;
      height: 1rem;
      padding: 3rem;
        margin: 0.1rem 0.3rem;
        border: none;
        border-radius: 100px;
        transition: 10ms;
    }
    .button_small-del{
      background-color: rgba(109, 45, 149, 0.8);
    }
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <th>mutual</th>
                <th>obra</th>
                <th>carnet</th>
                <th>tel</th>
                <th></th>



              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="tablea.js"></script>
  </body>
</html>
