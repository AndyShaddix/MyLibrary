<?php session_start(); 
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
    <title>MyLibrary - Login</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body> 

	<div class="container">
		<!-- Top box -->
			<!-- Logo & Site Name -->
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
									<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link active">Login</a></li>
									<li class="tm-nav-li"><a href="index.php" class="tm-nav-link"><i class="fas fa-1x fa-cart-arrow-down tm-feature-icon"></i></a></li>
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
<!-- MODAL CARRITO -->
<div class="modal fade centro-horizontal" id="modal_cart" tabindex="-1"  aria-hidden="true">
	<div class="modal-dialog centro-horizontal">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
			  <div class="modal-body">
				  <div>
					  <div class="p-2">
						  <ul class="list-group mb-3">
							  <?php
							  if(isset($_SESSION['carrito'])){
							  $total=0;
							  for($i=0;$i<=count($carrito_mio)-1;$i ++){
								  if(isset($carrito_mio[$i])){
								  if($carrito_mio[$i]!=NULL){
							  ?>
							  <li class="list-group-item justify-content-between px-4">
								  <div class="row" >
									  <div class="col-10 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
									  </div>
									  <div class="col-2 p-0"  style="text-align: right; color: #000000;" >
									  <span class="text-muted"  style="text-align: right; color: #000000;"> $<?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?></span>
									  </div>
								  </div>
							  </li>
							  <?php
							  $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							  }
							  }
							  }
							  }
							  ?>
							  <li class="list-group-item d-flex justify-content-between">
							  <span  style="text-align: left; color: #000000;">Total (MXN)</span>
							  <strong  style="text-align: left; color: #000000;"><?php
							  if(isset($_SESSION['carrito'])){
							  $total=0;
							  for($i=0;$i<=count($carrito_mio)-1;$i ++){
								  if(isset($carrito_mio[$i])){
							  if($carrito_mio[$i]!=NULL){ 
							  $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							  }
							  }}}
							  if(!isset($total)){$total = '0';}else{ $total = $total;}
							  echo $total; ?> $</strong>
							  </li>
						  </ul>
					  </div>
				  </div>
			  </div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
		  <a type="button" class="btn btn-primary" href="php/borrarcarro.php">Vaciar carrito</a>
		</div>
	  </div>
	</div>
  </div>
  <!-- END MODAL CARRITO -->
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
</html>