<?php 
require_once('librerias/cabe.php');
require_once('librerias/conexionBD.php');

$sql = "select p.*,u.usuario as usuario,r.descripcion as rol from permisos p inner join usuarios u on p.id_usuario=u.id inner join roles r ON p.id_rol=r.id";
$result = $conn->query($sql);


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
                    <?php
       if($result->num_rows>0){
         $conta=0;
         while ($fila=$result->fetch_array()) {
           echo "<tr>";
           echo '<td>'.++$conta.'</td>';
           echo '<td>'.$fila['usuario'].'</td>';
           echo '<td>'.$fila['rol'].'</td>';
           echo '<td><a href="perm-ed.php?id=' . $fila['id']. '" class="btn btn-primary">Editar</a></td>';
           echo '<td><a href="perm-elim.php?id=' . $fila['id']. '"onclick="return confirm(\'Seguro que quiere eliminar?\')" class="btn btn-danger">Eliminar</a></td>';
           echo "</tr>";
         }
       }
       else{
         '<p> No existen registros</p>'
;        }?>
                </table>   
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>
