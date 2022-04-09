function envia() {
    var nome = document.getElementById("nomeid");
    var email = document.getElementById("emailid");
    var msg = document.getElementById("msgid");
    if (nome.value != "" && msg.value != "" && email.value != "" ) {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso, a sua mensagem é: ' + msg.value + ' e o seu email é: ' + email.value );
    }
}

/*
function salvar1Numero(numero, sit) {
  const url = 'https://fireapp-d4454-default-rtdb.firebaseio.com/tabela.json'
  const options = {
      method: 'POST',
      mode: 'cors',
      headers: {
        'Accept': 'application/json',
        'content-type': 'application/json;charset=utf-8'
      },
      body: `{
        "numero": "${numero}",
        "sit": "${sit}"
       }`,
  }


   
*/