<?php

	
	NuevoProducto($_POST['no'],$_POST['nombre'], $_POST['apellidos'], $_POST['no_cuenta'], $_POST['banco']);
	
	function NuevoProducto($no_cu, $nom, $ape, $cuen, $banc)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO cuentavendedor (no, nombre, apellidos, no_cuenta, banco) VALUES ('".$no_cu."','".$nom."', '".$ape."', '".$cuen."', '".$banc."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Cuenta Ingresada Exitosamante!!");
	window.location.href='cuenta.php';
</script>