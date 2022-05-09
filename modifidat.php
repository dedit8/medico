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
                  <h2>susturnos</h2>
                </header>
                <div class="orden_pedidos">
                  <?php
                    $sql="SELECT * from dni where dni='$dni '";


                    $result=mysqli_query($conexion,$sql);
                    while($mostrar=mysqli_fetch_assoc($result)) {
                  ?>
                  <form class="form_order" action="mod.php" method="post">
                      <div class="pedido">
                        <div class="temporada">
                          <input class="entrada" type="text" name="dni"placeholder="dni" value="<?php echo $mostrar['dni']; ?>" required/>
                          <input class="entrada" type="text" name="mutual"placeholder="mutual" value="<?php echo $mostrar['mutual']; ?>" required/>
                          <input class="entrada" type="text" name="obra"placeholder="obra" value="<?php echo $mostrar['obra']; ?>" required/>

                          <input class="entrada" type="text" name="carnet" placeholder="carnet" value="<?php echo $mostrar['carnet']; ?>" required/>
                          <input class="entrada" type="text" name="tel" placeholder="telefono" value="<?php echo $mostrar['tel']; ?>" required/>
                          <input type="hidden" name="id"value="<?php echo $mostrar['id']; ?>" required  />
                          <input type="submit" class="button-modal" value="Enviar">
                        </div>

                      </div>
                    </form>

                  <?php }?>

            </body>
          </html>
        <?php } ?>
<?php } ?>
