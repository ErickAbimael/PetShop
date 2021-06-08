
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Administradores</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />
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
            <?php
              require '../../admin/autoload.php';
              $id = $_GET['id'];
              $pedido = new Kawschool\Pedido;
              $info_pedido = $pedido->mostrarPorId($id);
              $info_detalle_pedido = $pedido->mostrarDetallePorIdPedido($id);
            ?>
            <legend>Información de la Compra</legend>
            <div class="form-group">
              <label>Nombre</label>
              <input value="<?php print $info_pedido['nombre'] ?>" type="text" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Apellidos</label>
              <input value="<?php print $info_pedido['apellidos'] ?>" type="text" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input value="<?php print $info_pedido['email'] ?>" type="text" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Fecha</label>
              <input value="<?php print $info_pedido['fecha'] ?>" type="text" class="form-control" readonly>
            </div>
            <hr>
            Productos Comprados
            <hr>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Titulo</th>
                  <th>Foto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>
                    Total
                  </th>
                </tr>
              </thead>
              <tbody> 
                <?php
                  $cantidad = count($info_detalle_pedido);
                  if($cantidad > 0){
                  $c=0;
                  for($x =0; $x < $cantidad; $x++){
                  $c++;
                  $item = $info_detalle_pedido[$x];
                  $total = $item['precio'] * $item['cantidad'];
                ?>
                <tr>
                  <td><?php print $c?></td>
                  <td><?php print $item['titulo']?></td>
                  <td>
                    <?php
                      $foto = '../../upload/'.$item['foto'];
                      if(file_exists($foto)){
                    ?>
                    <img src="<?php print $foto; ?>" width="35">
                    <?php }else{?>
                      SIN FOTO
                    <?php }?>
                  </td>
                  <td><?php print $item['precio']?> PEN</td>
                  <td><?php print $item['cantidad']?></td>
                  <td>
                    <?php print $total?>
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
            <div class="col-md-3">
              <div class="form-group">
                <label>Total Compra</label>
                <input value="<?php print $info_pedido['total'] ?>" type="text" class="form-control" readonly>
              </div>
            </div>
          </fieldset>
          <div class="pull-left">
            <a href="pedidos.php" class="btn btn-default hidden-print">Cancelar</a>
          </div>
          <div class="pull-right">
            <a href="javascript:;" id="btnImprimir" class="btn btn-danger hidden-print">Imprimir</a>
          </div>  
        </div>
      </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script>
      $('#btnImprimir').on('click',function(){
        window.print();
        return false;
      })              
    </script>
  </body>
</html>
