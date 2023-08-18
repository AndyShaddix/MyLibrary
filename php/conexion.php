<?php
// Datos de conexión a la base de datos
$host = "localhost";
$user = "root";
$password = "";
$database = "librarydb";
// Crear la conexión
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Error de conexión: ".mysqli_connect_error());
}
?>