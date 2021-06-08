<?php
  
  $consulta=ConsultarProducto($_GET['id']);

  function ConsultarProducto( $id)
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM cuentavendedor WHERE id='".$id."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar la cuenta".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['no'],
    $fila['nombre'],
    $fila['apellidos'],
    $fila['no_cuenta'],
    $fila['banco'],
   ];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cuenta</title>
    <style type="text/css">
      @import url("../css/mycss.css");
    </style>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                <legend>Modificar cuenta bancaria</legend>
                <form action="modifcuenta2.php" method="post"  enctype="multipart/form-data">
                  <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
                  <div class="form-group">
                    <label>No <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no" value="<?php echo $consulta[0] ?>" ><br>
                  </div>

                  <div class="form-group">
                    <label>Nombre <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $consulta[1] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Apellidos <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $consulta[2] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>No. cuenta bancaria <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no_cuenta" value="<?php echo $consulta[3] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Banco <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="banco" value="<?php echo $consulta[4] ?>"><br>
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
