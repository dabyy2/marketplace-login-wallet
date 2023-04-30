<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash ('sha512', $contrasena);

$query ="INSERT INTO usuarios(nombre_completo,correo_electronico,usuario,contrasena)
            VALUES('$nombre_completo','$correo','$usuario','$contrasena')";




$verificar_correo = mysqli_query($conexion," SELECT * FROM usuarios WHERE correo_electronico ='$correo'");
$verificar_usuario = mysqli_query($conexion," SELECT * FROM usuarios WHERE usuario ='$usuario'");

if (mysqli_num_rows($verificar_correo) > 0 ) {
    echo  '<script> alert ("correo ya existente intente nuevamente");
                       window.location ="../index.php"; </script>';
    exit();

}
if (mysqli_num_rows($verificar_usuario) > 0 ) {
    echo  '<script> alert ("usuario ya existente intente nuevamente");
                       window.location ="../index.php"; </script>';
    exit();

}
if ($nombre_completo != null&&$correo != null&&$usuario!= null&&$contrasena!= null)
{
    $ejecutar = mysqli_query($conexion,$query);
}else
{
    echo '<script> alert ("error por favor complete todos los campos ");
                       window.location ="../index.php"; </script>';
}




    if ($ejecutar){
        echo '<script> alert ("se ha registrado con exito");
                       window.location ="../index.php"; </script>';
    } else {
        echo '<script> alert ("error por favor intente nuevamente");
                       window.location ="../index.php"; </script>';
    }
    mysqli_close($conexion);

?>