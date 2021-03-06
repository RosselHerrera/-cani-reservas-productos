<?php
// CONECCION

$servername = "localhost:3306";
$username = "pucondis_root";
$password = "ElCani2022";
$dbname = "pucondis_pucondistillery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sqlSTOCK = "SELECT `STOCKQTY` FROM `stock` WHERE `ID` = 3";

$result = mysqli_query($conn, $sqlSTOCK);

if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$stockQty = $row["STOCKQTY"];	
  }
 
} else {
  echo "0 results";
}	


?>

<!DOCTYPE html>
<!--  ENCABEZADO HTML -->
<html lang="es" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- Author Meta -->
		<meta name="author" content="lozoronca">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>El Cañi una nueva Aventura</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="../css/linearicons.css">
		<link rel="stylesheet" href="../css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/magnific-popup.css">
		<link rel="stylesheet" href="../css/animate.min.css">
		<link rel="stylesheet" href="../css/owl.carousel.css">
		<link rel="stylesheet" href="../css/main.css">
	</head>
	<body>
		<!-- start banner Area -->
		<section class="banner-area" id="home">
			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="https://pucondistillery.cl/">
							<img src="../img/logo.jpg" alt="">
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="text-white lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li><a href="https://pucondistillery.cl/">Inicio</a></li>
							</ul>
						  </div>						
					</div>
				</nav>
			</header>
			<!-- End Header Area -->				
		</section>
		<div class="whole-wrap">
		<div class="container">
<!--  ENCABEZADO  HTML -->	


 <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">			
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-10.jpg');"></div>
			  <div class="col-lg-6 order-lg-1 my-auto showcase-text">
					
				<div align="center">
				
					<h2>Nuestros Productos</h2>
					<p class="lead mb-0">&nbsp;</p>
					<p class="lead mb-0">En este formato, caja de 12 unidades</p>
					
						<div class="col">
							<div class="card mb-4 rounded-3 shadow-sm">
							  <div class="card-header py-3">
							 	<h4 class="my-0 fw-normal"><font color="#2E9AFE">Stock disponible&nbsp;&nbsp;&nbsp;>Stock Disponible 100</font></h4>
							  </div>
							  <div class="card-body">
								<h1 class="card-title pricing-card-title">$19000<small class="text-muted fw-light">/clp</small></h1>
								<ul class="list-unstyled mt-3 mb-4">
								  <li>Caja 12 unidades</li>
								  <li>VODKA</li>
								  <li>220 cc.</li>
								  <li>42°</li>
								</ul>
								<a href="#call">
									<button type="button" class="w-100 btn btn-lg btn-outline-primary">Despacho gratuito desde 20 u</button>
							    </a>
							  </div>
							</div>
						</div>
					
				</div>
					
			  </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-20.jpg');"></div>
			  <div class="col-lg-6 my-auto showcase-text">
				
				<div align="center">
				
					<h2>Actualizando la Obra del Arte</h2>
					<p class="lead mb-0">&nbsp;</p>
					<p class="lead mb-0">Nuestra producción 2022, caja de 20 unidades</p>
				
					<div class="col">
						<div class="card mb-4 rounded-3 shadow-sm">
						  <div class="card-header py-3"> 
						    <h4 class="my-0 fw-normal"><font color="#2E9AFE">Stock disponible&nbsp;&nbsp; 100</font></h4>";
						  </div>
						  <div class="card-body">; 
						  . 
							<?php
								// CONECCION
								$servername = "localhost:3306";
								$username = "pucondis_root";
								$password = "ElCani2022";
								$dbname = "pucondis_pucondistillery";
								// Create connection
								$conn = new mysqli($servername, $username, $password, $dbname);
								// Check connection
								if ($conn->connect_error) {
								  die("Connection failed: " . $conn->connect_error);
								}
								$sqlPrecio = "SELECT `PRODPRECIO` FROM `productos` WHERE `ID` = 2";
								$result = mysqli_query($conn, $sqlPrecio);
								if (mysqli_num_rows($result) > 0) {
									while($row = mysqli_fetch_assoc($result)) {
										$sqlPrecio = $row["PRODPRECIO"];
										echo "<h2 class=card-title pricing-card-title>" . $sqlPrecio . " <small class=text-muted fw-light>/00 CLP</small></h1>";
								  }
								} else {
								  echo "0 results";
								}		
							?>	
							
							<ul class="list-unstyled mt-3 mb-4">
							  <li>Caja 20 unidades</li>
							  <li>VODKA</li>
							  <li>220 cc.</li>
							  <li>42°</li>
							</ul>
							<a href="#call">
								<button type="button" class="w-100 btn btn-lg btn-outline-primary">Despacho gratis desde 20 u</button>
							</a>
						  </div>
						</div>
					</div>
				
				</div>
			  
			  </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-30.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
		  
			<div align="center">
		  
				<h2>Nuestra Experiencia</h2>
				<p class="lead mb-0">&nbsp;</p>
				<p class="lead mb-0">Altos estándares desde 2015, </p>
				<p class="lead mb-0">Cordiales saludos a nuestros colaboradores y distribuidores</p>
				
				<div class="col">
						<div class="card mb-4 rounded-3 shadow-sm">
						  <div class="card-header py-3">
							<h4 class="my-0 fw-normal"><font color="#2E9AFE">somos</font></h4>
						  </div>
						  <div class="card-body">
							<h1 class="card-title pricing-card-title">CLP<small class="text-muted fw-light">/00</small></h1>
							<ul class="list-unstyled mt-3 mb-4">
							  <li>Espíritus del Cañi</li>
							  <li>Productos de calidad</li>
							  <li>Maestros destiladores</li>
							  <li>Amantes del ecosistema</li>
							</ul>
							<a href="#call">
								<button type="button" class="w-100 btn btn-lg btn-outline-primary">Despacho liberado desde 20 u</button>
							</a>
						  </div>
						</div>
					</div>
				
			
			</div>
			
          </div>
        </div>
      </div>
    </section>
 <!-- Image Showcases -->	
	
<!--  FOOTER  HTML -->
        </div>
		</div>
		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Somos</h6>
							<p>
								Profesionales de la comunicación visual y las   
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> todos los derechos reservados | construido con Bootstrap4 <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://distillery.cl" target="_blank">Lozoronca Producciones</a></p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
					</div>
					<div class="col-lg-5  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>Mant&eacute;ngase actualizado con nuestra última</p>
								<div class="" id="mc_embed_signup">
									<!-- <form id ="formNew" name="formNew" action="jsp/registro.jsp" method="post"> -->
										<div class="d-flex flex-row">		
											<input class="form-control" id="EMAIL" name="EMAIL" placeholder="Ingresa tu Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu Email '" required="" type="email">
												<a href="mailto:reservas@pucondistillery.cl?Subject=Reserva boton newsletter" target =_"Top">
													<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
													<div style="position: absolute; left: -5000px;">
														<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
													</div>
												</a>
										</div>		
										<div class="info"></div>
									<!-- </form> -->
								</div>
							</div>
					</div>						
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Siguenos en</h6>
							<p>RRSS</p>
							<div class="footer-social d-flex align-items-center">
								<a href="https://www.instagram.com/espiritus_del_cani/"><i class="fa fa-instagram"></i></a>
									<a href="https://web.facebook.com/espiritus_del_cani/"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/espiritus_del_cani"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>							
				</div>
			</div>
		</footer>	
		<!-- End footer Area -->			

		<script src="../js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="../js/vendor/bootstrap.min.js"></script>
		<script src="../js/jquery.ajaxchimp.min.js"></script>
		<script src="../js/jquery.magnific-popup.min.js"></script>	
		<script src="../js/owl.carousel.min.js"></script>			
		<script src="../js/jquery.sticky.js"></script>
		<script src="../js/slick.js"></script>
		<script src="../js/jquery.counterup.min.js"></script>
		<script src="../js/waypoints.min.js"></script>		
		<script src="../js/main.js"></script>
		
	</body>
</html>