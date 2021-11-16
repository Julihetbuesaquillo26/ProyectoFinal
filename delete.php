<?php
/* Incluimos la bd  */
include("conect.php");

if(isset($_GET['id']))//con ISSET verificamos que la variable id este definifa
{
	/* Update your posted data in your database - insert SQL code. */

	$sql = "DELETE FROM `tareas` WHERE `tareas`.`id_tarea` =  ".$_GET['id'];

	/* Run insert query in database.  */
	$rs = mysqli_query($conexion, $sql);

	/* Check records is updated  or not. */
	if($rs)
	{
		echo "<script>alert('Borrado');</script>";
	}
	
}
else
{
	echo " ";
	
}
?>
<br/>
echo "<script>window.location='sesion.php';</script>";