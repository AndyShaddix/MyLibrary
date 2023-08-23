<?php session_start(); 
if (isset($_GET['borrar_carrito'])) {
    unset($_SESSION['carrito']); // Borrar el carrito
}
if(isset($_SESSION['carrito'])){
$carrito_mio=$_SESSION['carrito'];
}
if(isset($_SESSION['carrito'])){
    for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if(isset($carrito_mio[$i])){
        if($carrito_mio[$i]!=NULL){ 
        if(!isset($carrito_mio['cantidad'])){$carrito_mio['cantidad'] = '0';}else{ $carrito_mio['cantidad'] = $carrito_mio['cantidad'];}
        $total_cantidad = $carrito_mio['cantidad'];
    $total_cantidad ++ ;
    if(!isset($totalcantidad)){$totalcantidad = '0';}else{ $totalcantidad = $totalcantidad;}
    $totalcantidad += $total_cantidad;
    }}}
}
     if(!isset($totalcantidad)){$totalcantidad = '';}else{ $totalcantidad = $totalcantidad;}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>MyLibrary - Carrito</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZMP7rVo3mIykD+CT9zWHAoA2VOUaDBaR+ARhEZtaIWvCyBhEYBo5t8WArE9d1Bq" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="styles.css" rel="stylesheet">
	<link href="css/all.min.css" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body> 

	<div class="container">
			<div class="placeholder">
				<div class="parallax-window" data-parallax="scroll" data-image-src="img/banner.png">
					<div class="tm-header">
						<div class="row tm-header-inner">
							<div class="col-md-6 col-12">
								<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
								<div class="tm-site-text-box">
									<h1 class="tm-site-title">MyLibrary</h1>
									<h6 class="tm-site-description"></h6>	
								</div>
							</div>
							<nav class="col-md-6 col-12 tm-nav">
								<ul class="tm-nav-ul">
									<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Inicio</a></li>
									<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">Acerca</a></li>
									<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contacto</a></li>
									<li class="tm-nav-li"><a href="login.html" class="tm-nav-link">Login</a></li>
									<li class="tm-nav-li"><a href="carrito.php" class="tm-nav-link active"><i class="fas fa-1x fa-cart-arrow-down tm-feature-icon"></i></a></li>
								</ul>
							</nav>	
						</div>
					</div>
				</div>
			</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Mi carrito</h2>
				<p class="col-12 text-center">Completar compra.</p>
			</header>
			<table>
        <tr>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
		<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

	td{
		border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
	}

    th {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #b6783f;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }

    .total-row td {
        font-weight: bold;
    }
</style>

        <?php
if (isset($carrito_mio)) {
    $total_carrito = 0; 
    foreach ($carrito_mio as $producto) {
        echo '<tr>';
        
        if (isset($producto['titulo'])) {
            echo '<td>' . $producto['titulo'] . '</td>';
        } else {
            echo '<td></td>';
        }
        
        if (isset($producto['cantidad'])) {
            echo '<td>' . $producto['cantidad'] . '</td>';
        } else {
            echo '<td></td>';
        }
        
        if (isset($producto['precio']) && isset($producto['cantidad'])) {
            $subtotal = $producto['precio'] * $producto['cantidad'];
            echo '<td>' . $subtotal . '</td>';
            $total_carrito += $subtotal;
        } else {
            echo '<td></td>';
        }
        
        echo '</tr>';
    }

    echo '<tr>';
    echo '<td colspan="2">TOTAL</td>';
    echo '<td>' . $total_carrito . '</td>';
    echo '</tr>';
}
?>
    </table>
	<style>
    .botones-container {
      display: flex;
      justify-content: center; /* Centra horizontalmente */
      align-items: center; /* Centra verticalmente */
    }

    .btn {
      display: inline-block;
      margin: 5px;
      padding: 10px 20px;
      border-radius: 20px; 
      text-decoration: none; 
      font-weight: bold;
    }

    .btn-custom-borrar {
      background-color: red !important;
      color: white !important;
    }

    .btn-custom-compra {
      background-color: green !important;
      color: white !important;
    }
  </style>
	<div class="botones-container">
	<a href="carrito.php?borrar_carrito=true" class="btn btn-custom-borrar">Borrar Carrito</a>
	<a href="#" class="btn btn-custom-compra" id="realizarCompraBtn">Realizar Compra </a>
	</div>
		<footer class="tm-footer text-center">
			<footer class="tm-footer text-center">
				<p>Copyright &copy; 2023. Aplicaciones WEB.
					<div class="container">
					</div>
				
					<div class="social">
						<a href="https://www.facebook.com/Andy.Shadow.AS/"><img src="img/facebook.png" alt="facebook"></a>
						<a href="https://github.com/AndyShaddix"><img src="img/github.png" alt="github"></a>
						<a href="https://www.instagram.com/andyesquer/"><img src="img/instagram.png" alt="instagram"></a>
					</div>
			</footer>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			var acc = document.getElementsByClassName("accordion");
			var i;
			
			for (i = 0; i < acc.length; i++) {
			  acc[i].addEventListener("click", function() {
			    this.classList.toggle("active");
			    var panel = this.nextElementSibling;
			    if (panel.style.maxHeight) {
			      panel.style.maxHeight = null;
			    } else {
			      panel.style.maxHeight = panel.scrollHeight + "px";
			    }
			  });
			}	
		});
	</script>
</body>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var realizarCompraBtn = document.getElementById("realizarCompraBtn");
    
    realizarCompraBtn.addEventListener("click", function () {
      var confirmarCompra = confirm("¿Estás seguro de realizar la compra?");
      
      if (confirmarCompra) {
        // Aquí se ejecutarían las acciones en tu base de datos
        // Por ejemplo, enviar una petición a tu archivo PHP que actualiza las tablas
        // y muestra un mensaje de éxito
        alert("Compra realizada con éxito");
      }
    });
  });
</script>
</html>