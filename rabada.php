<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sabor Saudável</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akronim&family=Italianno&family=Yesteryear&display=swap" rel="stylesheet">
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

            <button class="btn">
                <i class="fas fa-sign-in-alt"></i>
                <br>Entre</br>
            </button>
            <button class="btn">
                <i class="fas fa-user-plus"></i>
                <br>Cadastrar</br>
            </button>
            <button class="btn">
                <i class="fas fa-paper-plane"></i>
                <br>Envie sua Receita</br>
            </button>
        </nav>
    </header>

    <div class="container">

        <div class="row">


            <div class="card" style="width:60%; height:80%;">
                <div class="card-header">
                    <img src="img/rabada.jpg" class="img-responsive" width="100%;">
                </div>
                <div class="card-body">
                    <p>Rabada com Batata</p>
                    <i class="fas fa-stopwatch"></i> Total: 60min |
                    <i class="fas fa-utensils"></i> 6 Porções |
                    <img src="img/medio.png" style="width:10%;">Médio
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">


                <div class="col-md-6">
                    <img src="img/ingredientes.png" style="width:60%">

                    <div class="container">
                        • 2 kg de rabada de boi<br><br>
                        • Sal a gosto<br><br>
                        • Cebola e alho<br><br>
                        • Pimenta-do-reino a gosto<br><br>
                        • Cheiro verde<br><br>
                        • 3 colheres de molho de tomate<br><br>
                        • 4 colheres de sopa azeite<br><br>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="img/preparo.png" style="width: 65%">


                    <div class="container">
                        <img src="img/1.png" style="width: 10%">Lave primeiramente a rabada com vinagre.<br><br>
                        <img src="img/2.png" style="width: 10%">Depois tempere com sal, pimenta-do-reino e cheiro verde.<br><br>
                        <img src="img/3.png" style="width: 10%">Numa panela de pressão de 7 litros, junte o azeite.<br><br>
                        <img src="img/4.png" style="width: 10%">Depois, acrescente a cebola picada e o alho.<br><br>
                        <img src="img/5.png" style="width: 10%">Quando estiver dourado, jogue a rabada e mexa para agregar o tempero.<br><br>
                        <img src="img/6.png" style="width: 10%">Adicione água até que cubra a rabada, tampe e deixe cozinhando, após pegar pressão por 30 minutos.<br><br>
                        <img src="img/7.png" style="width: 10%">Em seguida, quando a rabada estiver mole, despeje o molho de tomate, verifique o sal e a pimenta.<br><br>
                        <img src="img/8.png" style="width: 10%">Deixe ferver mais um pouco e desligue.<br><br>
                        <img src="img/9.png" style="width: 10%">Deixe esfriar um pouco até que o óleo suba todo.
                    </div>
                </div>
            </div>

        </div>

        <br> <br>
    </div>

    <footer>
        <div class="content">
            <div class="left box">
                <div class="upper">
                    <div class="topic">Sobre Nós</div>
                    CodingLab is a channel where you can learn HTML,
                    CSS, and also JavaScript along with creative CSS Animations and Effects.<br>
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
            Copyright © 2020 <a href="index.php">Sabor Saudável</a> Todos os Direitos Reservados<br>
        </div>
    </footer>



</body>

</html>