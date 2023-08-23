<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$fecha = date('Y-m-d');

$query = "INSERT INTO tb_contactanos (nombre_contacto, correo_contacto, mensaje_contacto, fecha_contacto) 
          VALUES ('$nombre', '$correo', '$mensaje', '$fecha')";

if (mysqli_query($conn, $query)) {
    //echo header("Location: /MyLibrary/contact.html");
    echo "<script>alert('Mensaje enviado.'); window.location.href ='/MyLibrary/contact.html'</script>";
} else {
    echo "<script>alert('Ha ocurrido un error.'); window.location.href ='/MyLibrary/contact.html'</script>";
}
mysqli_close($conn);
?>


