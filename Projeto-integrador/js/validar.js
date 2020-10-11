function somenteNumeros(num) {
    var er = /[^0-9.]/;
    er.lastIndex = 0;
}

function validar() {

    var nome = formulario.nome.value;
    var snome = formulario.snome.value;
    var email = formulario.email.value;
    var telefone = formulario.telefone.value;
    var textarea = formulario.textarea.value;
    let d = new Date();

    if (nome.length < 3) {
        alert('Informe seu nome');
        formulario.nome.focus();
        return false;
    }

    if (snome.length < 3) {
        alert('Informe seu sobrenome correto!');
        formulario.snome.focus();
        return false;
    }

    if (email.indexOf('@') < 0 || email.indexOf('.com') == - 1) {
        alert('Informe seu email correto!');
        formulario.email.focus();
        return false;
    }

    if (telefone.length < 7) {
        alert('Informe um telefone valido');
        formulario.telefone.focus();
        return false;
    }

    if (textarea.length <= 10) {
        alert('Digite uma mensagem com o minimo de 10 caracteres!');
        formulario.textarea.focus();
        return false;
    }

    if (document.getElementsByTagName('termouso').checked) {
        alert('Verificar o termo de uso');
        formulario.termouso.focus();
        return false;
    }
}
