<?php
 //llamamos a la bd
include("conect.php");
 
$sql = "SELECT * FROM `tareas` WHERE 1=1";

$result = mysqli_query($conexion, $sql);

$totalitems = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Form - PHP/MySQL Demo Code</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="bg-light">

<div class="container" style="width:1124px; margin:0 auto;">
<div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./src/logo.png" alt="" width="120" height="120">
        <h2>Lista de tareas</h2>
        <p class="lead">Listado de tareas pendientes</p>
      </div>
	  
<?php

if($totalitems > 0)
{
	$rowheading='<hr/><div class="row "  style="font-weight:bold">
	  <div class="col-md-1">
	  ID
	  </div>
	  <div class="col-md-2">
	  Fecha
	  </div>
	  <div class="col-md-2">
	  Hora
	  </div>
	  <div class="col-md-3">
	 Tarea
	  </div>
	  
	  <div class="col-md-2">
	  Descripción
	  </div>
	   <div class="col-md-2">
	  Acción
	  </div>
	  
	  </div>'; 
	  
	$rowstring=''; // for storing html plus database records
	/*  Run the while loop and make a string of your records  */
		while($row = mysqli_fetch_assoc($result)){
			/* Each row come with each single line of database  */
			/* Asigna las variables con los campos del formulario    */
			$id=$row['id_tarea'];
			$fecha=$row['fecha'];
			$hora=$row['hora'];
			$tarea=$row['tarea'];
			$descrip=$row['descrip'];
			 
			/* Now take row of html with 6 column */
			 $rowstring.='<hr/><div class="row">
	  <div class="col-md-1">'.$id.'</div>
	  <div class="col-md-2">'.$fecha.'</div>
	  <div class="col-md-2">'.$hora.'</div>
	  <div class="col-md-3">'.$tarea.'</div>
	  <div class="col-md-2">'.$descrip.'</div>

	  <div class="col-md-2"> <a class="btn btn-success btn-sm" href="update.php?id='.$id.'" role="button">Actualizar</a> | <a class="btn btn-danger btn-sm" href="delete.php?id='.$id.'" role="button">Borrar</a></div>

	  </div>';
	}
	echo $rowheading.$rowstring; // concat row heading and data string and print.
}
else
{
	echo "No hay tareas";
	
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
