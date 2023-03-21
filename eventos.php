<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARQ Cultura</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<div id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <img src="assets/logo.svg" class="navbar-brand img-fluid" height="200" width="200" />
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
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

        <body>
            <section class="evento">
                <h2 class="heading"><span style="position: absolute; margin-top: 20px;">Recomendações de Eventos</span></h2>
                <a class="legend3" href="cadastroEvento.php"><small style="font-size: 15px; position: absolute; right: 115px; top: 162px; color: #915c37">Adicionar</small>
                    <img src="assets/addEvento.svg" style="position: absolute; right: 130px; top: 125px;" width="38px" height="38px"></img>
                </a>
                <section class="box-container">
                    <div class="box">
                        <img src="assets/eventosBanner.jpg" alt="">
                        <div class="content">
                            <div class="icons">
                                <i class="uil uil-calendar-alt"></i> Em 1 semana
                            </div>
                            <h3>Semana Cultural AQA</h3>
                            <h5>Local:</h5>
                            <p>Rua São bento, S/N</p>
                            <h5>Descrição:</h5>
                            <p>Uma série de eventos promovidos pela Prefeitura Municipal de Araraquara para toda a população, como: feiras de artesanato, brechós, inaguração da Praça Novo Mundo, brinquedos etc. Entrada gratuita e para todas as idades.</p>
                            <h5>Categoria: Geral</h5>
                            <div class="inputform2" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #915c37; border-top: 2px solid transparent; padding: 0.5rem; ">
                                <label for="eventoSelect" style="color: #814a23;">Selecione</label>
                                <select id="eventoSelect" name="eventoSelect " style="border: none; outline: none; align-items: center; margin-left: 95px; background-color: #d3beaf; color: #814a23;">
                                        <option value="" selected></option>
                                        <option value="vou">Vou</option>
                                        <option value="interesse">Tenho interesse</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img src="assets/eventosBanner.jpg" alt="">
                        <div class="content">
                            <div class="icons">
                                <i class="uil uil-calendar-alt"></i> 01/12/22
                            </div>
                            <h3>Interclasse 1° info x 2° info</h3>
                            <h5>Local:</h5>
                            <p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, Campus Araraquara, 250</p>
                            <h5>Descrição:</h5>
                            <p>Evento aberto ao público, com entrada franca e nas seguintes modalidades: futebol, vôlei, basquete. Apresentar convite online disponível em: www.ifsp.edu.br/events</p>
                            <h5>Categoria: Esporte</h5>
                            <div class="inputform2" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #915c37; border-top: 2px solid transparent; padding: 0.5rem; ">
                                <label for="eventoSelect2" style="color: #814a23;">Selecione</label>
                                <select id="eventoSelect2" name="eventoSelect2" style="border: none; outline: none; align-items: center; margin-left: 95px; background-color: #d3beaf; color: #814a23;">
                                        <option value="" selected></option>
                                        <option value="vou">Vou</option>
                                        <option value="interesse">Tenho interesse</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <img src="assets/eventosBanner.jpg" alt="">
                        <div class="content">
                            <div class="icons">
                                <i class="uil uil-calendar-alt"></i> 12/12/22
                            </div>
                            <h3>SNCT IFSP</h3>
                            <h5>Local:</h5>
                            <p>Instituto Federal de Educação, Ciência e Tecnologia de São Paulo, Campus Araraquara, 250</p>
                            <h5>Descrição:</h5>
                            <p>Evento aberto ao público, com entrada solidária (1kg de alimento não-perecível) sobre o tema da Ciência da computação. No auditório das 08h ao 12h.</p>
                            <h5>Categoria: Debate</h5>
                            <div class="inputform2" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #915c37; border-top: 2px solid transparent; padding: 0.5rem; ">
                                <label for="eventoSelect3" style="color: #814a23;">Selecione</label>
                                <select id="eventoSelect3" name="eventoSelect3" style="border: none; outline: none; align-items: center; margin-left: 95px; background-color: #d3beaf; color: #814a23;">
                                        <option value="" selected></option>
                                        <option value="vou">Vou</option>
                                        <option value="interesse">Tenho interesse</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn button-secondary btn-secondary button d-md-inline-block d-block mb-md-0 mb-6 mr-md-6" onclick="openPopup()">Salvar</button>
                    <button type="submit" class="btn button-secondary btn-secondary button d-md-inline-block d-block mb-md-0 mb-6 mr-md-6" onclick="openPopup()">Salvar</button>
                    <button type="submit" class="btn button-secondary btn-secondary button d-md-inline-block d-block mb-md-0 mb-6 mr-md-6" onclick="openPopup()">Salvar</button>

                    <div class="popup" id="popup" style="margin-top: 200px; padding: 15px;">
                        <img src="assets/check.svg" style="width: 120px; height: 120px;">
                        <h2>Pronto!</h2>
                        <p>As novas alterações foram salvas!</p>
                        <button type="button" onclick="closePopup()">Ok</button>
                    </div>

                    <script src="js/scriptpopUp.js">
                    </script>
                </section>
            </section>
            <footer id="contato">
                <p>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </body>

</html>