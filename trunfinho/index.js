//
var carta1 = {
    nome: "Maçã",
    imagem: "https://static.vecteezy.com/ti/vetor-gratis/p1/2518067-frutas-kawaii-engracado-cara-felicidade-fofa-maca-desenho-vetor.jpg",
    atributos: {
        Proteina: 20,
        Lipideo: 20,
        Carboidrato: 100
    }
}
// Personagem 2
var carta2 = {
    nome: "Melancia",
    imagem: "https://thumbs.dreamstime.com/b/car%C3%A1ter-de-sorriso-feliz-da-melancia-41585997.jpg",
    atributos: {
        Proteina: 10,
        Lipideo: 0,
        Carboidrato: 80
    }
}
// Personagem 3
var carta3 = {
    nome: "Alface",
    imagem: "https://thumbs.dreamstime.com/b/alface-feliz-34699932.jpg",
    atributos: {
        Proteina: 13,
        Lipideo: 2,
        Carboidrato: 17
    }
}
// Personagem 4
var carta4 = {
    nome: "Tomate",
    imagem: 'https://img.freepik.com/vetores-gratis/personagem-de-desenho-animado-de-tomate-com-expressao-de-rosto-feliz-em-fundo-branco_1639-25186.jpg', 
    atributos: {
        Proteina: 11,
        Lipideo: 2,
        Carboidrato: 31
    }
}
// Personagem 5
var carta5 = {
    nome: "Pepino",
    imagem: 'https://st2.depositphotos.com/1345122/8174/i/600/depositphotos_81745816-stock-photo-cartoon-character-of-cucumber.jpg', 
    atributos: {
        Proteina: 90,
        Lipideo: 0,
        Carboidrato: 20
    }
}
// Personagem 6
var carta6 = {
    nome: "Banana",
 
    imagem: 'https://thumbs.dreamstime.com/b/car%C3%A1ter-feliz-da-banana-dos-desenhos-animados-30456111.jpg', 
    atributos: {
        Proteina: 100,
        Lipideo: 1,
        Carboidrato: 55
    }
}
// Personagem 7
var carta7 = {
    nome: "Couve Flor",
 
    imagem: 'https://thumbs.dreamstime.com/b/couve-flor-feliz-dos-desenhos-animados-47365229.jpg', 
    atributos: {
        Proteina: 100,
        Lipideo: 20,
        Carboidrato: 45
    }
}
// Personagem 8
var carta8 = {
    nome: "Morango",
 
    imagem: 'https://friendlystock.com/wp-content/uploads/2018/06/5-happy-strawberry-character-cartoon-clipart.jpg', 
    atributos: {
        Proteina: 45,
        Lipideo: 30,
        Carboidrato: 68
    }
}
// Personagem 9
var carta9 = {
    nome: "Cenoura",
    imagem: 'https://thumbs.dreamstime.com/b/personagem-de-banda-desenhada-de-sorriso-feliz-da-cenoura-40164775.jpg',  
    atributos: {
        Proteina: 90,
        Lipideo: 20,
        Carboidrato: 77
    }
}
// Personagem 10
var carta10 = {
    nome: "",
 
    imagem: '', 
    atributos: {
        Proteina: 35,
        Lipideo: 75,
        Carboidrato: 55
    }
}
// Personagem 11
var carta11 = {
    nome: " ",
 
    imagem: '', 
    atributos: {
        Proteina: 35,
        Lipideo: 75,
        Carboidrato: 55
    }
}
// Personagem 12
var carta12 = {
    nome: "",
 
    imagem: '', 
    atributos: {
        Proteina: 35,
        Lipideo: 75,
        Carboidrato: 55
    }
}


var cartaMaquina
var cartaJogador
var cartas = [carta1, carta2, carta3, carta4, carta5, carta6, carta7, carta8, carta9, carta10, carta11, carta12,
]

  var pontosJogador = 0;
  var pontosMaquina = 0;
  
  atualizaPlacar();
  atualizaQuantidadeCartas();
  
  function atualizaPlacar() {
    var divPlacar = document.getElementById('placar')
    var html = "Jogador " + pontosJogador + " / " + pontosMaquina + " Máquina"
  
    divPlacar.innerHTML = html
  }
  
  // Sorteia numero do indice, retira da Array com um splice e chama a função exibirCartaJogador()
  function sortearCarta() {
    var numeroCartaMaquina = parseInt(Math.random() * cartas.length)
    cartaMaquina = cartas[numeroCartaMaquina]
    cartas.splice(numeroCartaMaquina, 1)
  
    var numeroCartaJogador = parseInt(Math.random() * cartas.length);
    cartaJogador = cartas[numeroCartaJogador];
    cartas.splice(numeroCartaJogador, 1)
  
    document.getElementById('btnSortear').disabled = true
    document.getElementById('btnJogar').disabled = false
  
    exibirCartaJogador()
    
  }
  
  
  function exibirCartaJogador() {
    var divCartaJogador = document.getElementById("carta-jogador");
    var moldura =
        '<img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/card-super-trunfo-transparent.png" style=" width: inherit; height: inherit; position: absolute;">';
    divCartaJogador.style.backgroundImage = `url(${cartaJogador.imagem})`;
    var nome = `<p class="carta-subtitle">${cartaJogador.nome} </P>`;
    var opcoesTexto = ""
  
    for (var atributo in cartaJogador.atributos) {
        opcoesTexto += "<input type='radio' name='atributo' value='" + atributo + "'>" + atributo + " " + cartaJogador.atributos[atributo] + "<br>"
    }
  
    var html = "<div id='opcoes' class='carta-status'>"
  
    divCartaJogador.innerHTML = moldura + nome + html + opcoesTexto + '</div>'
  }
  
  function obtemAtributoSelecionado() {
    var radioAtributo = document.getElementsByName('atributo')
    for (let i = 0; i < radioAtributo.length; i++) {
        if (radioAtributo[i].checked) {
            return radioAtributo[i].value
        }
    }
  }
  
  function atualizaQuantidadeCartas() {
    var divQuantidadeCartas = document.getElementById('quantidade-cartas')
    var html = "Quantidade de cartas no jogo: " + cartas.length
    divQuantidadeCartas.innerHTML = html
  }
  
  function jogar() {
    var divResultado = document.getElementById("resultado")
    var atributoSelecionado = obtemAtributoSelecionado()
  
    if (
        cartaJogador.atributos[atributoSelecionado] >
        cartaMaquina.atributos[atributoSelecionado]
      ) {
        htmlResultado = "<p class='resultado-final'>Venceu</p>";
        pontosJogador++
      } else if (
        cartaJogador.atributos[atributoSelecionado] <
        cartaMaquina.atributos[atributoSelecionado]
      ) {
        htmlResultado = "<p class='resultado-final'>Perdeu</p>";
        pontosMaquina++
      } else {
        htmlResultado = "<p class='resultado-final'>Empatou</p>";
      }
  
    if (cartas.length <= 1  ) {
        alert('Fim de jogo')
        if (pontosJogador > pontosMaquina) {
            htmlResultado = '<p class="resultado-final">Você Venceu</p>'
        } else if (pontosJogador < pontosMaquina){
            htmlResultado = '<p class="resultado-final">Você Perdeu seu bostinha</p>'
        } else {
            htmlResultado = '<p class="resultado-final">Você Empatou</p>'
        }
        
    }else {
        document.getElementById('btnProximaRodada').disabled = false
    }
  
    divResultado.innerHTML = htmlResultado
    
    document.getElementById('btnJogar').disabled = true
    
    
    exibirCartaMaquina()
    atualizaPlacar()
    atualizaQuantidadeCartas()
  }
  
  function exibirCartaMaquina() {
    var divCartaMaquina = document.getElementById("carta-maquina");
    var moldura =
        '<img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/card-super-trunfo-transparent.png" style=" width: inherit; height: inherit; position: absolute;">';
    divCartaMaquina.style.backgroundImage = `url(${cartaMaquina.imagem})`;
    var nome = `<p class="carta-subtitle">${cartaMaquina.nome} </P>`;
    var opcoesTexto = ""
  
    for (var atributo in cartaMaquina.atributos) {
        opcoesTexto += "<p type='text' name='atributo' value='" + atributo + "'>" + atributo + " " + cartaMaquina.atributos[atributo] + "<br>"
    }
  
    var html = "<div id='opcoes' class='carta-status'>"
  
    divCartaMaquina.innerHTML = moldura + nome + html + opcoesTexto + '</div>'
  }
  
  function proximaRodada() {
    var divCartas = document.getElementById('cartas')
  
    divCartas.innerHTML = `<div id="carta-jogador" class="carta"></div> <div id="carta-maquina" class="carta" > </div>`
    document.getElementById('btnSortear').disabled = false
    document.getElementById('btnJogar').disabled = true
    document.getElementById('btnProximaRodada').disabled = true
  
    var divResultado = document.getElementById('resultado')
    divResultado.innerHTML = ""
  }


  