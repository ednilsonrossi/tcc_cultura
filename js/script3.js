function validaForm (){
    if(document.getElementById("nome").value == ""){
    alert('Por favor, preencha o campo Nome');
    document.getElementById("nome").focus();
    return false
    }
}