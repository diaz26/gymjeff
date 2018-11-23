<?php
include ("conexion.php");

if(isset($_POST['user']) and isset($_POST['pass']) and isset($_POST['rol'])){
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $rol=$_POST['rol'];

  $con=conectar();

  $sql="insert into usuarios values (null, '$user','$pass','$rol')";
  $resultado= mysqli_query($con,$sql);

  header("Location:usuarios.php");
}

 ?>
