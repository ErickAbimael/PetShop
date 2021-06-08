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
              <legend>Elegir Forma de Pago</legend>
              <br>
              <label>Seleccionar una opción para continuar con la compra <span class="orange_color">*</span></label>
              <a href="OXXO.php" class="btn btn-primary btn-block">PAGO EN OXXO</a>
              <a href="finalizar.php" class="btn btn-primary btn-block">PAGO TARJETA</a>
              <a href="carrito.php" class="btn btn-danger btn-block">CANCELAR</a>
            </fieldset>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
