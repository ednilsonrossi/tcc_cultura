<!DOCTYPE html>
< lang="pt-br">

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

        <a class="legend" href="perfil.php"><small style="font-size: 15px; position: absolute; right: -18px; top: 3px;">Perfil</small>
            <i class="perfil" style="position: absolute; right: -15px; top: -25px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle"viewBox="0 0 16 16">
            <path fill="#915c37" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill="#915c37" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </i>
        </a>

        <body>
            <a class="legend2" href="eventos.php"><small style="font-size: 15px; position: relative; right: 315px; top: 55px;">Voltar</small><i class="uil uil-arrow-left" style="font-size: 35px; position: absolute; right: 320px; top: 15px;"></i></a>
            <section class="add-ponto">
                <p>
                    </br>
                    </br>
                </p>
                <div class="container-form">
                    <form class="form" style="max-width:350px;">
                        <h3 class="title" style="color: #000; text-align: center;">Adicione um evento</h3>
                        <div class="inputform2">
                            <input type="text" placeholder="Nome">
                        </div>
                        <div class="inputform2">
                            <input type="text" placeholder="Endereço" style="margin-top: 0.5rem;">
                        </div>
                        <div class="inputform2" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #915c37; border-top: 2px solid transparent; padding: 0.5rem; ">
                            <label for="categoria" style="color: #4F4F4F;">Categoria</label>
                            <select id="categoria" name="categoriaPonto " style="border: none; outline: none; align-items: center; margin-left: 25px; background-color: #d3beaf;">
                                    <option value="" selected>Selecione</option>
		                            <option value="geral ">Eventos no Geral</option>
		                            <option value="danca ">Dança</option>
                                    <option value="literaura ">Literatura</option>
		                            <option value="musica ">Música</option>
		                            <option value="politica ">Política</option>
		                            <option value="esporte ">Esporte</option>
		                            <option value="manisfestacoes">Manifestações Religiosas</option>
		                            <option value="entretenimento ">Entretenimento/Cinema</option>
                                    <option value="debates ">Debates</option>
	                            </select>
                        </div>
                        <div class="inputform2 ">
                            <textarea placeholder="Descrição" rows="5" cols="21" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #d3beaf; border-top: 2px solid
                                transparent; padding: 0.5rem; "></textarea>
                        </div>
                    </form>
                </div>
            </section>
            <button type="submit" class="button1" onclick="openPopup()">Adicionar</button>

            <div class="popup" id="popup" style="margin-top: -25px;">
                <img src="assets/check.svg" style="width: 120px; height: 120px;">
                <h2>Pronto!</h2>
                <p>As informações vão ser analisadas e caso o evento seja criado, iremos te avisar. Fique de olho em suas "Criações" na página do seu perfil!</p>
                <button type="button" onclick="closePopup()">Ok</button>
            </div>

            <script src="js/scriptpopUp.js">
            </script>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="js/main.js"></script>
        </body>

</html>
