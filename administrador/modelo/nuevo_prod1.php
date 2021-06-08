<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto y/o servicio</title>
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
                <legend>Agregar producto y/o servicio</legend>
                <form action="nuevo_prod2.php" method="post">
                  <div class="form-group">
                    <label>No <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no" required>
                  </div>
                  <div class="form-group">
                    <label>Titulo <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="titulo" required>
                  </div>
                  <div class="form-group">
                    <label>Descripci&oacute;n del Producto o Servicio<span class="orange_color">*</span></label>
                    <input type="text" class="form-control" rows= "4" name="descripcion" required>
                  </div>
                  <div class="form-group">
                    <label>Precio<span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="precio" required>
                  </div>
                  <div class="form-group">
                    <label>Categoria<span class="orange_color">*</span></label>
                    <select name="categoria">
                      <option selected> Elija una categoria...
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Fecha<span class="orange_color">*</span></label>
                    <input type="date" class="form-control" name="fecha" required>
                  </div>
								  <div class="form-group">
                    <label>Stock<span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="estado" required>
                  </div>
								  <input type="file" name="foto" id="foto">
                  <br>
                  <label>Todos los campos <span class="orange_color">*</span> son obligatorios </label>
								  <br>
								  <button type="submit" class="btn btn-success">Guardar</button>
                  <a href="index_admin.php" class="btn btn-danger">Cancelar</a>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>