function verificarInputs() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("Password").value;
    var confirmpassword = document.getElementById("ConfirmPassword").value;
    var botao = document.getElementById("botao");

    if (username !== "" && email !== "" && password !== "" && confirmpassword !== "" && password.length >= 8 && password === confirmpassword) {
        botao.disabled = false; 
    } else {
        botao.disabled = true; 
    }
}

document.getElementById("username").addEventListener("input", verificarInputs);

document.getElementById("email").addEventListener("input", verificarInputs);

document.getElementById("Password").addEventListener("input", verificarInputs);

document.getElementById("ConfirmPassword").addEventListener("input", verificarInputs);

// Função para enviar o formulário quando o botão for clicado
function enviar() {
    //alert("Formulário enviado com sucesso!");
}

