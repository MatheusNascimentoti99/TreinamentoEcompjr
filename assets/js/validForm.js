function submitLogin() {
    Document.getElementById("invalidLogin").style = "visibility: Visible;"
    console.log("clicou");
}

function submitForm(form) {
    return window.confirm("Você tem certeza?");
}