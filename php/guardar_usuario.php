<?php
include 'conexion.php';

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];
$correo = $_POST['correo'];

if ($pass !== $pass2) {
    echo "<script>alert('Las contraseñas no coinciden.'); window.location.href ='/MyLibrary/registrarse.html'</script>";
    exit;
}

$query = "INSERT INTO tb_usuarios (nombre_usuario, pass_usuario, email_usuario) 
          VALUES ('$usuario', '$pass', '$correo')";

if (mysqli_query($conn, $query)) {
    echo "<script>alert('Usuario registrado.'); window.location.href ='/MyLibrary/login.html'</script>";
} else {
    echo "<script>alert('Ha ocurrido un error con el registro.'); window.location.href ='/MyLibrary/registrarse.html'</script>";

}

mysqli_close($conn);
?>
