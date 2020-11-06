<?php 
session_start();
if (!isset($_SESSION['login']) || $_SESSION['login'] != "OK") {
    header('location: index.php');
}


    require_once('librerias/cabe.php');
    ?>

    <style type="text/css">
   
   
    fieldset{
    	border: solid 3px #572364;
    	border-radius: 25px;
    	margin-top: 20px;
    }
    legend{
    	color: #B22222;
    	border: solid 2px #b44c43;
    	border-radius: 10px;
    	background-color: 	#EA899A; 
    	padding: 5px;
    	margin: 10px;
    }
    span{
    	font-family: fantasy;
    	padding: 5px;
    }	
    </style>

      <div class="container"> 
		      	
        <div class="row">
            <div class="col-12">
            	< 
                <h1 align="center">INICIO</h1>
                <hr>
                <div align="center" id="marco" ><img src="img/Imagen (2).jpg" alt="Foto Actual" width="150x" border="4" >
                </div>


				<fieldset>
         		    <legend> DATOS   PERSONALES </legend> 
				    <ul>
				    	<li><span> NOMBRE: </span>  Silvia Yenny Quispe Quispe</li>
				    	<li><span> MATERIA: </span>  EMERGENTES I </li>
				    	<li><span> PARALELO: </span>  6TO "C" </li>
				    	<li><span> NRO CARNET: </span>  9968069 LP</li>
				    	<li><span> R.U.: </span>  200020890</li>
				    	
				    	<li><span> NRO CELULAR: </span> 77546282</li>
				    	<li><span> E-MAIL: </span>   yennyquispe1224@gmail.com</li>
				    	

				    </ul>
				</fieldset>

            </div>
        </div>
      </div>
<?php 
require_once('librerias/pie.php');
 ?>