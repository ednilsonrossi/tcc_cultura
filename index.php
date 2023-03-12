<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/main.css" />
    <title>Protótipo</title>
</head>

<div id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="assets/logo.svg" class="navbar-brand img-fluid" height="200" width="200" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pontosCulturais.php">Pontos Culturais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.php">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comunidade.php">Comunidade</a>
                    </li>
                </ul>
            </div>
        </nav>
        <a class="legend" href="login.php">Entrar
            <i class="login">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path fill="#915c37" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill="#915c37" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </i>
        </a>
    </div>
</div>

<body>
    <div id="slider" class="block">
        <div class="search-box col-lg-2">
            <input type="text" class="search-text" placeholder="Pesquisar">
            <a href="#" class="search-btn">
                <img src="assets/lupa.svg" alt="Lupa" height="20" width="20">
            </a>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self mb-md-0 mb-4 intro">
                    <h1>Sistema: ARQ Cultura</h1>
                    <h4 class="mb-4">Permite a divulgação de atividades culturais na cidade de Araraquara.</h4>
                    <a href="saiba_mais.php" class="btn button-secondary btn-secondary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2">Saiba mais</a>
                </div>
                <div class="col-lg-8 col-md-6">
                    <img src="assets/slider.gif" class="slider" />
                </div>
            </div>
        </div>
    </div>
    <div id="sobre" class="block">
        <div class="container">
            <div class="row">
                <p>
                    </br>
                    </br>
                </p>
                <div class="col-md-6 align-self text-center order-md-1 order-2">
                    <img src="assets/sobre.svg" class="img-fluid" height="200" width="180" />
                </div>
                <div class="col-md-6 col-md-4  align-self-center order-md-2 order-1 mb-md-0 mb-4">
                    <h2 class="title">Saiba mais</h2>
                    <p class="mb-4">
                        Esse sistema permite que o usuário adicione e visualize pontos culturais, marque presença e crie eventos, além de ter a possibilidade de participar de comunidades com base nas suas preferências.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <footer id="contato">
        <p>
            </br>
            </br>
            </br>

        </p>
        <div class="container">
            <div class="email">
                <img src="assets/duvida.svg" />
                <h2 class="title text-center">Ficou com alguma dúvida?</h2>
                <h4 class="subtitle text-center mb-4">Deixe seu e-mail e entraremos em contato.</h4>
                <form>
                    <div class="flex-md-grow-1 pr-md-3 pb-md-0 pb-3">
                        <label for="email_input" class="sr-only">Email</label>
                        <input type="email" class="form-control w-100" id="email_input" placeholder="Seu email">
                    </div>
                    <div class="flex-grow-1 flex-md-grow-0">
                        <a href="#">
                            <button type="submit" class="btn btn-light button mb-3 d-md-inline d-block w-100">Enviar</button>
                        </a>
                    </div>
                </form>
            </div>
            <div class=" py-4">
                <div class="row">
                    <div class="col-md-7 align-self-center text-md-left text-right">
                        <ul>
                            <li>
                                <a href="#"><img src="assets/icon-facebook.svg" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/icon-instagram.svg" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/icon_github.svg" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/icon-whatsapp.svg" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>