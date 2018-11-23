<?php
include ("conexion.php");
$id= $_REQUEST['id'];

$con=conectar();

$sql="DELETE FROM usuarios WHERE id=$id";
$result=mysqli_query($con,$sql);

header("Location:usuarios.php");
 ?>
