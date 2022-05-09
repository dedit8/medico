
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://kit.fontawesome.com/5ad54e1f93.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <?php include('navar.php')?>

    <div class="overlay" id='overlay'>
      <div class="cuerpo_forms">
          <div class="form_head">
            <h1>Inicio de Sesión</h1>
          </div>
          <div class="contenedor-inputs">
            <form class="form_order" action="turn.php" method="post">
              <input class="entrada" type="time" name="dia" placeholder="dia" required  />
              <input class="entrada" type="number" name="hora" placeholder="hora" required  />
              <input type="submit" class="button-modal" value="Enviar">
            </form>
          </div>
      </div>
    </div>
    <script src="js/popups.js"></script>
  </body>
</html>
