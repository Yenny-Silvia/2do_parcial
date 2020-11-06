<?php 

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuevo usuarios</h1>        
                <form action="usu-procesa.php" method="post">
                  <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" name="correo" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label for="">Clave</label>
                    <input type="password" name="clave" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>