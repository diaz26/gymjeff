<?php
include ("conexion.php");
$id= $_REQUEST['id'];
$xxx= $_POST['user'];
$pass=$_POST['pass'];
$rol=$_POST['rol'];

$con=conectar();

$sql="UPDATE usuarios SET user='$xxx', pass='$pass', rol='$rol' WHERE id=$id" ;

$result=mysqli_query($con,$sql);

header("Location:usuarios.php");
 ?>
