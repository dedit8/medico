<?php
  require 'conexion.php';
  require 'navaru.php';
  session_start();
  $dni = $_SESSION['dni'];
  $atendido = "si";

  $sql="SELECT * from dni where dni='$dni'";
  $result=mysqli_query($conexion,$sql);
  while($mostrar=mysqli_fetch_assoc($result)) {

  if(!isset($dni)){
      header("location: index.php");
  } else {?>
          <!DOCTYPE html>
          <html lang="en" dir="ltr">
            <head>
              <link rel="stylesheet" href="pedido.css">
                <style media="screen">

                </style>

            </head>
            <body>
              <div class="cuerpo_ped">
                <header class="header_ped">
                  <h1>Bienvenido <?php echo $mostrar['dni']; ?></h1>
                  <h2>sus turnos</h2>
                </header>
                <div class="orden_pedidos">
                  <?php
                    $sql="SELECT * from turn where dni='$dni ' and atendido != '$atendido'";


                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_assoc($result)) {
                  ?>
                      <div class="pedido">
                        <div class="temporada">
                          <h4>dni</h4>
                          <label for="temporada"><?php echo $mostrar['dni']?></label>
                        </div>
                        <div class="centro_pedido">
                          <div class="retiro">
                            <h5>turno</h5>
                            <label for="fecha"><?php echo $mostrar['dia']?></label>
                          </div>
                          <div class="lugar">
                            <div>
                              <h5>hora</h5>
                              <label for="calle"><?php echo $mostrar['hora']?></label>
                            </div>
                            <div>
                              <h5>medico</h5>
                              <label for="calle"><?php echo $mostrar['med']?></label>
                            </div>
                            <div>
                              <h5>atendido</h5>
                              <label for="zona"><?php echo $mostrar['atendido']?></label>
                            </div>
                          </div>
                        </div>
                        <div>
                          <a class="button" href='canselar.php?id=<?php echo $mostrar['id'] ?>'>canselar</a>
                        </div>
                      </div>
                  <?php }?>

            </body>
          </html>
        <?php } ?>
<?php } ?>
