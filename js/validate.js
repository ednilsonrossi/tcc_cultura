const senha = document.getElementById('id_senha');
const confirmar = document.getElementById('id_confirmar');

function validate(item) {
    item.setCustomValidity('');
    item.checkValidity();

    if (item == confirmar) {
        if(item.value == senha.value) item.setCustomValidity('');
        else item.setCustomValidity('As senhas digitadas não são iguais. Verifique-as e corrija.');
    }
}

senha.addEventListener('input', function () { validate(senha) });
confirmar.addEventListener('input', function () { validate(confirmar) });