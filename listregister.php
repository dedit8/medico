<?php

    require 'conexion.php';

    $query = "SELECT * FROM turn WHERE dni!='1' ";
    $result = mysqli_query($conexion, $query);

    if(!$result){
        die("Error");
    }else{
        $arreglo["data"] = [];
        while($data = mysqli_fetch_assoc($result)){
            $arreglo["data"][] = $data;
        }
        echo json_encode($arreglo);
    }
