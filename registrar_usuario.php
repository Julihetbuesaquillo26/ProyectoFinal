<?php
//primero debemos relacionar la base de datos con el registro de usuario para que los datos del formualrio de registro
//se almacenen en la bd usamos el archivo conect.php
include("conect.php"); 

$pass1=$_POST['contrasena']; //variables para la recibir la contraseña1 y la de verificación
$pass2=$_POST['contrasena2'];


if ($pass1== $pass2) {
    
    $nombre = $_POST['nombre'];

    $lowernombre = strtolower($nombre); //convertimos a minusculas 

    $partes = explode(" ", $lowernombre); //la variable parte divide el nombre en 2 partes deacuerdo un espacio
     
        $ucnombre = ucfirst($partes[0]). " " .ucfirst($partes[1]); //convertimos la primera letra del primer nombre  en mayuscula


        if(!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9 A-Z a-z @#\-_$%^&+=§!\? ]{8,20}$/',$pass1)) { //expre reg negada
            echo "La contraseña debe tener al menos una letra Mayuscula ,una minuscula  y un número, y debe tener entre 8 y 20 caracteres";
        }

        else{
            

    $sql = "INSERT INTO usuarios (usuario, Nombre, direccion,telefono, contraseña) VALUES ('$_POST[usuario]', '$ucnombre', '$_POST[direccion]', '$_POST[telefono]','$pass1')";
    $res = mysqli_query($conexion, $sql);
    if($res) //si los datos se almacenan correctamente el sistema lo envia a el index para que inicie sesión o de lo contrario lo envia a registro usuario
    {
         
        echo "<script>window.location='index.html';</script>";
     
    }
    else
    {
       
        echo "<script>window.location='registrar_usuario.html';</script>";
         
    } 
}
} else {
    echo "<h1>Las contraseñas no coinciden</h1>";
 }
 

?>