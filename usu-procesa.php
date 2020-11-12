<?php 
require_once('librerias/conexionBD.php');

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = md5($_POST['clave']);

if (!$_POST['id']) {

$sql = "insert into usuarios (usuario,correo,clave) values ('$usuario','$correo','$clave')";
}

else {
  $sql="update usuarios set usuario='$usuario',correo='$correo', clave='$clave' where id=".$_POST['id'];
}
$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>