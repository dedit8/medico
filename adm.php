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

          <label>SELECCIONA EL MEDICO</label>
          <select id="lista1" name="lista1">
            <option value="1">medicos</option>
            <option value="Delfor Hernandez">Delfor Hernandez</option>
            <option value="Daneil ALzari">Daneil ALzari</option>
            <option value="Torresan Gabriela">Torresan Gabriela</option>
            <option value="Hartmamn Marilin">Hartmamn Marilin</option>
            <option value="Araujo Viviana">Araujo Viviana</option>
            <option value="Pablo Bosernitzan">Pablo Bosernitzan</option>
            <option value="Clavero Rubio">Clavero Rubio</option>
            <option value="Marilin Hartmann">Marilin Hartmann</option>
            <option value="Frabro Glenda">Frabro Glenda</option>
            <option value="Fay ernesto">Fay ernesto</option>
            <option value="Ramacciotti Hugo">Ramacciotti Hugo</option>
            <option value="Alzari Daniel">Alzari Daniel</option>
            <option value="cañellas Guillermo">cañellas Guillermo</option>
            <option value="Simori Malena">Simori Malena</option>
            <option value="Ferrero Edgardo">Ferrero Edgardo</option>
            <option value="Felici Fernando">Felici Fernando</option>
            <option value="Contreras Leonardo">Contreras Leonardo </option>
            <option value="Dubios Juan José">Dubios Juan José  </option>
            <option value="servicio de enfermeria">servicio de enfermeria </option>
            <option value="Burgués Vanesa">Burgués Vanesa</option>
            <option value="Algaraña Analia">Algaraña Analia</option>
            <option value="Ressia">Ressia</option>

          </select>

          <br>
          <div id="select2lista"></div>

          <script type="text/javascript">
          	$(document).ready(function(){
          		$('#lista1').val(1);
          		recargarLista();

          		$('#lista1').change(function(){
          			recargarLista();
          		});
          	})
          </script>
          <script type="text/javascript">
          	function recargarLista(){
          		$.ajax({
          			type:"POST",
          			url:"datos.php",
          			data:"sele=" + $('#lista1').val(),
          			success:function(r){
          				$('#select2lista').html(r);
          			}
          		});
          	}
          </script>
<!-- -->

          <input type="text"placeholder="DNI para pedido manual" name="dni"  />
          <!--
            <input type="text"placeholder="Nombre y apellido médico" name="med" required  />
            <input type="text"placeholder="Especialista" name="esp" required  />
             -->
            <input type="text"placeholder="Asosiación" name="aso" required  />
            <input type="text"placeholder="Costo particular" name="cost" required  />
          <input type="date" name="dia" required  />
          <input type="time" name="hora" placeholder="hora" required  />
          <div class="bot">
            <br>
          <input class="button" type="submit" value="Enviar">
              </div>
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
              <script
              src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
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
                          <th>DNI</th>
                          <th>Médico</th>
                          <th>Especialista</th>
                          <th>Día</th>
                          <th>Hora</th>
                          <th>Obras sociales/prepagas</th>
                          <th>Costo particular</th>
                          <th>Atendido</th>
                          <th>Pedir turno</th>

                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <script src="tablea4.js"></script>
            </body>
          </html>


    </body>
  </html>
