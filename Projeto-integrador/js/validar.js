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
  var nome = formulario.nome.value;
  var snome = formulario.snome.value;
  var email = formulario.email.value;
  var telefone = formulario.telefone.value;

  if(nome.length <= 3){
    alert('informe um nome correto');
    formulario.nome.focus();
    return false;
  }

  if(snome.length <= 3){
    alert('informe um sobrenome correto');
    formulario.snome.focus();
    return false;
  }
  
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