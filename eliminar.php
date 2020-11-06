<?php 
require_once('librerias/conexionBD.php');

$id = $_GET['id'];

$sql = "delete from roles where id = $id";
$estado = $conn->query($sql);

if (!$estado) die("Error al eliminar");
header("Location: roles.php");
?>