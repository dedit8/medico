<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <?php
    require 'conexion.php';
    require 'navara.php';
    require '1a.php';


     ?>
  </head>
  <body>
    <div class="col-sm-8">


      <h1 style="color:rgb(28, 144, 89)">datos de los medicos</h1>
      <br>
            <table class=" table-warning table-striped" style="text-align: center">
              <tr>
                <td>nombre y apellido</td>
                <td>especialisacion</td>
                <td>mutuales y prepagas</td>

                <td>id</td>

              </tr>

              <?php
                $sql="SELECT * from turn where dni='1'";
                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)) {

                  ?>


                  <tr>


                      <td><?php echo $mostrar['med']?></td>
                      <td><?php echo $mostrar['esp']?></td>
                      <td><?php echo $mostrar['aso']?></td>
                      <td><?php echo $mostrar['id']?></td>
  <th><a href="modm.php?id=<?php echo $mostrar['id'] ?>" class="btn btn-info">Editar</a></th>

</form>
                  </tr>
                <?php
                }
                 ?>

            </table>
    </div>

  </body>
</html>
