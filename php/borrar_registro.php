<?php
include 'conexion.php';

if (isset($_POST['accion']) && $_POST['accion'] === 'borrar' && isset($_POST['correo'])) {
    $correo = $_POST['correo'];
    $sql = "DELETE FROM tb_usuarios WHERE email_usuario = '$correo'";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registro borrado.'); window.location.href ='/MyLibrary/usuarios_crud.html'</script>";
    } else {
        echo "<script>alert('Error al borrar el registro.'); window.location.href ='/MyLibrary/usuarios_crud.html'</script>";
    }
}

$conn->close();
?>
