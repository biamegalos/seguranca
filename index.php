<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sabor Saudável</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
	 crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/ulg/popper.min.js"></script>
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
				<button type="submit">
					<i class="fa fa-search"></i>
				</button>
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

	<main>
		<div id="container-imagem">

			<div class="container">
				<div class="row">

					<div class="card">
						<img src="img/chefelaranja.png">
						<div class="content">
							<h2>Noam Leroy</h2>
							<p>
								<h6> Você sabe o que é Panna Cotta? Panna Cotta é uma sobremesa especialidade do chef francês Noam Leroy. Clique para
									saber os segredos deste prato para transformá-lo em sua receita.</h6>
							</p>
							<a href="index.php">
								<h5>Saiba Mais</h5>
							</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="content">
			<div class="left box">
				<div class="upper">
					<div class="topic">Sobre Nós</div>
					<p>O site Sabor Saudável, ganhador do prêmio Lé Chasselle 2012 como melhor site gastronômico interativo da América latina,
						hoje é composto por 26 redatores.</p>
					<p>Criado em 2009 após os amigos Viery D'almeida e Verônica Megalos terem a ideia que comidas com alto valor gastronômico
						também deveria ser acessível para todos.</p>
				</div>
				<div class="lower">
					<div class="topic">Contate-Nos</div>
					<div class="phone">
						<a href="index.php">
							<i class="fas fa-phone-volume"></i>+(11) 99089-8563</a>
					</div>
					<div class="email">
						<a href="index.php">
							<i class="fas fa-envelope"></i>saborsaudavel@gmail.com</a>
					</div>
				</div>
			</div>
			<div class="middle box">
				<div class="topic">Especiais</div>
				<div>
					<a href="index.php">Receitas de Natal e Ano Novo</a>
				</div>
				<div>
					<a href="index.php">Receitas de Páscoa</a>
				</div>
				<div>
					<a href="index.php">Receitas de Dias das Mães</a>
				</div>
				<div>
					<a href="index.php">Receitas de Festa Junina</a>
				</div>
				<div>
					<a href="index.php">Receitas de Dia dos Namorados</a>
				</div>
			</div>
			<div class="right box">
				<div class="topic">Quer receber conteúdo exclusivo?</div>
				<form action="#">
					<input type="text" placeholder="Insira o endereço de e-mail">
					<input type="submit" name="" value="Enviar">
					<div class="media-icons">
						<a href="index.php">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="index.php">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="index.php">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="index.php">
							<i class="fab fa-youtube"></i>
						</a>
						<a href="index.php">
							<i class="fab fa-linkedin-in"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
		<div class="bottom">
			<p>Copyright © 2020
				<a href="index.php">Sabor Saudável</a> Todos os Direitos Reservados</p>
		</div>
	</footer>

</body>

</html>