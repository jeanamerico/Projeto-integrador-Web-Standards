function validar() {
    var nome = formulario.nome.value;
    var snome = formulario.snome.value;
    var email = formulario.email.value;
    var telefone = formulario.telefone.value;
    var textarea = formulario.textarea.value;

    if(nome.length < 3){
        alert('Informe seu nome correto!');
        formulario.nome.focus();
        return false;
    }

    if(snome.length == "" || snome.length < 3){
        alert('Informe seu sobrenome correto!');
        formulario.snome.focus();
        return false;
    }

    if(email.length == "" || email.length < 3){
        alert('Informe seu email correto!');
        formulario.email.focus();
        return false;
    }

    if(telefone.length == "" || telefone.length < 7){
        alert('Informe um telefone valido');
        formulario.telefone.focus();
        return false;
    }

    if(textarea.length == "" || textarea.length <= 10){
        alert('Digite uma mensagem com o minimo de 10 caracteres!');
        formulario.textarea.focus();
        return false;
    }
}
