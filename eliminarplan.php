<?php
include ("conexion.php");
$id= $_REQUEST['id_plan'];

$con=conectar();

$sql="DELETE FROM planes WHERE id_plan='$id'";
$result=mysqli_query($con,$sql);

header("Location:rutinas.php");
 ?>
