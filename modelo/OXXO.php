<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PetShop</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/fevicon.png" type="image/gif" />
    <script type="text/javascript" src="../js/date.js"></script>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="../img/logo2.png">
          <a class="navbar-brand" href="index.php">PETSHOP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadProducto(); ?></span></a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="main">
      <div class="main-form">
        <div class="row">
          <div class="col-md-13">
            <fieldset>
              <legend>Completar Datos y Elegir Forma de Pago</legend>
              <form action="completar_pedido2.php" method="post">
                <div class="form-group">
                  <label>Nombre<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="nombre" required>
                </div>
                
                <div class="form-group">
                  <label>Apellidos<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="apellidos" required>
                </div>
                
                <div class="form-group">
                  <label>Correo<span class="orange_color">*</span></label>
                  <input type="email" class="form-control" name="email" required>
                </div>
                
                <div class="form-group">
                  <label>Telefono<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="telefono" required>
                </div>
                
                <div class="form-group">
                  <label>Direccion<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="direccion" required>
                </div>
                
                <div class="form-group">
                  <label>Codigo Postal<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="cp" required>
                </div>
                
                <div class="form-group">
                  <label>Ciudad<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="ciudad" required>
                </div>
                
                <div class="form-group">
                  <label>Estado<span class="orange_color">*</span></label>
                  <input type="text" class="form-control" name="estado" required>
                </div>

                <div class="form-group">
                  <label>Comentario</label>
                  <textarea name="comentario" class="form-control"  rows="2"></textarea>
                </div>
                <br>
                <label>Todos los campos <span class="orange_color">*</span> son obligatorios </label>
                <button type="submit" class="btn btn-primary btn-block">Finalizar Compra</button> 
                <a href="formaP.php" class="btn btn-danger btn-block">Cancelar</a>
              </form>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
