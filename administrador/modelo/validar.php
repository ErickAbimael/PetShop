<?php
session_start();
include('conexion.php');
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","promay20_petshop","#ProgWeb2021","promay20_petshop");

$consulta="SELECT*FROM administradores where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index_admin.php");

}else{
    header("location:../index.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>