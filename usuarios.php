<?php 
require_once('librerias/conexionBD.php');

$sql = "select * from usuarios";
$result =  $conn->query($sql);

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Usuarios</h1>   
                <p>
                    <a href="usu-edit.php" class="btn btn-success">Nuevo</a>
                </p>     
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Clave</th>
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
                        echo '<td>'.$fila['correo'].'</td>';
                        echo '<td>'.$fila['clave'].'</td>';
                        echo '<td><a href="usu-edit.php?id=' . $fila['id']. '" class="btn btn-primary">Editar</a></td>';
                        echo '<td><a href="usu-elim.php?id=' . $fila['id']. '"onclick="return confirm(\'Seguro que quiere eliminar?\')" class="btn btn-danger">Eliminar</a></td>';
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
