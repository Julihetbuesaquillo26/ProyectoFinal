<?php
session_start();
// conectamos la base de datos al inicio de sesión
include("conect.php");
//creamos las variables para recibir usuario y contraseña del formulario
$usuario = $_POST['username'];
$password = $_POST['password'];
//seleccionamos el usuario de la bd con sus respectiva contraseña
$consulta = mysqli_query ($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$password'");
 // creamos un if para verificar si hay usuarios y contraseñas
if(!$consulta){
    echo "Error en la consulta";
echo mysqli_error($mysqli); 
exit;

}
//Creamos una nueva variable para poder realizar la consulta del usuario ingresado
//Obtenemos los resultados con mysqli_fetch_assoc
 
if($user = mysqli_fetch_assoc($consulta)) {


echo "<script>window.location='sesion.php';</script>";

} else {

 echo "<h1> Usuario  $usuario no existe o contraseña incorrecta </h1>" ;
}

?>