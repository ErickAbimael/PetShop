
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administradores</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="../../img/logo2.png">
          <a class="navbar-brand">PETSHOP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
              <a href="index_admin.php" class="btn">Productos y Servicios</a>
            </li> 
            <li>
                <a href="logout_admin.php"  class= "btn">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="main">
      <div class="row">
        <div class="col-md-12">
          <fieldset>
            <legend>Listado de Pedidos</legend>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>N° Pedido</th>
                  <th>Total</th>
                  <th>Fecha</th>
                  <th></th>
                </tr>
              </thead>
              <tbody> 
                <?php
                  require '../../admin/autoload.php';
                  $pedido = new Kawschool\Pedido;
                  $info_pedido = $pedido->mostrar();
                  $cantidad = count($info_pedido);
                  if($cantidad > 0){
                    $c=0;
                    for($x =0; $x < $cantidad; $x++){
                    $c++;
                    $item = $info_pedido[$x];
                ?>
                  <tr>
                    <td><?php print $c?></td>
                    <td><?php print $item['nombre'].' '.$item['apellidos']?></td>
                    <td><?php print $item['id']?></td>
                    <td><?php print $item['total']?> PEN</td>
                    <td><?php print $item['fecha']?></td> 
                    <td class="text-center">
                      <a href="ver.php?id=<?php print $item['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-eye-open"></span></a>
                    </td>
                  </tr>
                  <?php
                    }
                    }else{
                  ?>
                  <tr>
                    <td colspan="6">NO HAY REGISTROS</td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </fieldset>
        </div>
      </div>
    </div> 
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
  </body>
</html>
