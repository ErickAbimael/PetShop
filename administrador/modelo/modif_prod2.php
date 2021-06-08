<?php

	ModificarProducto($_POST['id'], $_POST['no'], $_POST['titulo'], $_POST['descripcion'], $_POST['precio'], $_POST['categoria'], $_POST['fecha'], $_POST['estado'] );

	function ModificarProducto($id, $no_prod, $nom, $descrip, $pre, $categ, $fec, $esta)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE productos_servicios SET no='".$no_prod."', titulo='".$nom."', descripcion='".$descrip."', precio='".$pre."', categoria='".$categ."', fecha='".$fec."', estado='".$esta."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}

	if ($_FILES["file1"]["error"] > 0)
	{
	} 
	else{
	

		$nom_archivo=$_FILES['file1']['name']; 
		$ruta = "" . $nom_archivo;  
		$archivo = $_FILES['file1']['tmp_name']; 
		$subir=move_uploaded_file($archivo, $ruta);
		include 'conexion.php';
		echo $sentencia_img="UPDATE productos_servicios SET foto='$ruta' WHERE id='".$_POST['id']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		
	}

	
?>

<script type="text/javascript">
	alert("¡Datos actualizados exitosamante!");
	window.location.href='index_admin.php';
</script>