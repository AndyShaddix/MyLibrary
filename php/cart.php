<?php
session_start();

if (isset($_SESSION['carrito'])) {
    $carrito_mio = $_SESSION['carrito'];
} else {
    $carrito_mio = array();
}

if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $ref = $_POST['ref'];

    $producto_existente = false;

    foreach ($carrito_mio as $index => $producto) {
        if ($ref == $producto['ref']) {
            $producto_existente = true;
            $carrito_mio[$index]['cantidad'] += $cantidad;
            break;
        }
    }

    if (!$producto_existente) {
        $carrito_mio[] = array("titulo" => $titulo, "precio" => $precio, "cantidad" => $cantidad, "ref" => $ref);
    }

    $_SESSION['carrito'] = $carrito_mio;
}

if (isset($_SESSION['carrito'])) {
    for ($i = 0; $i < count($carrito_mio); $i++) {
        if ($carrito_mio[$i] != NULL && isset($carrito_mio[$i]['cantidad'])) {
            $totalc = $carrito_mio[$i]['cantidad'];
            $totalc++;
            $totalcantidad += $totalc;
        }
    }
}

header("Location: " . $_SERVER['HTTP_REFERER'] . "");
?>
