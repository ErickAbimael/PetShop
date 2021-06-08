<?php

	
	NuevoProducto($_POST['no'], $_POST['titulo'], $_POST['descripcion'], $_POST['precio'], $_POST['categoria'], $_POST['fecha'], $_POST['estado'], $_POST['foto']);
	
	function NuevoProducto($no_prod, $nom, $descrip, $pre, $categ, $fec, $esta, $fo)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO productos_servicios (no, titulo, descripcion, precio, categoria, fecha, estado, foto) VALUES ('".$no_prod."', '".$nom."', '".$descrip."', '".$pre."', '".$categ."', '".$fec."', '".$esta."', '".$fo."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='index_admin.php';
</script>