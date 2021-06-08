<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
    <style type="text/css">
      @import url("../css/mycss.css");
    </style>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />

  </head>
  <?php
   header('Content-Type: text/html; charset=UTF-8');
  ?>
  <body>
    <div class="todo">
  
      <div id="cabecera">
        <img src="../IMG/1.jpg" id="img1">
        <img src="../IMG/logo2.png" id="img2">
        <div class="col text-center">
          <a href="logout_admin.php" class="btn btn-danger" style="float: center;" role="button">Cerrar Sesión</a>
          <a href="pedidos.php" class="btn btn-primary" style="float: center;" role="button">Ver listado de pedidos</a>
          <a href="cuenta.php" class="btn btn-primary" style="float: center;" role="button">Cuenta</a>
        </div>
      </div>

      <br>
      <div id="contenido">
  	    <table style="margin: auto; width: 1200px; border-collapse: separate; border-spacing: 10px 5px;">
  		    <thead>
            <th>Id</th>
  			<th>No.</th>
  			<th>Titulo</th>
  			<th>Descripcion</th>
            <th>Foto</th>
            <th>Precio</th>
  			<th>Categoria</th>
  			<th>Fecha</th>
            <th>Stock</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Agregar producto y/o servicio</button> </a> </th>
  		    </thead>

          <?php
           
            include "conexion.php";
            $sentecia="SELECT * FROM productos_servicios";
            $resultado= $conexion->query($sentecia) or die (mysqli_error("SET NAMES 'utf8'",$conexion));
            while($fila=$resultado->fetch_assoc())
            {
              echo "<tr>";
                echo "<td>"; echo $fila['id']; echo "</td>";
                echo "<td>"; echo $fila['no']; echo "</td>";
                echo "<td>"; echo $fila['titulo']; echo "</td>";
                echo "<td>"; echo $fila['descripcion']; echo "</td>";
                echo "<td>"; echo "<img src='../../upload/".$fila['foto']."' width='50' >"; echo "</td>";
                echo "<td>"; echo $fila['precio']; echo "</td>";
                echo "<td>"; echo $fila['categoria']; echo "</td>";
                echo "<td>"; echo $fila['fecha']; echo "</td>";
                echo "<td>"; echo $fila['estado']; echo "</td>";
                echo "<td><a href='modif_prod1.php?id=".$fila['id']."'> <button type='button' class='btn btn-success'>Modificar producto y/o servicio</button> </a></td>";
                echo " <td><a href='eliminar_prod.php?id=".$fila['id']."'> <button type='button' class='btn btn-danger'>Eliminar producto y/o servicio</button> </a></td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </body>
</html>