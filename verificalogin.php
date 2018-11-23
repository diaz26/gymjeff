<?php
include ("conexion.php");

$user=$_POST['user'];
$pass=$_POST['pass'];

$con=conectar();
$sql="SELECT * FROM usuarios WHERE USER='$user' AND PASS='$pass' ";
$result=mysqli_query($con,$sql);


if ($file=mysqli_fetch_array($result)) {

  if ($file['rol'] =='admin') {
    header("Location:homeadmin.php");
  }else {
    header("Location:homeusuario.php?user=$file ['user']");
  }
}else {
  echo "sumerce no existe";
}
	?>
