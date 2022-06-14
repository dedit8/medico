<?php
require 'conexion.php';
require 'navara.php';
require '1a.php';


$id=$_POST['id'];
$med=$_POST['med'];
$esp=$_POST['esp'];
$aso=$_POST['aso'];

$sql="UPDATE turn SET  med='$med',esp='$esp',aso='$aso' WHERE id='$id'";
$query=mysqli_query($conexion,$sql);

    if($query){
        Header("Location: datme.php");
    }
?>
