document.querySelector('input[type=name]').oninvalid = function() {

    // remove mensagens de erro antigas
    this.setCustomValidity("");
    
    // refaz validação
    if (!this.validity.valid) {
    
        // se inválido, coloca mensagem de erro
        this.setCustomValidity("Coloque apenas letras");
    }
    };
         