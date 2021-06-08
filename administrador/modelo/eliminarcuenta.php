<?php
	EliminarProducto($_GET['id']);

	function EliminarProducto($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM cuentavendedor WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("¡Cuenta eliminada!");
	window.location.href='cuenta.php';
</script>