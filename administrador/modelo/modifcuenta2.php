<?php

	ModificarProducto($_POST['id'], $_POST['no'], $_POST['nombre'], $_POST['apellidos'], $_POST['no_cuenta'], $_POST['banco']);

	function ModificarProducto($id, $no_cu, $nom, $ape, $cuen, $banc)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE cuentavendedor SET no='".$no_cu."', nombre='".$nom."', apellidos='".$ape."', no_cuenta='".$cuen."', banco='".$banc."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}

	
?>

<script type="text/javascript">
	alert("¡Datos actualizados exitosamante!");
	window.location.href='cuenta.php';
</script>