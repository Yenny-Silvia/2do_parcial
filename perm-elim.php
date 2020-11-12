<?php
require_once('librerias/conexionBD.php');
if($_GET['id'])
{
  $sql="delete from permisos where id=".$_GET['id'];
}
$result=$conn ->query($sql);

if(!$result) die('Error al eliminar datos');
 header('Location: permisos.php');
?>