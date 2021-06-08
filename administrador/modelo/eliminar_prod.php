<?php
	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM productos_servicios WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("¡Producto y/o servicio eliminado!");
	window.location.href='index_admin.php';
</script>