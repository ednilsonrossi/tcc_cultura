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
        <a class="legend" href="perfil.php"><small style="font-size: 16px; position: absolute; right: 22px; top: 2px;">Perfil</small>
            <i class="perfil" style="position: absolute; right: 26px; top: -30px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-circle"viewBox="0 0 16 16">
            <path fill="#915c37" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill="#915c37" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            </i>
        </a>
        <a class="legend" href="duvidas.php"><small style="font-size: 15px; position: absolute; right: -37px; top: 2px;">Ajuda</small>
            <i class="bi bi-question-circle" style="position: absolute; right: -30px; top: -45px; font-size: 38px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                  </svg>
            </i>
        </a>

        <body>
            <section class="add-ponto">
                <p>
                    </br>
                    </br>
                </p>
                <div class="container-form2">
                    <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118560.67414525045!2d-48.22778205793969!3d-21.779445649534303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f15fecb7508b%3A0xbdaebe35da49b086!2sAraraquara%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1668619212415!5m2!1spt-BR!2sbr"
                        allowfullscreen=" " loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <form class="form2">
                        <h3 class="title" style="color: #000;">Adicione um ponto</h3>
                        <div class="inputform2">
                            <input type="text" placeholder="Nome">
                        </div>
                        <div class="inputform2">
                            <input type="text" placeholder="Endereço" style="margin-top: 0.5rem;">
                        </div>
                        <div class="inputform2" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #915c37; border-top: 2px solid transparent; padding: 0.5rem; ">
                            <label for="categoria" style=" color: #814a23;">Categoria</label>
                            <select id="categoria" name="categoriaPonto " style="border: none; outline: none; align-items: center; margin-left: 55px; background-color: #d3beaf;">
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
                        <div class="inputform2">
                            <textarea placeholder="Descrição" rows="5" cols="25" style="border-radius: 2px; border: none; outline: none; margin-top: 0.5rem; align-items: center; display: flex; border-bottom: 2px solid #d3beaf; border-top: 2px solid
                                transparent; padding: 0.5rem; "></textarea>
                        </div>
                    </form>
                </div>
            </section>
            <button type="submit" class="button2" onclick="openPopup()">Adicionar</button>

            <div class="popup" id="popup">
                <img src="assets/check.svg" style="width: 120px; height: 120px;">
                <h2>Pronto!</h2>
                <p>As informações vão ser analisadas e caso o ponto seja adicionado ao mapa, iremos te avisar. Fique de olho em suas "Criações" na página do seu perfil!</p>
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
            <script>
                let subMenu = document.getElementById("subMenu");

                function toggleMenu() {
                    subMenu.classList.toggle("open-menu");
                }
            </script>

        </body>

</html>