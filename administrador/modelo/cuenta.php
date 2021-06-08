<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
    <style type="text/css">
      @import url("../css/mycss.css");
    </style>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../../img/fevicon.png" type="image/gif" />

  </head>
  <body>
    <div class="todo">
  
      <div id="cabecera">
        <img src="../IMG/1.jpg" id="img1">
        <img src="../IMG/logo2.png" id="img2">
        <div class="col text-center">
          <a href="logout_admin.php" class="btn btn-danger" style="float: center;" role="button">Cerrar Sesión</a>
          <a href="index_admin.php" class="btn btn-primary" style="float: center;" role="button">Ver productos y servicios</a>
        </div>
      </div>

      <br>
      <div id="contenido">
  	    <table style="margin: auto; width: 1000px; border-collapse: separate; border-spacing: 10px 5px;">
  		    <thead>
            <th>Id</th>
            <th>No</th>
  			<th>Nombre</th>
  			<th>Apellidos</th>
            <th>No. de Cuenta</th>
            <th>Nombre del Banco</th>
  			    <th> <a href="nuevacuenta.php"> <button type="button" class="btn btn-info">Agregar cuenta</button> </a> </th>
  		    </thead>

          <?php
            include "conexion.php";
            $sentecia="SELECT * FROM cuentavendedor";
            $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
            while($fila=$resultado->fetch_assoc())
            {
              echo "<tr>";
                echo "<td>"; echo $fila['id']; echo "</td>";
                echo "<td>"; echo $fila['no']; echo "</td>";
                echo "<td>"; echo $fila['nombre']; echo "</td>";
                echo "<td>"; echo $fila['apellidos']; echo "</td>";
                echo "<td>"; echo $fila['no_cuenta']; echo "</td>";
                echo "<td>"; echo $fila['banco']; echo "</td>";
                echo "<td><a href='modifcuenta.php?id=".$fila['id']."'> <button type='button' class='btn btn-success'>Modificar cuenta</button> </a></td>";
                echo " <td><a href='eliminarcuenta.php?id=".$fila['id']."'> <button type='button' class='btn btn-danger'>Eliminar cuenta</button>  </a></td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </body>
</html>