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
    <link rel="icon" href="../img/fevicon.png" type="image/gif" />
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
      </div>
    </nav>

    <div class="container" id="main">
      <div class="row">
        <div class="col-md-12">
          <fieldset>
            <?php
              require '../admin/autoload.php';
              $pedido = new Kawschool\Pedido;
              $info_pedido = $pedido->mostrar2();
              $cantidad = count($info_pedido);
              if($cantidad > 0){
                $c=0;
                for($x =0; $x < $cantidad; $x++){
                  $c++;
                  $item = $info_pedido[$x];
                }
              }
            ?>
            
            <legend>Información de la Compra</legend>
            <div class="form-group">
              <label>Nombre</label>
              <input value="<?php print $item['nombre'] ?>" type="text" class="form-control" readonly>
            </div>
            
            <div class="form-group">
              <label>Apellidos</label>
              <input value="<?php print $item['apellidos'] ?>" type="text" class="form-control" readonly>
            </div>
            
            <div class="form-group">
              <label>Email</label>
              <input value="<?php print $item['email'] ?>" type="text" class="form-control" readonly>
            </div>

            <div class="form-group">
              <label>Fecha</label>
              <input value="<?php print $item['fecha'] ?>" type="text" class="form-control" readonly>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label>Total Compra</label>
                <input value="<?php print $item['total'] ?>" type="text" class="form-control" readonly>
              </div>
            </div>
          </fieldset>
            
          <div class="pull-left">
            <a href="index.php" class="btn btn-default hidden-print">Salir</a>
          </div>

          <div class="pull-right">
            <a href="#" id="btnImprimir" class="btn btn-danger hidden-print">Imprimir recibo</a>
          </div>
        </div>
      </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
      $('#btnImprimir').on('click',function(){
        window.print();
        return false;
      })                  
    </script>
  </body>
</html>
