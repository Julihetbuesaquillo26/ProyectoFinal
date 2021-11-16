<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container">
<<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./src/logo.png" alt="" width="120" height="120">
        <h2>Lista de tareas</h2>
        <p class="lead">Listado de tareas pendientes</p>
      </div>
	  
	  <?php
/* Incluimos la conexion con la bd */
include("conect.php");

if(isset($_GET['id'])) //verificamos que la variable este definida
{
	  
$sql = "SELECT * FROM `tareas` WHERE id_tarea=".$_GET['id'];

$result = mysqli_query($conexion, $sql);
$totalitems = mysqli_num_rows($result);

if($totalitems > 0){
	/*  mostrar los registros de la variable seleccionada   */
		$row = mysqli_fetch_assoc($result);
		
		$id=$row['id_tarea'];
		$fecha=$row['fecha'];
		$hora=$row['hora'];
		$tarea=$row['tarea'];
		$descrip=$row['descrip'];
	
	?>
<!--colocamos un elemento en bloque para organizar los campos de un formulario -->
	<fieldset>
	  
	  <form name="frmContact" class="needs-validation " method="post" action="update-submit.php">

	  <p>
		  <label for="Name">ID </label><input type="hidden" name="selectedid" value="<?php echo $id;?>" />
		  <input type="text" class="form-control" name="id" id="id"  value="<?php echo $id;?>" required>
		  <div class="invalid-feedback">
					 Fecha rquerida
					</div>
		</p>


		<p>
		  <label for="Name">Fecha </label> 
		  <input type="date" class="form-control" name="fecha" id="fecha"  value="<?php echo $fecha;?>" required>
		</p>

		<p>
		  <label for="Name">Hora </label> 
		  <input type="time" class="form-control" name="hora" id="hora"  value="<?php echo $hora;?>" required>
		</p>

		<p>
		  <label for="email">Tarea </label>
		  <input type="text"  class="form-control"  name="tarea" id="tarea" placeholder="Tarea" value="<?php echo $tarea;?>" required>
		</p>
		<p>
		  <label for="phone">Descripción</label>
		  <input type="text"  class="form-control" name="descrip" id="descrip" placeholder="Descripción" value="<?php echo $descrip;?>" required>
		</p>
		 
		<p>&nbsp;</p>
		<p>
		  <input type="submit" name="Submit" id="Submit" value="Actualizar"  class="btn btn-primary btn-lg btn-block">
		</p>
	  </form>
	</fieldset>
	<?php
	}
	else
	{
		echo "No seleccionado o no hay registros";
		
	}

}
else
{
	echo "No se dio una Id";
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
