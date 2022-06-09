document.querySelector('input[type=email]').oninvalid = function() {

    // remove mensagens de erro antigas
    this.setCustomValidity("");
    
    // reexecuta validação
    if (!this.validity.valid) {
    
        // se inválido, coloca mensagem de erro
        this.setCustomValidity("Email inválido");
    }
    };
      