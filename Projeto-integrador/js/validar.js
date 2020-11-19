function somenteNumeros(num) {
  const er = /[^0-9() +-.]/;
  er.lastIndex = 0;
  var campo = num;
  if (er.test(campo.value)) {
    campo.value = "";
  }
}

function apenasletras(name) {
  const nome = /[<>{}]/;
  nome.lastIndex = 0;
  var campo = name;
  if (nome.test(campo.value)) {
    campo.value = "";
  }
}

function validar() {
  var nome = document.getElementsByTagName('nome');
  var snome = document.getElementsByTagName('snome');
  var email = document.getElementsByTagName('email');
  var telefone = document.getElementsByTagName('telefone');
  var textarea = document.getElementsByTagName('textarea');
  let checkbox = document.getElementById('termouso');

  if(nome.length <= 3){
    alert('informe um nome correto');
    formulario.nome.focus();
    return false;
  }else if(nome.length > 20){
    alert('Nome excede o tamanho do campo (Max:20 caracteres)');
    formulario.nome.focus();
    return false;
  }

  if(snome.length <= 3){
    alert('informe um sobrenome correto');
    formulario.snome.focus();
    return false;
  }else if(snome.length > 30){
    alert('Sobrenome excede o tamanho do campo (Max:30 caracteres)');
    formulario.snome.focus();
    return false;
  }
  
  if (email.indexOf('@') < 0 || email.indexOf('.com') == -1) {
    alert('Informe seu email correto!');
    formulario.email.focus();
    return false;
  }else if(email.length > 150){
    alert('Email excede o tamanho do campo (Max:150 caracteres)');
    formulario.email.focus();
    return false;
  }

  if (telefone.length < 7) {
    alert('Informe um telefone valido');
    formulario.telefone.focus();
    return false;
  }else if(telefone.length > 20){
    alert('Telefone excede o tamanho do campo (Max:20 caracteres)');
    formulario.telefone.focus();
    return false;
  }

  if(textarea.length > 512){
    alert('Mensagem excede o tamanho do campo (Max: 512 caracteres)');
    formulario.textarea.focus();
    return false;
  }

  if (checkbox != checkbox.checked){
    alert('Verificar o termo de uso');
    formulario.checkbox.focus();
    return false;
  }
}

function validarpesq(emailpesq){
  var emailpesq = formulariopesq.emailpesq.value;
  if (emailpesq.indexOf('@') < 0 || emailpesq.indexOf('.com') == -1) {
    alert('Informe o email de pesquisa correto! (Completo)');
    formulariopesq.emailpesq.focus();
    return false;
  }else if(emailpesq.length > 150){
    alert('Email excede o tamanho do campo (Max:150 caracteres)');
    formulariopesq.emailpesq.focus();
    return false;
  }
}

function validacadastro(){
  var login = loginform.login.value;
  var passwd = loginform.passwd.value;
  if(login.length == ""){
    alert('O campo de login deve ser preenchido');
    loginform.login.focus();
    return false;
  }
  if(passwd.length == ""){
    alert('O campo da senha deve ser preenchido');
    loginform.passwd.focus();
    return false;
  }
}