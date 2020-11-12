<?php 
require_once('librerias/conexionBD.php');

$descripcion = $_POST['descripcion'];

if(!$_POST['id'])
{
  $sql="insert into roles (descripcion) values ('$descripcion')";
}
else {
  $sql="update roles set descripcion='$descripcion' where id=".$_POST['id'];
}

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: roles.php');
?>