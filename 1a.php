<?php
require 'conexion.php';


session_start();
$usu = $_SESSION['usu'];
if(!isset($usu)){
    header("location: index");
} else {

}
 ?>
