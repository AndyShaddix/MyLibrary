<?php
// Incluir el archivo de conexión
include 'conexion.php';

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$fecha = date('Y-m-d');

$query = "INSERT INTO tb_contactanos (nombre_contacto, correo_contacto, mensaje_contacto, fecha_contacto) 
          VALUES ('$nombre', '$correo', '$mensaje', '$fecha')";

// Ejecutar la consulta
if (mysqli_query($conn, $query)) {
    echo "Datos insertados correctamente.";
} else {
    echo "Error al insertar datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


