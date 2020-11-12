<?php 
require_once('librerias/conexionBD.php');

$id_usuario= $_POST['id_usuario'];
$id_rol = $_POST['id_rol'];



$sql = "insert into permisos (id_usuario,id_rol) values ($id_usuario,$id_rol)";

$result =  $conn->query($sql);

if (!$result) die('Error al insertar');
header('Location: permisos.php');
?>