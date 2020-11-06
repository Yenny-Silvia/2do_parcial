<?php 

require_once('librerias/cabe.php');
?>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Nuevo Rol</h1>        
                <form action="rol-procesa.php" method="post">
                  <div class="form-group">
                    <label for="">descripcion</label>
                    <input type="text" name="descripcion" class="form-control" >
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </form>                
            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>