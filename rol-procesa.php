<?php 
require_once('librerias/conexionBD.php');

$descripcion = $_POST['descripcion'];

// var_dump($fecha_nac); // YYYY-MM-DD
// die();

$sql = "insert into roles (descripcion) values ('$descripcion')";

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: roles.php');
?>