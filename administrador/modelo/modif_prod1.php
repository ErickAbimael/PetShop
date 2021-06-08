<?php
  
  $consulta=ConsultarProducto($_GET['id']);

  function ConsultarProducto( $id )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM productos_servicios WHERE id='".$id."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar producto".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['no'],
    $fila['titulo'],
    $fila['descripcion'],
    $fila['precio'],
    $fila['categoria'],
    $fila['fecha'],
    $fila['estado']
   ];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar producto y/o servicio</title>
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
            <div class="col-md-12">
              <fieldset>
                <legend>Modificar producto y/o servicio</legend>
                <form action="modif_prod2.php" method="post"  enctype="multipart/form-data">
                  <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
                  <div class="form-group">
                    <label>No <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="no" value="<?php echo $consulta[0] ?>" ><br>
                  </div>

                  <div class="form-group">
                    <label>Titulo <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="titulo" value="<?php echo $consulta[1] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Descripci&oacute;n <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="descripcion" value="<?php echo $consulta[2] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Precio <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="precio" value="<?php echo $consulta[3] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Categoria <span class="orange_color">*</span></label>
                    <input style="width:200px; display:iniline-block;" class="form-control" value="<?php echo $consulta[4] ?>" readonly><br>
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
                    <label>Fecha <span class="orange_color">*</span></label>
                    <input type="date" class="form-control" name="fecha" value="<?php echo $consulta[5] ?>"><br>
                  </div>

                  <div class="form-group">
                    <label>Stock <span class="orange_color">*</span></label>
                    <input type="text" class="form-control" name="estado" value="<?php echo $consulta[6] ?>"><br>
                  </div>

                  <input type="file" name="file1" id="file1">
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

<script>
  $("#file-1").fileinput({
  showCaption: false,
  browseClass: "btn btn-primary btn-lg",
  fileType: "any"
  });
</script>