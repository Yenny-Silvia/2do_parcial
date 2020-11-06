<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}
require_once('librerias/conexionBD.php');

$sql = "select p.*,u.usuario as usuario,r.descripcion as rol from permisos p inner join usuarios u on p.id_usuario=u.id inner join roles r ON p.id_rol=r.id";
$result = $conn->query($sql);
$permisos = array();
while ($fila = $result->fetch_array()) {
  $permisos[]=$fila;
}

$sql = "select * from usuarios";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}


$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Solicitar Permisos</h1>     
                <p>
                    <a href="perm-edit.php" class="btn btn-success">Nuevo</a>
                </p>  
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Rol</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach ($permisos as $item): ?>
                    <tr>
                        <td><?= $item['id']?></td>
                        
                        <td><?= $item['usuario']?></td>
                        <td><?= $item['rol']?></td>
                        <td>
                            <a href="#" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>   
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>
