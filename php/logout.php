<?php
session_start();

if(isset($_SESSION['usuario'])) {
    // Si la sesión existe, la cerramos
    session_destroy();
    echo "<script>alert('Sesión cerrada con éxito.'); window.location.href ='/MyLibrary/login.html'</script>";
} else {
    // Si la sesión no existe, mostramos un mensaje
    echo "<script>alert('La sesión ya está cerrada.'); window.location.href ='/MyLibrary/login.html'</script>";
}
exit();
?>