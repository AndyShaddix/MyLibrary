<?php
include 'conexion.php';

// Obtener datos del formulario
$usuario_ingresado = $_POST['usuario'];
$contrasena_ingresada = $_POST['pass'];

// Consulta para verificar las credenciales
$query = "SELECT * FROM tb_usuarios WHERE nombre_usuario = '$usuario_ingresado' AND pass_usuario = '$contrasena_ingresada'";
$result = mysqli_query($conn, $query);

// Verificar el resultado de la consulta
if (mysqli_num_rows($result) == 1) {
    // Redirigir al index.php después de un inicio de sesión exitoso
    echo "<script>alert('Inicio de sesion exitoso.'); window.location.href ='/MyLibrary/index.php'</script>";
} else {
    echo "Credenciales incorrectas. Por favor, verifica tu usuario y contraseña.";
}

// Cerrar la conexión
mysqli_close($conn);
?>
