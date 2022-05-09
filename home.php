<?php
  require 'conexion.php';
  require 'navaru.php';
  session_start();
  $dni = $_SESSION['dni'];
  $sql="SELECT * from dni where dni='$dni'";
  $result=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_assoc($result)) {

  if(!isset($dni)){
      header("location: index.php");
  } else {?>
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
                        padding: 6rem;
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
                      <script src="tableu.js"></script>
                    </body>
                  </html>


            </body>
          </html>
        <?php } ?>
<?php } ?>
