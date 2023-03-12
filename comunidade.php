<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARQ Cultura</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<div id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="assets/logo.svg" class="navbar-brand img-fluid" height="200" width="200" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pontosCulturais.php">Pontos Culturais</a>
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
        <a class="legend" href="perfil.php"><small style="font-size: 16px; position: absolute; right: 3px; top: 2px;">Perfil</small>
            <i class="perfil" style="position: absolute; right: 7px; top: -30px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle"viewBox="0 0 16 16">
            <path fill="#915c37" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill="#915c37" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </i>
        </a>

        <a class="legend" href="duvidas.php"><small style="font-size: 15px; position: absolute; right: -57px; top: 2px;">Ajuda</small>
            <i class="bi bi-question-circle" style="position: absolute; right: -50px; top: -47px; font-size: 38px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
            </i>
        </a>

        <body style="background-color: #ede1d8">
            <h2 class="heading"><span style="position: absolute; margin-top: 20px; font-size: 25px; font-weight: 700;">Sugestões de Comunidade</span></h2>
            <p>
                </br>
                </br>
            </p>
            <div class="row align-items-md-stretch">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg rounded-3" style="background: #916f57;">
                        <div class="col-md-2">
                            <img src="assets/comunidade.svg" width="80px" height="80px">
                        </div>
                        <h3 class="title">Rock Every Day</h3>
                        <p>Qntd de Membros: 07 usuários</p>
                        <p>Idade Mínima: 18 anos</p>
                        <a href="modeloChat.php">
                            <button class="btn btn-outline-light" type="button"> <img src="assets/porta.svg" height="30px" width="30px"> Entrar</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg rounded-3" style="background: #916f57;">
                        <div class="col-md-2">
                            <img src="assets/comunidade.svg" width="80px" height="80px">
                        </div>
                        <h3 class="title">Clube de Dança</h3>
                        <p>Qntd de Membros: 13 usuários</p>
                        <p>Idade Mínima: 16 anos</p>
                        <a href="chat.php">
                            <button class="btn btn-outline-light" type="button"><img src="assets/porta.svg" height="30px" width="30px"> Entrar</button>
                        </a>
                    </div>
                </div>
                <p>
                    </br>
                </p>
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg rounded-3" style="background: #916f57;">
                        <div class="col-md-4">
                            <img src="assets/comunidade.svg" width="80px" height="80px">
                        </div>
                        <h2 class="title">Beliebers</h2>
                        <p>Qntd de Membros: 23 usuários</p>
                        <p>Idade Mínima: Livre</p>
                        <a href="modeloChat.php">
                            <button class="btn btn-outline-light" type="button"><img src="assets/porta.svg" height="30px" width="30px"> Entrar</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg rounded-3" style="background: #916f57;">
                        <div class="col-md-4">
                            <img src="assets/comunidade.svg" width="80px" height="80px">
                        </div>
                        <h2 class="title">Shows Tony</h2>
                        <p>Qntd de Membros: 05 usuários</p>
                        <p>Idade Mínima: 16 anos</p>
                        <a href="modeloChat.php">
                            <button class="btn btn-outline-light" type="button"><img src="assets/porta.svg" height="30px" width="30px"> Entrar</button>
                        </a>
                    </div>
                </div>
                <footer id="contato">
                    <p>
                        </br>
                        </br>
                    </p>
                    <div class="py-4">
                        <div class="row">
                            <div class="col-md-7 align-self-center text-md-left text-right">
                                <ul>
                                    <li>
                                        <a href="# "><img src="assets/icon-facebook.svg" /></a>
                                    </li>
                                    <li>
                                        <a href="# "><img src="assets/icon-instagram.svg" /></a>
                                    </li>
                                    <li>
                                        <a href="# "><img src="assets/icon_github.svg" /></a>
                                    </li>
                                    <li>
                                        <a href="# "><img src="assets/icon-whatsapp.svg" /></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
        </body>

</html>