function somenteNumeros(num) {
  const er = /[^0-9.]/;
  er.lastIndex = 0;
  var campo = num;
  if (er.test(campo.value)) {
    campo.value = "";
  }
}

function apenasnome(name) {
  const nome = /[<>{}]/;
  nome.lastIndex = 0;
  var campo = name;
  if (nome.test(campo.value)) {
    campo.value = "";
  }
}

function validar() {
  var email = formulario.email.value;
  var telefone = formulario.telefone.value;

  if (email.indexOf('@') < 0 || email.indexOf('.com') == -1) {
    alert('Informe seu email correto!');
    formulario.email.focus();
    return false;
  }

  if (telefone.length < 7) {
    alert('Informe um telefone valido');
    formulario.telefone.focus();
    return false;
  }

  if (document.getElementsByTagName('termouso').checked) {
    alert('Verificar o termo de uso');
    formulario.termouso.focus();
    return false;
  }
}