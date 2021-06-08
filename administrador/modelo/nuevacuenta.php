<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nueva cuenta bancaria</title>
    <style type="text/css">
      @import url("../css/mycss.css");
    </style>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />
  </head>
  <body>
    <div class="todo">
  
      <div id="cabecera">
        <img src="../IMG/1.jpg" id="img1">
        <img src="../IMG/logo2.png" id="img2">
      </div>

      <div>
        <div class="main-form">
          <div class="row">
            <div class="col-md-13">
              <fieldset>
                <legend>Agregar nueva cuenta bancaria</legend>
                <form action="nuevacuenta2.php" method="post">
                  <div class="form-group">
                    <label>No <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no" required>
                  </div>
                  <div class="form-group">
                    <label>Nombre <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label>Apellidos <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="apellidos" required>
                  </div>
                  <div class="form-group">
                    <label>Número de cuenta bancaria<span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no_cuenta"  maxlength="20" required>
                  </div>
				          <div class="form-group">
                    <label>Nombre del Banco<span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="banco" required>
                  </div>
                  <br>
                  <label>Todos los campos <span class="orange_color">*</span> son obligatorios </label>
				          <br>
				          <button type="submit" class="btn btn-success">Guardar</button>
                  <a href="cuenta.php" class="btn btn-danger">Cancelar</a>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>