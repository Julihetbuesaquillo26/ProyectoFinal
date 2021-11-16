<?php

include("conect.php");
if (strlen($_POST['fecha']) !="" && strlen($_POST['tarea']) >= 5 && strlen($_POST['descrip']) >= 5 ) {
    
    $fecha = $_POST['fecha'];
    $hora = $_POST ['hora'];
    $tarea= $_POST['tarea'];
    $descrip = $_POST['descrip'];
     

$minusc_tarea = strtolower($tarea);
$minusc_descrip = strtolower($descrip);

$uctarea = ucfirst($minusc_tarea);
$ucdescrip = ucfirst($minusc_descrip);

    $sql = "INSERT INTO tareas (fecha, hora, tarea, descrip) VALUES ('$fecha', '$hora' ,'$uctarea', '$ucdescrip')";

    
    $res = mysqli_query($conexion, $sql);
    if($res)
    {
    
        
        echo "<script>window.location='sesion.php';</script>";
     
    }
    else
    {
        echo "<script>alert('Error de conexión');</script>";
        echo "<script>window.location='registrar_estudiante.html';</script>";
         
    } 
} else {
    echo "<script>alert('Datos erroneos, debe escribir minimo 5 letras');</script>";
    echo "<script>window.location='registrar_tarea.html';</script>";
}
 

?>