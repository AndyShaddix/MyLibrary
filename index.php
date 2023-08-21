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
    <title>MyLibrary</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="styles.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link href="https://ccdn.jsdelivr.net/npm/bootstrap@5.02/dist/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/all.min.css" rel="stylesheet" />
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
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Inicio</a></li>
								<li class="tm-nav-li"><a href="about.html" class="tm-nav-link">Acerca</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contacto</a></li>
								<li class="tm-nav-li"><a href="login.html" class="tm-nav-link">Login</a></li>
								<li class="tm-nav-li"><a href="carrito.php" class="tm-nav-link"><?php echo $totalcantidad;?><i class="fas fa-1x fa-cart-arrow-down tm-feature-icon"></i></a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>
		<style>
		.menu-toggle {
    	display: none;
   		cursor: pointer;
    	padding: 10px;
    	background-color: transparent;
    	border: none;
		}

		.bar {
    	display: block;
    	width: 25px;
    	height: 3px;
    	margin: 5px auto;
    	background-color: #333;
    	transition: background-color 0.3s ease;
		}

/* Cambiar color de las barras cuando se active el menú */
		.menu-toggle.active .bar {
   		background-color: #fffff;
		}

/* Estilos para el menú de navegación */
	.navbar {
    background-color: #b6783f;
    padding: 20px;
	}

	.nav-list {
    list-style: none;
    display: flex;
    align-items: center;
	}

	.nav-list li {
    margin-right: 20px;
	}

	.nav-list li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s ease;
	}

	.nav-list li a:hover {
    color: #f4f4f4;
	}

/* Estilos para la versión móvil */
	@media (max-width: 768px) {
    .menu-toggle {
        display: block;
    }

    .nav-list {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #333;
        width: 100%;
        border-top: 1px solid #444;
    }

    .nav-list.active {
        display: flex;
    }

    /* Estilos para los enlaces en el menú desplegable */
    .nav-list a {
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    .nav-list a:hover {
        background-color: #444;
    }
}
			</style>
		<nav class="navbar">
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-list" id="nav-list">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Bienvenido a MyLibrary</h2>
				<p class="col-12 text-center">Cada libro, una nueva travesía.</p>
			</header>
			
			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Fantasia</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Horror</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Educativos</a></li>
					</ul>
				</nav>
			</div>
			<style>
    /* Estilo para el formulario */
    #formulario {
        margin-bottom: 10px;
        background-color: #b6783f;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
		text-align: center;
    }

    /* Estilo para los botones */
    .btn-group button {
        margin-right: 5px;
		background-color: #532121; /* Cambia el color de fondo del botón */
        color: #ffffff; /* Cambia el color del texto del botón */
        border: none; /* Quita el borde del botón */
    }
</style>
			<!-- Gallery -->
			<div class="row tm-gallery">
				<!-- gallery page 1 -->
				<div id="tm-gallery-page-fantasia" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Harry Potter y la piedra filosofal.</h4>
								<p class="tm-gallery-description">Harry Potter, un joven huérfano que descubre su verdadera herencia como mago el día de su undécimo cumpleaños.</p>
								<p class="tm-gallery-price">$500</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu001" />                           
									  <input name="precio" type="hidden" id="precio" value="500" />
									  <input name="titulo" type="hidden" id="titulo" value="Harry Potter y la piedra filosofal." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1"/>
								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/02.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">El señor de los anillos.<br>La comunidad del anillo.</h4>
								<p class="tm-gallery-description">La historia se desarrolla en un mundo de fantasía lleno de razas mágicas, héroes valientes y un anillo con poderes corruptores.</p>
								<p class="tm-gallery-price">$650</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu002" />                           
									  <input name="precio" type="hidden" id="precio" value="650" />
									  <input name="titulo" type="hidden" id="titulo" value="El señor de los anillos. La comunidad del anillo." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">El libro de los secretos vivientes.</h4>
								<p class="tm-gallery-description">Al no poder localizar a su autora, releen el libro mientras sueñan con lo maravilloso que sería vivir en ese mundo.</p>
								<p class="tm-gallery-price">$200</p>

								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu003" />                           
									  <input name="precio" type="hidden" id="precio" value="200" />
									  <input name="titulo" type="hidden" id="titulo" value="El libro de los secretos vivientes." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Crónicas de Narnia.<br>El león, la bruja y el ropero.</h4>
								<p class="tm-gallery-description">Una obra de fantasía clásica que ha encantado a lectores de todas las edades durante décadas.</p>
								<p class="tm-gallery-price">$350</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu004" />                           
									  <input name="precio" type="hidden" id="precio" value="350" />
									  <input name="titulo" type="hidden" id="titulo" value="Crónicas de Narnia.<br>El león, la bruja y el ropero." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Fuego y sangre.</h4>
								<p class="tm-gallery-description">Se presenta como crónica histórica que narra los eventos que ocurrieron casi trescientos años antes de los acontecimientos de "Canción de Hielo y Fuego".</p>
								<p class="tm-gallery-price">$1000</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu005" />                           
									  <input name="precio" type="hidden" id="precio" value="1000" />
									  <input name="titulo" type="hidden" id="titulo" value="Fuego y sangre." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">La forma del agua.</h4>
								<p class="tm-gallery-description">Un día, Elisa descubre un ser misterioso y anfibio que está siendo retenido en el laboratorio como parte de un experimento clasificado.</p>
								<p class="tm-gallery-price">$600</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu006" />                           
									  <input name="precio" type="hidden" id="precio" value="600" />
									  <input name="titulo" type="hidden" id="titulo" value="La forma del agua." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Jardines de la luna.</h4>
								<p class="tm-gallery-description">La trama se desarrolla en el imperio malazano, un vasto y poderoso reino que busca expandir su dominio por medio de la conquista y la diplomacia.</p>
								<p class="tm-gallery-price">$310</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu007" />                           
									  <input name="precio" type="hidden" id="precio" value="310" />
									  <input name="titulo" type="hidden" id="titulo" value="Jardines de la luna." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Buscando a Alaska.</h4>
								<p class="tm-gallery-description">Encontraremos una protagonista totalmente disparatada y divertida, e intentará seducir a un hombre que no quiere saber nada de mujeres.</p>
								<p class="tm-gallery-price">$550</p>
								<form id="formulario" name="formulario" method="post" action="php/cart.php">
		
									<button type="submit" class="btn btn-sm btn-outline-secondary">Añadir al carrito</button>
									  <input name="ref" type="hidden" id="ref" value="mu008" />                           
									  <input name="precio" type="hidden" id="precio" value="200" />
									  <input name="titulo" type="hidden" id="titulo" value="Buscando a Alaska." />
									  <input name="cantidad" type="number" id="cantidad" value="1" class="pl-2" min="1" />

								  </form>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 1 -->
				
				<!-- gallery page 2 -->
				<div id="tm-gallery-page-horror" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Salad Menu One</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$25</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Second Title Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$30</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Salad Item</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$45</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Superior Salad</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Sed ultricies dui</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$55 / $60</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat nunc. Vestibulum tristique</p>
								<p class="tm-gallery-price">$75</p>
							</figcaption>
						</figure>
					</article>
				</div> <!-- gallery page 2 -->
				
				<!-- gallery page 3 -->
				<div id="tm-gallery-page-educativos" class="tm-gallery-page hidden">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle One</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$12.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Noodle Second</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$15.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Third Soft Noodle</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$20.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Aliquam sagittis</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$30.25</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Maecenas eget justo</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$35.50</p>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
						<figure>
							<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
							<figcaption>
								<h4 class="tm-gallery-title">Quisque et felis eros</h4>
								<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								<p class="tm-gallery-price">$40.50</p>
							</figcaption>
						</figure>
					</article>

				</div> <!-- gallery page 3 -->
			</div>
			<div class="tm-section tm-container-inner">
				<div class="row">
					<div class="col-md-6">
						<figure class="tm-description-figure">
							<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
						</figure>
					</div>
					<div class="col-md-6">
						<div class="tm-description-box"> 
							<h4 class="tm-gallery-title">Contáctanos.</h4>
							<p class="tm-mb-45">¡Nos encantaría escuchar de ti! Si tienes preguntas, comentarios, sugerencias o simplemente quieres saludar, no dudes en ponerte en contacto con nosotros. Tu opinión es importante para nosotros y haremos todo lo posible para responder a la brevedad.</p>
							<a href="contact.html" class="tm-btn tm-btn-default tm-right">Leer más.</a>
						</div>
					</div>
				</div>
			</div>
		</main>

		<footer class="tm-footer text-center">
			<p>Copyright &copy; 2023. Aplicaciones WEB.
				<div class="container">
					<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
				</div>
			
				<div class="social">
					<a href="https://www.facebook.com/Andy.Shadow.AS/"><img src="img/facebook.png" alt="facebook"></a>
					<a href="https://github.com/AndyShaddix"><img src="img/github.png" alt="github"></a>
					<a href="https://www.instagram.com/andyesquer/"><img src="img/instagram.png" alt="instagram"></a>
				</div>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>