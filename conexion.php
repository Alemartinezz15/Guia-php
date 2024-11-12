<?php
$host = 'localhost';  
$usuario = 'root';    
$contraseña = 'root';     
$base_de_datos = 'guia_php';  

// Crear la conexión
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
