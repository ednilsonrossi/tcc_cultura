<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css" />
    <title>ARQ Cultura</title>
</head>

<body class="body-login">
    <div class="container-login editSelect">
        <div class="forms">
            <div class="form-login">
                <p><span class="title">Selecione</span></p>
                <p><span class="subtitle">Escolha ao menos uma opção de sua preferência.</span></p>
                <select name="language" class="custom-select" multiple required>
                    <option value="teatro">Teatro</option>
                    <option value="danca">Dança</option>
                    <option value="livro">Literatura</option>
                    <option value="musica">Música</option>
                    <option value="politica">Política</option>
                    <option value="esporte">Esporte</option>
                    <option value="religiao">Manifestações Religiosas</option>
                    <option value="estudo">Entretenimento/ Cinema</option>
                    <option value="shows">Shows</option>
                    <option value="debate">Debates</option>
                </select>
                <div class="container-select">
                    <a href="pontosCulturais.html"><input type="button" value="Selecionar" style="position: relative; border: none; padding: 3px; color: #fff; font-size: 17px; font-weight: 100; letter-spacing: 1px; border-radius: 6px; background-color: #915c37; cursor: pointer; transition: all .3s ease; left: 80px; top: 15px;"
                            required></a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/scriptSelect.js"></script>
</body>

</html>