<?php
$host = "localhost";
$usuario = "root";
$contraseña = "";
$base_datos = "ProyectoWeb";

$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
$conn = $conexion;
?>
    