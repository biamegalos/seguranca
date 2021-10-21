<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sabor Saudável</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/ulg/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/js.js"></script>
</head>

<style>
    .bg-dark {
        background-color: #e7e5e5 !important;
    }

    .sidenav {
        position: block;
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    #main {
        transition: margin-left .5s;
        padding: 16px;
        margin-left: 20px;
        margin-right: 20px;
    }

    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }

        .sidenav a {
            font-size: 18px;
        }
    }

    body {
        font-family: Arial;
    }

    * {
        box-sizing: border-box;
    }

    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        float: left;
        width: 80%;
        background: #f1f1f1;
    }

    form.example button {
        float: left;
        width: 10%;
        padding: 10px;
        background: #6cbe1b;
        color: white;
        font-size: 17px;
        border: 1px solid grey;
        border-left: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #5a9b1b;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    .btn {
        border: none;
        color: #111;
        padding: 12px 10px;
        font-size: 15px;
        cursor: pointer;
        font-family: Arial, Helvetica, sans-serif;
        margin-right: 25px;
    }

    .btn:hover {
        background-color: #6cbe1b;
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

<body>

    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="carnes.php">Carnes</a>
                <a href="#">Aves</a>
                <a href="#">Peixes</a>
                <a href="#">Massas</a>
                <a href="#">Sopas</a>
                <a href="bolos.php">Bolos</a>
                <a href="#">Bebidas</a>

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

            <a href="entre.php">
                <button class="btn">
                    <i class="fas fa-sign-in-alt"></i>
                    <br>Entrar</br>
                </button>
            </a>

            <button class="btn">
                <i class="fas fa-user-plus"></i>
                <br>Cadastrar</br>
            </button>

            <button class="btn">
                <i class="fas fa-paper-plane"></i>
                <br>Enviar Receita</br>
            </button>

        </nav>
    </header>

    <div id="container" style="padding-left:50px; padding-right:50px;">
        <img src="img/enviar.png" style="width:30%">
        <div class="form-group">
            <label for="exampleFormControlInput1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Título da Receita</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Ingredientes</label>
            <input type="email" class="form-control" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Modo de Preparo</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="opcao1">
            <label class="form-check-label" for="inlineCheckbox1">Fácil</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="opcao2">
            <label class="form-check-label" for="inlineCheckbox2">Médio</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="opcao3">
            <label class="form-check-label" for="inlineCheckbox3">Difícil</label>
        </div>

        <form>
            <div class="form-group"><br>
                <label for="exampleFormControlFile1">Envie uma Foto da Receita</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <br>

        <button type="submit" class="btn btn-primary" style="background-color: #6cbe1b; padding: 12px 30px; margin-bottom:20px;">Enviar</button>

    </div>

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