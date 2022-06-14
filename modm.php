<?php
require 'conexion.php';
require 'navara.php';
require '1a.php';


$id=$_GET['id'];

$sql="SELECT * FROM turn WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>
                <div class="container mt-5">
                    <form action="actm.php" method="POST">

                                <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

                                <input type="text" class="form-control mb-3" name="med" placeholder="nombre apellido" value="<?php echo $row['med']  ?>">
                                <input type="text" class="form-control mb-3" name="esp" placeholder="espesialisasion" value="<?php echo $row['esp']  ?>">
                                <input type="text" class="form-control mb-3" name="aso" placeholder="mutuales y prepagas" value="<?php echo $row['aso']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>

                </div>
    </body>
</html>
