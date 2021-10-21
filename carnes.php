<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sabor Saudável</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="js/js.js"></script>
</head>

<body>

	<header>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="carnes.php">Carnes</a>
				<a href="index.php">Aves</a>
				<a href="index.php">Peixes</a>
				<a href="index.php">Massas</a>
				<a href="index.php">Sopas</a>
				<a href="index.php">Bolos</a>
				<a href="index.php">Bebidas</a>

			</div>

			<div id="main">
				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
			</div>

			<a class="navbar-brand" href="index.php">
				<img src="img/logo.png" alt="logo" style="width:120px; margin-left:20px; margin-right:20px;">
			</a>

			<form class="example" action="/action_page.php" style="margin:auto; width:600px; margin-right:20px;">
				<input type="text" placeholder="Pesquisar Receita.." name="search2">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>

			<a href="entrar.php">
				<button class="btn">
					<i class="fas fa-sign-in-alt"></i>
					<br>Entrar</br>
				</button>
			</a>

			<a href="cadastrar.php">
				<button class="btn">
					<i class="fas fa-user-plus"></i>
					<br>Cadastrar</br>
				</button>
			</a>

			<a href="enviar.php">
				<button class="btn">
					<i class="fas fa-paper-plane"></i>
					<br>Enviar Receita</br>
				</button>
			</a>

		</nav>
	</header>



	<div id="container">
		<main>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100" src="img/carro1.jpg" class="img-fluid" width="100%" height="auto">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/carro2.jpg" class="img-fluid" width="100%" height="auto">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/carro3.jpg" class="img-fluid" width="100%" height="auto">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="img/carro4.jpg" class="img-fluid" width="100%" height="auto">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<div class="heading">
				<br>
			</div>
			<div class="row">
				<div class="card">
					<div class="card-header">
						<img src="img/rabada.png" class="img-responsive" width="100%" height="auto">
					</div>
					<div class="card-body">
						<p>Rabada com Batata</p>
						<a href="rabada.php" class="btn">Ver Receita</a>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<img src="img/costela.png" class="img-responsive" width="100%" height="auto">
					</div>
					<div class="card-body">
						<p>Filé Mignon ao Molho de Mostarda</p>
						<a href="#" class="btn">Ver Receita</a>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<img src="img/hamburguer.png" class="img-responsive" width="100%" height="auto">
					</div>
					<div class="card-body">
						<p>Hambúrguer com Batata Rústica</p>
						<a href="#" class="btn">Ver Receita</a>
					</div>
				</div>
				<div class="card">
					<div class="card-header">
						<img src="img/rosbife.png" class="img-responsive" width="100%" height="auto">
					</div>
					<div class="card-body">
						<p>Rosbife de Mignon</p>
						<a href="#" class="btn">Ver Receita</a>
					</div>
				</div>
			</div>
	</div>
	

		<div class="heading">
		</div>

		<div class="row">
			<div class="card">
				<div class="card-header">
					<img src="img/espeto.png" class="img-responsive" width="100%" height="auto">
				</div>
				<div class="card-body">
					<p>Espeto de Filé com Legumes</p>
					<a href="#" class="btn">Ver Receita</a>
				</div>
			</div>

			<div class="card">
				<div class="card-header">
					<img src="img/bifeclegume.png" class="img-responsive" width="100%" height="auto">
				</div>
				<div class="card-body">
					<p>Rosbife com Legumes Salteados</p>
					<a href="#" class="btn">Ver Receita</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<img src="img/bifecmolho.png" class="img-responsive" width="100%" height="auto">
				</div>
				<div class="card-body">
					<p>Filé ao Molho Madeira</p>
					<a href="#" class="btn">Ver Receita</a>
				</div>
			</div>
			<div class="card">
				<div class="card-header">
					<img src="img/hamburguerart.png" class="img-responsive" width="100%" height="auto">
				</div>
				<div class="card-body">
					<p>Hambúrguer Artesanal</p>
					<a href="#" class="btn">Ver Receita</a>
				</div>
			</div>
		</div>

		</main>

		<footer>
			<div class="content">
				<div class="left box">
					<div class="upper">
						<div class="topic">Sobre Nós</div>
						<p>CodingLab is a channel where you can learn HTML,
							CSS, and also JavaScript along with creative CSS Animations and Effects.</p>
					</div>
					<div class="lower">
						<div class="topic">Contate-Nos</div>
						<div class="phone">
							<a href="#"><i class="fas fa-phone-volume"></i>+(11) 99089-8563</a>
						</div>
						<div class="email">
							<a href="#"><i class="fas fa-envelope"></i>saborsaudavel@gmail.com</a>
						</div>
					</div>
				</div>
				<div class="middle box">
					<div class="topic">Especiais</div>
					<div><a href="#">Receitas de Natal e Ano Novo</a></div>
					<div><a href="#">Receitas de Páscoa</a></div>
					<div><a href="#">Receitas de Dias das Mães</a></div>
					<div><a href="#">Receitas de Festa Junina</a></div>
					<div><a href="#">Receitas de Dia dos Namorados</a></div>
				</div>
				<div class="right box">
					<div class="topic">Quer receber conteúdo exclusivo?</div>
					<form action="#">
						<input type="text" placeholder="Insira o endereço de e-mail">
						<input type="submit" name="" value="Enviar">
						<div class="media-icons">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-instagram"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-youtube"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
						</div>
					</form>
				</div>
			</div>
			<div class="bottom">
				<p>Copyright © 2020 <a href="index.php">Sabor Saudável</a> Todos os Direitos Reservados</p>
			</div>
		</footer>

</body>

</html>