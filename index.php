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
		      <img class="d-block w-100" src="photos/IF/carrouselBeco.png" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="photos/IF/carrouselPaineis.png" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="photos/IF/carrouselIF.png" alt="Third slide">
		    </div>
		     <div class="carousel-item">
		      <img class="d-block w-100" src="photos/IF/carrouselAreaGamer.png" alt="Third slide">
		    </div>
		  </div>
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

	<!-- Boxes Contagem regressiva-->
	<section id="contagem-regressiva" class="boxes">
		<div class="container">
			<div class="row">
				<span class="col-12 col-md-6 col-lg-6 col-xl-6 flex-contagem">
					<span class="contagem_column">
						<span>+</span>
						<span id="dias"></span>
						<span class="dias_d">Dias</span>
					</span>
					<span class="contagem_column">
						<span id="horas"></span>
						<span class="dias_d">Hrs</span>
					</span>
					<span class="contagem_column">
						<span id="minutos"></span>
						<span class="dias_d">Min</span>
					</span>
					<span class="contagem_column">
						<span id="segundos"></span>
						<span class="dias_d">Seg</span>
					</span>
				</span>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<span id="descubra">Descubra tudo o que vai acontecer no Invasao!</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Programação -->
	<section class="programacao-container">
		<div class="container">
			<div class="programacao row">
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<img class="img-reponsive" src="photos/border1.png">
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<img class="img-reponsive" src="photos/border2.png">
				</div>
			</div>
			<div class="programacao row">
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<img class="img-reponsive" src="photos/border1.png">
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-xl-6">
					<img class="img-reponsive" src="photos/border2.png">
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->

	<footer>
		<div class="container">
			<div class="row patrocinadores">
				<div class="col-12 col-md-4 col-lg-3 patro">
					<h3>Patrocinio:</h3>
					<img id="logoBou" src="photos/parceiros/bouLogo.png">
					<img src="photos/parceiros/chilliLogo.png">
				</div>
				<div class="col-12 col-md-4 col-lg-5 apoio">
					<h3>Apoio:</h3>
					<img src="photos/parceiros/piticas.png">
					<img style="width: 120px !important;" src="photos/parceiros/balao.png">
					<img src="photos/parceiros/redit.png">
					<img src="photos/parceiros/cultura.png">
					<img src="photos/parceiros/bourmet.png">
					<img src="photos/parceiros/quadribol.png">
				</div>
				<div class="col-12 col-md-4 organizador">
					<h3 style="text-align: center;">Realização:</h3>
					<img id="conectat-logo" src="photos/parceiros/conectat.png">
				</div>
			</div>
			<section class="producao">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-6">
						<span>&copy; 2018 - Todos os direitos reservados a <strong>Club Conectat</strong></span>
					</div>
					<div class="col-12 col-sm-6 col-md-6">
						<p>Development by <strong>Fernando Linhares</strong> & Design by <strong>Pedro Figueiredo</strong></p>
					</div>
				</div>
			</section>
		</div>
	</footer>


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Contagem Regressiva -->
    <script type="text/javascript" src="js/contador.js"></script>
</body>
</html>