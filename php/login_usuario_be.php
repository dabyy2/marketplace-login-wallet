<?php
session_start();
include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$contrasena= hash('sha512',$contrasena);
$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo_electronico = '$correo' and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0) {
    $_SESSION['usuario']=$correo;

    header("location:../bienvenido.php");

    exit;
}
else {
    echo'<script> alert ("incorrect user or pasword ,please try again");
                       window.location ="../index.php"; </script>';
       exit;
}

?>