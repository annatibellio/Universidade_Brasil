function validar(){
    let nome = document.getElementById
    ("nome").value;
    let email = document.getElementById
    ("email").value;  
    let assunto = document.getElementById
    ("assunto").value;
    let mensagem = document.getElementById
    ("mensagem").value; 

    if(nome.trim()===""){
        alert("Nome é de preenchimento obrigatório");
        return false;
    }
    if(email.trim()===""){
        alert("Email é de preenchimento obrigatório");
        return false;
    }
    if(assunto.trim()===""){
        alert("Selecione um assunto!");
        return false;
    }
    if(mensagem.trim()===""){
        alert("Escreva uma mensagem!");
        return false;
    }
    return true
}

function verificarOpcao(){
    let assunto = document.getElementById("assunto").value;
    let oculta = document.getElementById("oculta");

    if(assunto === "outro"){
        oculta.style.display = "block";
    }
    else{
        oculta.style.display = "none"
    }
}