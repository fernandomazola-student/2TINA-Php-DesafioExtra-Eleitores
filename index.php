<?php include "functions.php"; ?>
<?php
if (isset($_POST['enviar'])) {
  $total = $_POST['numeroeleitores'];
  $brancos = $_POST['brancos'];
  $nulos = $_POST['nulos'];
  $validos = $_POST['validos'];


  $votos = gravar($total, $brancos, $nulos, $validos);

  foreach ($votos as $voto) {
  echo $voto . " % <br>";
  }


}




?>

<!DOCTYPE html>
<html>
  <head
    <meta charset="utf-8">
    <title>Eleições 2017</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
  </head>
  <body>
      <form class="col-md-6" action="index.php" method="post">
        <div class="form-group">
          <label for="numeroeleitores">Total de Eleitores</label>
          <input class="form-control" type="text" name="numeroeleitores">
        </div>


          <div class="form-group">
            <label for="brancos">Brancos</label>
            <input class="form-control" type="text" name="brancos">
          </div>


            <div class="form-group">
              <label for="nulos">Nulos</label>
              <input class="form-control" type="text" name="nulos">
            </div>


              <div class="form-group">
                <label for="validos">Válidos</label>
                <input class="form-control" type="text" name="validos">
              </div>

              <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
      </form>





  </body>
</html>
