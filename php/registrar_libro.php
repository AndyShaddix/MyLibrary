<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $isbn = $_POST["isbn"];
    $titulo = $_POST["titulo"];
    $cantidad = $_POST["cantidad"];

    $verificar_sql = "SELECT * FROM tb_libros WHERE LOWER(nombre_libro) = '$titulo'";
    $verificar_result = $conn->query($verificar_sql);
    
    if ($verificar_result->num_rows > 0) {
        echo "<script>alert('El libro ya esta registrado. Intente otro.'); window.location.href ='/MyLibrary/productos.html'</script>";        echo "El libro ya está registrado.";
    } else {
        $insert_sql = "INSERT INTO tb_libros (id_libro, nombre_libro, cantidad)
                       VALUES ('$isbn', '$titulo', '$cantidad')";
                       
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('Libro registrado exitosamente.'); window.location.href ='/MyLibrary/productos.html'</script>";
        } else {
            echo "<script>alert('Error al registrar el libro.'); window.location.href ='/MyLibrary/productos.html'</script>";
        }
    }
    $conn->close();
}
?>

<?php
include 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isbn = $_POST["isbn"];
    $titulo = $_POST["titulo"];
    $cantidad = $_POST["cantidad"];
    
    $sql = "INSERT INTO tb_libros (id_libro, nombre_libro, cantidad)
            VALUES ('$isbn', '$titulo', '$cantidad')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Libro registrado exitosamente.'); window.location.href ='/MyLibrary/productos.html'</script>";
    } else {
        echo "<script>alert('Error al registrar el libro.'); window.location.href ='/MyLibrary/productos.html'</script>";
    }

    $conn->close();
}
?>
