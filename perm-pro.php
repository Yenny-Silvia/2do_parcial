<?php
require_once('librerias/conexionBD.php');

$id_usuario = $_POST['id_usuario'];
$id_rol = $_POST['id_rol'];

if(!$_POST['id'])
{
  $sql="insert into permisos (id_usuario,id_rol) values ('$id_usuario','$id_rol');";
}
else {
  $sql="update permisos set id_usuario='$id_usuario',id_rol='$id_rol'where id=".$_POST['id'];
}
$result=$conn->query($sql);

if (!$result) die('Error al insertar datos');

header('Location: permisos.php')
?>
