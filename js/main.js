let formulario = document.forms.formulario;
 
formulario.addEventListener('submit', function(event){
 
    event.preventDefault();
 
    var dados = {};
    dados.nome = formulario.nome.value;
    dados.telefone = formulario.telefone.value;
     
    var dadosTexto = JSON.stringify(dados);
    //{ "login" : "kelvin" , "mensagem" : "Olá!" }
     
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'contato.html');
    xhr.setRequestHeader("Content-Type", "application/json");
     
    xhr.onload = function(){
        var mensagem = document.querySelector("div.alert");
        mensagem.classList.remove("invisible");
        mensagem.textContent = "Seus dados foram enviados com sucesso.";
        formulario.reset();
    }
 
    xhr.send(dadosTexto);
});
