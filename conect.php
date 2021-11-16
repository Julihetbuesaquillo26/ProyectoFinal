<?php

//Primero se hace la conexión con la base de datos para poder obtener y almacenar la información, lsi la base de datos
//se conecta bien vamos al index para crear el formulario

$conexion = new mysqli("localhost", "root", "", "bd_tareas"); // conexion base de datos

 if ($conexion->connect_errno) { //si la conexión da error muestre un mensaje 
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
 }
 

?>