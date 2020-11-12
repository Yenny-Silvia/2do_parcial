<?php
require_once('librerias/conexionBD.php');
$id='';
$id_usuario='';
$id_rol='';
if (isset($_GET["id"])) {
  $sql="select * from permisos where id=".$_GET['id'];
  $result=$conn->query($sql);
  $fila=$result->fetch_array();
  $id=$fila['id'];
  $id_usuario=$fila['id_usuario'];
  $id_rol=$fila['id_rol'];
}
require_once('librerias/cabe.php');
?>
  <div class="container">
    <div class="row">
    <div class="col-12">
    <h1>Editar Permisos</h1>
    <form action="perm-pro.php" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
      </div>
    <div class="form-group">
      <label for="">Usuario</label>
      <input type="text" name="id_usuario" value="<?php echo $id_usuario; ?>" class="form-control"required >
    </div>
    <div class="form-group">
      <label for="">Rol</label>
      <input type="text" name="id_rol" value="<?php echo $id_rol; ?>"class="form-control" required >
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
 
  <?php
  require_once('librerias/pie.php');
  ?>