<?php
/* Include your connection file  */
include("conect.php");
/* Check if is set the post variable txtName  */
if(isset($_POST['id']))
{
/* Get the all form field post variables. */
 

         $id= $_POST['id'];
		$fecha=$_POST['fecha'];
		$hora=$_POST['hora'];
		$tarea=$_POST['tarea'];
		$descrip=$_POST['descrip'];

/* Update your posted data in your database - insert SQL code. */

$sql = "UPDATE `tareas` SET `fecha` = '$fecha', `hora` = '$hora', `tarea` = '$tarea', `descrip` = '$descrip'  WHERE `tareas`.`id_tarea` = ".$id;


/* Run insert query in database.  */
$rs = mysqli_query($conexion, $sql);
 

/* Check records is updated  or not. */
if($rs)
{
	echo "<script>alert('Tarea actualizada');</script>";
}
}
else
{
	echo "Operación no realizada";
	
}
?>
<br/>
echo "<script>window.location='sesion.php';</script>";

