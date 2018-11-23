<?php
include ("conexion.php");

if(isset($_POST['nombre']) and isset($_POST['costo']) and isset($_POST['descrip'])){
  $user=$_POST['nombre'];
  $pass=$_POST['costo'];
  $rol=$_POST['descrip'];

  $con=conectar();

  $sql="insert into planes values (null, '$user','$pass','$rol')";
  $resultado= mysqli_query($con,$sql);

  header("Location:rutinas.php");
}

 ?>
