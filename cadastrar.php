<!DOCTYPE html>
<html>

<head>
	<title>Sabor Saudável</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA=="
	 crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Akronimdisplay=swap" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/ulg/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="js/js.js"></script>
</head>

<style>
	body,
	html {
		margin: 0;
		padding: 0;
		height: 100%;
		background: #FAF9F6 !important;
	}

	.user_card {
		height: 400px;
		width: 350px;
		margin-top: auto;
		margin-bottom: auto;
		background: rgb(92, 162, 22);
		background: linear-gradient(90deg, rgba(92, 162, 22, 0.6727065826330532) 5%, rgba(217, 255, 179, 0.5718662464985995) 66%);
		position: relative;
		display: flex;
		justify-content: center;
		flex-direction: column;
		padding: 10px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		border-radius: 5px;

	}

	.brand_logo_container {
		position: absolute;
		height: 170px;
		width: 170px;
		top: -75px;
		border-radius: 50%;
		background: #6cbe1b;
		padding: 10px;
		text-align: center;
	}

	.brand_logo {
		height: 150px;
		width: 150px;
		border-radius: 50%;
		border: 2px solid white;
	}


	.form_container {
		margin-top: 100px;
	}

	.login_btn {
		width: 100%;
		background: #ff9220 !important;
		color: white !important;
	}

	.login_btn:focus {
		box-shadow: none !important;
		outline: 0px !important;
	}

	.login_container {
		padding: 0 2rem;
	}

	.input-group-text {
		background: #ff9220 !important;
		color: white !important;
		border: 0 !important;
		border-radius: 0.25rem 0 0 0.25rem !important;
	}

	.input_user,
	.input_pass:focus {
		box-shadow: none !important;
		outline: 0px !important;
	}

	.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
		background-color: #ff9220 !important;
	}

	a {
		color: #e7e5e5;
		text-decoration: none;
		background-color: transparent;
	}

	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
		text-decoration: none;
	}

	footer {
		width: 100%;
		position: flex;
		bottom: 0;
		left: 0;
		background: #e7e5e5 !important;
	}

	footer .content {
		max-width: 1350px;
		margin: auto;
		padding: 20px;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}

	footer .content p,
	a {
		color: #222222;
	}

	footer .content .box {
		width: 33%;
		transition: all 0.4s ease;
	}

	footer .content .topic {
		font-size: 22px;
		font-weight: 600;
		color: #222222;
		margin-bottom: 16px;
	}

	footer .content p {
		text-align: justify;
	}

	footer .content .lower .topic {
		margin: 24px 0 5px 0;
	}

	footer .content .lower i {
		padding-right: 16px;
	}

	footer .content .middle {
		padding-left: 80px;
	}

	footer .content .middle a {
		line-height: 32px;
	}

	footer .content .right input[type="text"] {
		height: 45px;
		width: 100%;
		outline: none;
		color: #d9d9d9;
		background: #000;
		border-radius: 5px;
		padding-left: 10px;
		font-size: 17px;
		border: 2px solid #222222;
	}

	footer .content .right input[type="submit"] {
		height: 42px;
		width: 100%;
		font-size: 18px;
		color: #d9d9d9;
		background: #6cbe1b;
		outline: none;
		border-radius: 5px;
		letter-spacing: 1px;
		cursor: pointer;
		margin-top: 12px;
		border: 2px solid #6cbe1b;
		transition: all 0.3s ease-in-out;
	}

	.content .right input[type="submit"]:hover {
		background: none;
		color: #6cbe1b;
	}

	footer .content .media-icons a {
		font-size: 16px;
		height: 45px;
		width: 45px;
		display: inline-block;
		text-align: center;
		line-height: 43px;
		border-radius: 5px;
		border: 2px solid #222222;
		margin: 30px 5px 0 0;
		transition: all 0.3s ease;
	}

	.content .media-icons a:hover {
		border-color: #6cbe1b;
	}

	footer .bottom {
		width: 100%;
		text-align: right;
		color: #222222;
		padding: 0 40px 5px 0;
	}

	footer .bottom a {
		color: #6cbe1b;
	}

	footer a {
		transition: all 0.3s ease;
	}

	footer a:hover {
		color: #6cbe1b;
	}

	@media (max-width:1100px) {
		footer .content .middle {
			padding-left: 50px;
		}
	}

	@media (max-width:950px) {
		footer .content .box {
			width: 50%;
		}

		.content .right {
			margin-top: 40px;
		}
	}

	@media (max-width:560px) {
		footer {
			position: relative;
		}

		footer .content .box {
			width: 100%;
			margin-top: 30px;
		}

		footer .content .middle {
			padding-left: 0;
		}
	}
</style>

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

<div id="container-imagem">

	<body>
		<div class="container h-100">
			<div class="d-flex justify-content-center h-100">
				<div class="user_card">
					<div class="d-flex justify-content-center">
						<div class="brand_logo_container">
							<img src="img/logo_entre.jpg" class="brand_logo" alt="Logo">
						</div>
					</div>
					<div class="d-flex justify-content-center form_container">
						<form>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-user"></i>
									</span>
								</div>
								<input type="text" name="" class="form-control input_user" value="" placeholder="e-mail">
							</div>
							<div class="input-group mb-3">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-user"></i>
									</span>
								</div>
								<input type="text" name="" class="form-control input_user" value="" placeholder="usuário">
							</div>
							<div class="input-group mb-2">
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="fas fa-key"></i>
									</span>
								</div>
								<input type="password" name="" class="form-control input_pass" value="" placeholder="senha">
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customControlInline">
									<label class="custom-control-label" for="customControlInline">Lembrar Senha</label>
								</div>
							</div>
							<div class="d-flex justify-content-center mt-3 login_container">
								<button type="button" name="button" class="btn login_btn">Login</button>
							</div>
						</form>
					</div>

					<div class="mt-4">
						<div class="d-flex justify-content-center links">
							Não tem uma conta?
							<a href="#" class="ml-2">Cadastre-se</a>
						</div>
						<div class="d-flex justify-content-center links">
							<a href="#">Esqueceu sua senha?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</body>

<footer>
	<div class="content">
		<div class="left box">
			<div class="upper">
				<div class="topic">Sobre Nós</div>
				<p>CodingLab is a channel where you can learn HTML, CSS, and also JavaScript along with creative CSS Animations and Effects.</p>
			</div>
			<div class="lower">
				<div class="topic">Contate-Nos</div>
				<div class="phone">
					<a href="#">
						<i class="fas fa-phone-volume"></i>+(11) 99089-8563</a>
				</div>
				<div class="email">
					<a href="#">
						<i class="fas fa-envelope"></i>saborsaudavel@gmail.com</a>
				</div>
			</div>
		</div>
		<div class="middle box">
			<div class="topic">Especiais</div>
			<div>
				<a href="#">Receitas de Natal e Ano Novo</a>
			</div>
			<div>
				<a href="#">Receitas de Páscoa</a>
			</div>
			<div>
				<a href="#">Receitas de Dias das Mães</a>
			</div>
			<div>
				<a href="#">Receitas de Festa Junina</a>
			</div>
			<div>
				<a href="#">Receitas de Dia dos Namorados</a>
			</div>
		</div>
		<div class="right box">
			<div class="topic">Quer receber conteúdo exclusivo?</div>
			<form action="#">
				<input type="text" placeholder="Insira o endereço de e-mail">
				<input type="submit" name="" value="Enviar">
				<div class="media-icons">
					<a href="#">
						<i class="fab fa-facebook-f"></i>
					</a>
					<a href="#">
						<i class="fab fa-instagram"></i>
					</a>
					<a href="#">
						<i class="fab fa-twitter"></i>
					</a>
					<a href="#">
						<i class="fab fa-youtube"></i>
					</a>
					<a href="#">
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



</html>