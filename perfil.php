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
        <a class="legend" href="perfil.php"><small style="font-size: 15px; position: absolute; right: -18px; top: 3px;">Perfil</small>
            <i class="perfil" style="position: absolute; right: -15px; top: -25px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle"viewBox="0 0 16 16">
            <path fill="#915c37" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill="#915c37" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </i>
        </a>
    </div>
</div>

<body>
    <section class="section-perfil">
        </br>
        <div class="perfil-header">
            <div class="perfil-port">
                <div class="perfil-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="170" height="170" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                </div>
            </div>
        </div>
        <div class="perfil-body">
            <div class="perfil-bio">
                <h3 class="title">Aluno</h3>
            </div>
        </div>
        <div class="perfil-footer">
            <div class="lista-dados" style="margin-left: 180px;">
                <h4 class="title">Dados</h4>
                <li><i class="email"></i>Email: aluno@ifsp.edu.br</li>
                <li><i class="fone"></i>Fone: (16)123456789</li>
                <li><i class="nascimento"></i>Data de nascimento: 13/05/2000</li>
                <li><i class="senha"></i>Senha: ****</li>
            </div>
            <div class="lista-dados" style="margin-left: -20px;">
                <h4 class="title">Criações</h4>
                <li><i class="pontos"></i>Pontos Culturais: Teatro Municipal.</li>
                <li><i class="eventos"></i>Eventos: Batalha de Rap.</li>
            </div>
            <div class="lista-atividades" style="margin-left: 10px;">
                </br>
                <h4 class="title">Atividades</h4>
                <li><i class="atividades-user"></i>Você adicionou o evento "SEMANA CULTURAL AQA" na categoria "Vou"!</li>
                <li><i class="atividades-user"></i>Você entrou na comunidade "Clube de Dança"!</li>
                </br>
                </br>
                </br>
                </br>
                <p></p>
            </div>
            <a href="login.php">
                <button type="button" class="button2" style="top: 1000px; left: 685px">Logout</button>
            </a>
        </div>
    </section>
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
