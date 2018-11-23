<?php
include ("conexion.php");
$id= $_REQUEST['id_plan'];
$xxx= $_POST['nombre'];
$precio= $_POST['precio'];
$des= $_POST['descrip'];

$con=conectar();

$sql="UPDATE planes SET nombre='$xxx', pagar='$precio', descripcion='$des' WHERE id_plan=$id" ;
echo $sql;
$result=mysqli_query($con,$sql);

header("Location:rutinas.php");
 ?>
