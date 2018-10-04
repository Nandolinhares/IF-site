<!DOCTYPE html>
<html lang="pt-BR">
<head>
	
	<!-- Title -->
	<title>Invasão Fantástica</title>

	<!-- Open Graph tags -->
	<meta property="og:title" content="Invasão Fantástica"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="index.php"/>
	<meta property="og:image" content="photos/if.png" />
	<meta property="og:description" content=""/>

	<!-- Principais metatags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Normalize CSS-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Meu CSS -->
	<link rel="stylesheet" type="text/css" href="main.css">

	<!-- Fonts Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>

	<header>
		<section>
			<div class="row fantastica">
				<div class="col-4 col-sm-3 col-md-3 col-lg-2">
					<img class="header-left" src="photos/header-left.png">
					<img id="logoIF" src="photos/logoDragao.png">
				</div>
				<div class="col-8 col-sm-9 col-md-4 col-lg-10">
					<img id="header-right" src="photos/header-right.png">

					<!-- Botão responsivo -->
					<input type="checkbox" name="botao_responsivo" id="bt_menu">
					<label for="bt_menu">&#9776;</label>

					<section id="redes-sociais-mobile">
						<i class="fab fa-twitter fa-md icone"></i>
						<i class="fab fa-instagram fa-md icone"></i>
						<i class="fab fa-facebook-f fa-md icone"></i>
						<i class="fab fa-youtube fa-md icone"></i>
					</section>

					<!-- Navbar -->
					<nav class="menu">
						<ul>
							<li>SOBRE</li>
							<li class="hidden-ping">•</li>
							<li>IMPRENSA</li>
							<li class="hidden-ping">•</li>
							<li>CONTATO</li>
							<li class="hidden-ping">•</li>
							<li>EXPERIÊNCIA VIP</li>
							<li class="hidden-ping">•</li>
							<li>PRÉ-VENDA DE CAMISAS</li>
							<div id="redes-sociais">
								<i class="fab fa-twitter fa-lg icone"></i>
								<i class="fab fa-instagram fa-lg icone"></i>
								<i class="fab fa-facebook-f fa-lg icone"></i>
								<i class="fab fa-youtube fa-lg icone"></i>
							</div>
						</ul>
					</nav>
				</div>
			</div>
		</section>
	</header>

	<!-- Slider -->
	<section>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="photos/slide1.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="photos/slide2.png" alt="Second slide">
		    </div>
		    <!---<div class="carousel-item">
		      <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
		    </div>
		  </div>-->
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>

	<!-- Boxes -->
	<section id="contagem-regressiva" class="boxes">
		<div class="container">
			<div class="row">
				<h2 class="contagem" id="contagem"></h2>
			</div>
		</div>
	</section>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Contagem Regressiva -->
    <script type="text/javascript" src="js/contador.js"></script>
</body>
</html>