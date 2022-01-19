<?php 

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$validar_login = mysqli_query($conexion, "SELECT FROM usuarios WHERE correo='$correo'
and contrasena= '$contrasena'"); 

if (count($validar_login) >0) {
    header("location:index.html");

    exit;
    
}else {
    echo '
    <script>
    
    alert("Usuario no encontado por favor intenta nuevamente");
    windows.location = "index.html";
    
    </script>
    
    ';

    exit;
}


?>