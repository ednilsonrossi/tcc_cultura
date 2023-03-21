window.addEventListener("load", setEventos);

function setEventos() {
    let button = document.getElementById('btn_login');
    button.addEventListener("click", validarLogin);

    document.getElementById("id_email").addEventListener("focus", limparCampo);
    document.getElementById("id_senha").addEventListener("focus", limparCampo);
}

function validarLogin() {
    let email = document.getElementById("id_email").value;
    let senha = document.getElementById("id_senha").value;
    let dados_form = new FormData();
    dados_form.append("email", email);
    dados_form.append("senha", senha);

    fetch("valida_login.php", {
            method: 'POST',
            body: dados_form,
        })
        .then(function(response) {
            if (!response.ok) {
                throw new Error(response.text());
            }
            return response.json();
        })
        .then(function(objeto) {
            if (objeto.autenticado) {
                if (objeto.perfil == 1) {
                    window.location.href = "public/indexAdmin.php";
                } else {
                    window.location.href = "public/indexUsuario.php";
                }
            } else {
                document.getElementById("id_msg").innerHTML = objeto.msg;
            }
        })
        .catch(function(erro) {
            document.getElementById("id_msg").innerHTML = "Erro na requisição";
            console.error(erro);
        });
}

function limparCampo() {
    document.getElementById("id_msg").innerHTML = "";
}