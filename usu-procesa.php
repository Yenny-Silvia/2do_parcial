<?php 
require_once('librerias/conexionBD.php');

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$clave = md5($_POST['clave']);

$sql = "insert into usuarios (usuario,correo,clave) values ('$usuario','$correo','$clave')";
$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>