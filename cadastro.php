<?php
require("sistema_bd.php");
?>
<!DOCTYPE >
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARQ Cultura</title>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
<script>
        function formatar(mascara, documento){
            var i = documento.value.length;
            var saida = mascara.substring(0,1);
            var texto = mascara.substring(i)
            if(texto.substring(0,1) != saida){
                documento.value +=texto.substring(0,1);
            }
        }
</script>
</head>
<a class="legend2" href="login.php"><small style="font-size: 15px; position: absolute; right: 645px; top: 30px;">Voltar</small><i class="uil uil-arrow-left" style="font-size: 35px; position: absolute; right: 650px; top: 0px;"></i></a>

<body class="body-cadastro">
    <div class="container-cadastro">
        <div class="forms">
            <div class="form-cadastro">
                <p><span class="title">Cadastro</span></p>
                <form action="inserir_usuario.php" method="post" id="form-login">
                    <div class="input-field">
                        <input type="text" placeholder="Nome" class="form-control" id="id_nome" name="nome" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field valida">
                        <input type="email" placeholder="Email" class="form-control" id="id_email" name="email" required>
                        <i class="uil uil-envelope icon"></i>
                        <small>Usuário já cadastrado!</small>
                    </div>
                    <div class="input-field">
                        <input type="tel" id="id_telefone" name="telefone" placeholder="Telefone" maxlength="13" OnKeyPress="formatar('##-#####-####', this)" required>
                        <i class="uil uil-phone"></i>
                    </div>
                    <div class="input-field data">
                        <input type="date" placeholder="Data de Nascimento" value="dd-mm-yyyy" min="1932-01-01" max="2030-12-31" id="id_data" name="data" style="color:#6c757d;" required>
                        <i class="uil uil-calendar-alt"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Crie sua senha" minlength="8" maxlength="12" id="id_senha" name="senha" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Confirme sua senha" minlength="8" maxlength="12" id="id_confirmar" name="confirmar" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div hidden>
                        <p>Tipo de Perfil:</p>
                        <input type="radio" id="id_tipo" name="id_tipo" value="2" checked required>
                        <label for="id_tipo">Usuário</label><br>
                    </div>
                    <div class="input-field button-cadastro">
                    <button type="submit" class="input-field" style="margin-top: -3%; text-align: center; background-color: #915c37; border: none; color: #fff; font-size: 17px; font-weight: 500; letter-spacing: 1px; border-radius: 6px; padding: .5rem 8.5rem;">Cadastrar</button>
                    </div>
                </form>
                <div class="cadastro-signup">
                    <span class="text">Já tem uma conta?
                        <a href="login.php" class="text signup-link">Entre!</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <script src="js/script2.js"></script>
    <script src="js/script3.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/scriptCadastro.js"></script>
</body>

</html>